<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends Common_Controller {

	public function __construct() {
		parent::__construct();
		$this->data['header'] = 'two';
	}

	public function index() {
		$this->checkAge();

		if ($this->session->userdata('UserId')) {
			redirect(base_url());
		}

		$this->load->view('frontend/layout/header', $this->data);
		$this->load->view('frontend/pages/login');
		$this->load->view('frontend/layout/footer');
	}

	public function setAge() {
		$this->session->set_userdata('setAge', 'Done');
	}

	public function signUp() {

		$this->checkAge();
		if ($this->session->userdata('UserId')) {
			redirect(base_url());
		}
		$this->load->view('frontend/layout/header', $this->data);
		$this->load->view('frontend/pages/signup');
		$this->load->view('frontend/layout/footer');
	}

	public function doRegistration() {

		if (empty($this->cm->get_specific('users', array("email" => $this->input->post('reg_email'))))) {
			/*	if ($this->input->post('reg_type') == 1) {
					$status = 1;
					$verified = 'Yes';
				} else {
					$status = 0;
					$verified = 'No';
			*/
			$status = 0;
			$verified = 'No';

			$to = $this->input->post('reg_email');
			$user_type = in_array($this->input->post('reg_type'), [1, 2]) ? $this->input->post('reg_type') : 1;

			$in_array = [
				'name' => $this->input->post('reg_name'),
				'email' => $this->input->post('reg_email'),
				'login_type' => $user_type,
				// 'login_password'    => md5($this->input->post('reg_pwd')),
				'login_password' => password_hash($this->input->post('reg_pwd'), PASSWORD_DEFAULT),
				'gender' => $this->input->post('reg_gender'),
				'status' => $status,
				'account_verified' => $verified,
			];
			//print_r($in_array);exit;
			$insert_id = $this->cm->insert('users', $in_array);
			if ($insert_id) {
				$this->cm->insert('user_preference', array("user_id" => $insert_id));
				$link = base_url('verify_account?key=') . base64_encode(urlencode($insert_id));
				$message = '<p>Please verify your email for ' . SITE_NAME . '</p> <p> <a href="' . $link . '"> Click here </a> to confirm your email <br>' . $link . '</p>';
				SendEmailTo($to, SITE_NAME . ' Account Verify', $message);

				print "ok";
			} else {
				print "notok";
			}
		} else {
			print 'Sorry !!! User already exists with this email !!!';
		}
	}

	public function doLogin() {

		$chk = $this->cm->get_all('users', array(
			"email" => $this->input->post('login_email'),
			// "login_password" => md5($this->input->post('login_pwd'))
		));

		if (empty($chk)) {
			print 'Sorry !!! Email & Password mismatch !!!';
		} else {
			if ($chk[0]->status == 0) {
				print 'Sorry ' . $chk[0]->name . '!!! Your account is not activated yet !!!';
			} else if (!password_verify($this->input->post('login_pwd'), $chk[0]->login_password)) {
				die('Sorry!!! Invalid login credentials!!!');
			} else {
				if ($chk[0]->login_type == 0) {
					die('Sorry!!! Invalid login credentials!!!');
				}

				$this->cm->update('users', array(
					"id" => $chk[0]->id,
				), array(
					"isLogin" => 1,
					"login_time" => date('Y-m-d H:i:s'),
				));

				$this->session->set_userdata('curr_user', $this->getUserDetails($chk[0]->id)[0]);
				$this->session->set_userdata('UserId', $chk[0]->id);
				$this->session->set_userdata('UserName', $chk[0]->name);
				$this->session->set_userdata('UserType', $chk[0]->login_type);
				$this->session->set_userdata('UserCredit', $chk[0]->credit);
				$this->session->set_userdata('AccountVerified', $chk[0]->account_verified);
				print 'ok';
			}
		}
	}

	function verify_account() {
		$key = $this->input->get('key');
		$uid = base64_decode(urldecode($key));

		if ($uid) {
			$this->db->update('users', array('account_verified' => 'Yes', 'status' => 1), array('id' => $uid));
			update_rank();
			$this->data['message'] = 'Thank you for join with us, Now you can enjoy our services.';
			$this->load->view('frontend/layout/header', $this->data);
			$this->load->view('frontend/pages/verify_account', $this->data);
			$this->load->view('frontend/layout/footer');
		} else {
			$this->data['message'] = 'Invalid or expired url, Please contact with site support.';
			$this->load->view('frontend/layout/header', $this->data);
			$this->load->view('frontend/pages/verify_account', $this->data);
			$this->load->view('frontend/layout/footer');
		}

	}

	public function logOut() {
		$this->cm->update('users', array("id" => $this->session->userdata('UserId')), array("isLogin" => 0));
		$this->session->set_userdata('UserId', '');
		$this->session->set_userdata('UserName', '');
		$this->session->set_userdata('UserType', '');
		$this->session->set_userdata('AccountVerified', '');
		$this->session->unset_userdata('UserId');
		$this->session->unset_userdata('UserName');
		$this->session->unset_userdata('UserType');
		$this->session->unset_userdata('AccountVerified');
		$this->session->unset_userdata('curr_user');
		$this->session->unset_userdata('UserCredit');
		$this->session->unset_userdata('credited_amount');
		redirect(base_url());
	}

//**************************
	public function passwordResetSubmit() {
		$rest = base64_decode($this->input->post('user_secret', TRUE));
		$explode_string = explode('-', $rest);

		$user_id = $explode_string[0];
		$reset_otp = $explode_string[1];

		$admin_password = $this->input->post('password', TRUE);
		$admin_reset_password = $this->input->post('confirm_password', TRUE);
		$this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE) {

			$return_data['message'] = validation_errors('<span>', '</span>');
			$return_data['success'] = FALSE;

		} else {
			$admins = $this->cm->getSingleRow('id,login_password,email', 'users', array('id' => $user_id));
			if ($admins) {

				$enc_pass = password_hash($admin_password, PASSWORD_DEFAULT);
				$data = array(
					'updated_at' => date("Y-m-d H:i:s"),
					'login_password' => $enc_pass,
				);
				if ($this->db->update('users', $data, array('id' => $user_id))) {

					$return_data['message'] = 'Password has been updated.';
					$return_data['success'] = TRUE;
				} else {
					$return_data['message'] = 'Error occurred. Please try again.';
					$return_data['success'] = FALSE;
				}
			} else {
				$return_data['message'] = 'Error occurred. Please try again.';
				$return_data['success'] = FALSE;
			}
		}
		echo json_encode($return_data);
	}

	public function reset_password($str = '') {
		$ar = base64_decode($str);
		$ar = explode('-', $ar);

		if (count($ar) == 2) {
			$user_id = $ar[0];
			$reset_otp = $ar[1];
			$admins = $this->cm->getSingleRow('id,reset_otp', 'users', array('id' => $user_id));

			if ($admins) {
				if ($admins['reset_otp'] == $reset_otp) {
					$this->data['user_secret'] = $str;

					$this->load->view('frontend/layout/header', $this->data);
					$this->load->view('frontend/pages/reset_password', $this->data);
					$this->load->view('frontend/layout/footer');

				} else {
					$this->session->set_flashdata('notification_msg', message('It looks like this password reset link can\'t be used anymore. This probably means that you sent us another password reset request; in that case you\'ll need to use the newer reset link.', 4));
					$this->load->view('frontend/layout/header', $this->data);
					$this->load->view('frontend/pages/login');
					$this->load->view('frontend/layout/footer');
				}
			} else {
				$this->session->set_flashdata('notification_msg', message('Your reset password link is wrong.', 2));
			}
		} else {
			$this->session->set_flashdata('notification_msg', message('Error occurred. Please try again.', 2));
			$this->load->view('frontend/layout/header', $this->data);
			$this->load->view('frontend/pages/login');
			$this->load->view('frontend/layout/footer');
		}
	}

	public function forgot_password() {
		$email = $this->input->post('forgot_email', TRUE);
		$return_data = array();
		$admins = $this->db->select('NULLIF(u.name,up.display_name) as name,u.id,u.email')->join('user_preference up', 'up.user_id=u.id', 'left')->where('u.email', $email)->from('users u')->get()->row();

		if ($admins) {
			$this->cm->update_otp($admins->id, 'admin');
			$results_otp = $this->cm->getSingleRow('reset_otp', 'users', array('id' => $admins->id));
			$this->load->library('encryption');
			$salt = $this->config->item('encryption_key');
			$str = $admins->id . '-' . $results_otp['reset_otp'];
			$username = base64_encode($str);
			$reset_link = base_url('reset_password/' . $username);

			$to = $admins->email;
			$subject = 'Reset your password';
			$message = '<table width="100%">
			<tbody>
				<tr>
					<td style="padding: 0 20px; font: normal 13px/18px Arial, Helvetica, sans-serif; color: #666;" align="left" valign="top">
						<p><span style="color: #000000;">Hello ' . $admins->name . ',</span></p>
						<p><span style="color: #000000;">As requested, here is the link to reset your password. If you didn\'t make this request then ignore the email.</span></p>
						<p>&nbsp;</p>
						<p><span style="color: #000000;">If you did make the request, then <a href="' . $reset_link . '" target="_blank">click here</a> to reset your password.</span></p>
					</td>
				</tr>
			</tbody>
			</table>';
			//$message = setEmailTemplate($message);
			SendEmailTo($to, $subject, $message);
			$return_data['message'] = 'A password reset link is sent to your email address.';
			$return_data['success'] = TRUE;
		} else {
			$return_data['message'] = 'Your email address is invalid.';
			$return_data['success'] = FALSE;
		}
		echo json_encode($return_data);
	}

}
