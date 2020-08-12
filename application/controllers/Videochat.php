<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class Videochat extends Common_Controller {
	public function __construct() {
		parent::__construct();
		$this->checkLogin();
		$this->data['header'] = 'two';
	}
	public function index() {
		$this->data['chat'] = $this->db->query("select c.id, c.sender_id, u.usernm sender_unm, c.receiver_id, up.usernm receiver_unm, c.msg, c.created_at from chat c left JOIN users u ON u.id = c.sender_id left JOIN users up ON up.id = c.receiver_id where (c.sender_id = '" . $this->session->userdata('UserId') . "' AND c.receiver_id = '" . $this->session->userdata('vcPerformerId') . "') OR (c.sender_id = '" . $this->session->userdata('vcPerformerId') . "' AND c.receiver_id = '" . $this->session->userdata('UserId') . "') order by c.id ASC")->result();
		$this->data['subs'] = $this->cm->get_all('subscribe', array("user_id" => $this->session->userdata('UserId'), "performer_id" => $this->session->userdata('vcPerformerId')));
		$this->data['usrnm'] = $this->db->query("select u.name, up.display_name from users u left join user_preference up on up.user_id = u.id where u.id = '" . $this->session->userdata('UserId') . "'")->result();
		$this->load->view('frontend/layout/header', $this->data);
		$this->load->view('frontend/pages/video_chat');
		$this->load->view('frontend/layout/footer');
	}

	function start_live() {
		$this->data['last_chat'] = $this->db->where('performer_id', $this->session->userdata('UserId'))->order_by('id', 'desc')->get('performer_live')->row();

		$this->data['chat'] = $this->db->query("select c.id, c.sender_id, u.usernm sender_unm, c.receiver_id, up.usernm receiver_unm, c.msg, c.created_at from chat c left JOIN users u ON u.id = c.sender_id left JOIN users up ON up.id = c.receiver_id where (c.sender_id = '" . $this->session->userdata('UserId') . "' AND c.receiver_id = '" . $this->session->userdata('vcPerformerId') . "') OR (c.sender_id = '" . $this->session->userdata('vcPerformerId') . "' AND c.receiver_id = '" . $this->session->userdata('UserId') . "') order by c.id ASC")->result();
		$this->data['subs'] = $this->cm->get_all('subscribe', array("user_id" => $this->session->userdata('UserId'), "performer_id" => $this->session->userdata('vcPerformerId')));
		$this->data['usrnm'] = $this->db->query("select u.name, up.display_name from users u left join user_preference up on up.user_id = u.id where u.id = '" . $this->session->userdata('UserId') . "'")->result();
		$this->load->view('frontend/layout/header', $this->data);
		$this->load->view('frontend/pages/start_video_chat');
		$this->load->view('frontend/layout/footer');

	}

	public function videoChatStart() {
		$chk = $this->cm->get_specific('users', array("id" => $this->input->post('performer_id')));
		if ($chk[0]->isLogin == '1' && $chk[0]->hasWebcam == 'Y') {
			$res = $this->db->query("select id from performer_live where performer_id = '" . $this->input->post('performer_id') . "'   order by id DESC limit 0, 1")->result();
			if ($res) {
				$insertArray = array(
					"user_id" => $this->session->userdata('UserId'),
					"performer_id" => $this->input->post('performer_id'),
					"type" => $this->input->post('type'),
					"url_hash" => $res[0]->id,
				);
				$chat_id = $this->cm->insert('video_chat', $insertArray);
				$this->session->set_userdata('vcPerformerId', $this->input->post('performer_id'));
				//$this->session->set_userdata('vcPerformerId', $this->input->post('performer_id'));
				$this->session->set_userdata('vcChatId', $chat_id);
				print 'ok';
			} else {
				print 'busy';
			}
		} else {
			print 'notok';
		}
	}
	public function checkNewVideoChatRequest() {
		$chk = $this->cm->get_all('video_chat', array("performer_id" => $this->input->post('performer_id'), "status" => '0'), '1', '0');
		if (!empty($chk)) {
			$usrnm = $this->db->query("select u.id, u.name, up.display_name from users u left join user_preference up on up.user_id = u.id where u.id = '" . $chk[0]->user_id . "'")->result();
			if ($usrnm[0]->display_name != '') {
				$nm = $usrnm[0]->display_name;
			} else {
				$nm = $usrnm[0]->name;
			}
			print $chk[0]->url_hash . '~~' . $nm . '~~' . $usrnm[0]->id;
		} else {
			print 'no-request';
		}
	}
	public function cancelVideoChat() {
		$this->cm->update('video_chat', array("performer_id" => $this->input->post('performer_id'), "url_hash" => $this->input->post('url_hash'), "user_id" => $this->input->post('user_id')), array("elapsed_time" => '0', "status" => '3'));
	}
	public function acceptVideoChat() {
		$this->session->set_userdata('vcUserId', $this->input->post('user_id'));
		$this->cm->update('video_chat', array("performer_id" => $this->input->post('performer_id'), "url_hash" => $this->input->post('url_hash'), "user_id" => $this->input->post('user_id')), array("status" => '1'));
	}
	public function checkVideoChatStatus() {
		$chk = $this->cm->get_specific('video_chat', array("id" => $this->input->post('chat_id')));
		if ($chk[0]->status == '3') {
			$usrnm = $this->db->query("select u.name, up.display_name from users u left join user_preference up on up.user_id = u.id where u.id = '" . $chk[0]->performer_id . "'")->result();
			if ($usrnm[0]->display_name != '') {
				$nm = $usrnm[0]->display_name;
			} else {
				$nm = $usrnm[0]->name;
			}
			print 'notok~~' . $chk[0]->performer_id . '~~' . strtolower(str_replace(' ', '_', $nm));
		}
	}
	public function checkVideoChatStatusPerformer() {
		$chk = $this->cm->get_specific('video_chat', array("performer_id" => $this->input->post('performer_id'), "url_hash" => $this->input->post('url_hash'), "user_id" => $this->input->post('user_id')));
		if ($chk[0]->status == '2') {
			print 'ok';
		}
	}
	public function hangupVideoChat() {
		$tmp = $this->input->post('elapsedTime');
		$time = floor(((int) $tmp) / 60) . ' min ' . (((int) $tmp) % 60) . ' sec';
		$this->cm->update('video_chat', array("id" => $this->input->post('chat_id')), array("elapsed_time" => $time, "status" => '2'));
		$usrnm = $this->db->query("select u.name, up.display_name from users u left join video_chat vc on vc.performer_id = u.id left join user_preference up on up.user_id = u.id where vc.performer_id = '" . $this->input->post('vcPerformerId') . "'")->result();
		if ($usrnm[0]->display_name != '') {
			$nm = $usrnm[0]->display_name;
		} else {
			$nm = $usrnm[0]->name;
		}
		print $this->input->post('vcPerformerId') . '~~' . strtolower(str_replace(' ', '_', $nm));
	}
	public function vcSendChat() {
		$insertData = array(
			"sender_id" => $this->input->post('sender_id'),
			"sender_type" => $this->input->post('sender_type'),
			"receiver_id" => $this->input->post('receiver_id'),
			"receiver_type" => $this->input->post('receiver_type'),
			"msg" => $this->input->post('chat_msg'),
			'live_id' => $this->input->post('last_chat'),
		);
		$chat_id = $this->cm->insert('chat', $insertData);
		$usrnm = $this->cm->get_specific('users', array("id" => $this->input->post('sender_id')));
		print $chat_id . '~~' . $usrnm[0]->usernm;
	}
	public function vcCheckNewText() {
		$last_chat = $this->db->where('performer_id', $this->session->userdata('UserId'))->order_by('id', 'desc')->get('performer_live')->row();
		/*$vcNewChat = $this->db->query("select c.id, c.sender_id, u.usernm sender_unm, c.receiver_id, up.usernm receiver_unm, c.msg, c.created_at from chat c left JOIN users u ON u.id = c.sender_id left JOIN users up ON up.id = c.receiver_id where ((c.sender_id = '" . $this->input->post('receiver_id') . "' AND c.receiver_id = '" . $this->input->post('sender_id') . "') OR (c.sender_id = '" . $this->input->post('sender_id') . "' AND c.receiver_id = '" . $this->input->post('receiver_id') . "')) AND c.id > '" . $this->input->post('last_id') . "' order by c.id ASC")->result();*/

		$this->db->select(' c.id, c.sender_id, u.usernm sender_unm, c.receiver_id,   c.msg, c.created_at')
			->from('chat c')
			->join('users u', 'u.id = c.sender_id');
		$l_id = $this->input->post('last_id');
		if ($l_id > 0) {
			$this->db->where('c.id>', $l_id);
		}

		$this->db->order_by('c.id', 'ASC');
		$vcNewChat = $this->db->get()->result();
		//print_r($vcNewChat);
		$last_chat_id = '';
		$return_data['status'] = FALSE;
		if (!empty($vcNewChat)) {
			//$this->data['vcNewChat'] = $vcNewChat;
			//$this->html = $this->load->view('frontend/pages/ajax_load', $this->data, TRUE);
			$tot = count($vcNewChat);
			//print_r($vcNewChat[$tot - 1]);
			$last_chat_id = $vcNewChat[$tot - 1]->id;
			$chatlist = '';
			$uid = $this->session->userdata('UserId');
			foreach ($vcNewChat as $Chat) {
				$chatlist .= '<li class="align-' . ($Chat->sender_id == $uid ? 'right' : 'left') . '">
							    <span>' . $Chat->msg . '</span>
							    <span>' . $Chat->sender_unm . '</span>
							</li>';
			}
			$return_data['status'] = TRUE;
			$return_data['chatlist'] = $chatlist;
			$return_data['last_chat_id'] = $last_chat_id;
		} else {
			$return_data['status'] = FALSE;
		}
		echo json_encode($return_data);
	}
	public function checkWebcamPerformer() {
		$this->cm->update('users', array("id" => $this->input->post('performer_id')), array("hasWebcam" => $this->input->post('hasCamera')));
	}

	///****** twilio token
	function access_token() {
		$TWILIO_ACCOUNT_SID = $this->config->item('TWILIO_ACCOUNT_SID');
		$TWILIO_API_KEY = $this->config->item('TWILIO_API_KEY');
		$TWILIO_API_SECRET = $this->config->item('TWILIO_API_SECRET');

		//          use Twilio\Jwt\AccessToken;
		//use Twilio\Jwt\Grants\VideoGrant;

// An identifier for your app - can be anything you'd like
		$appName = 'TwilioVideoDemo';

// choose a random username for the connecting user
		//$identity = randomUsername();

// return serialized token and the user's randomly generated ID
		if ($this->session->userdata('UserId')) {
			$userdetails = $this->getUserDetails($this->session->userdata('UserId'));
			//pr($userdetails[0]["display_name"]);
			$identity = $userdetails[0]["id"] . '~' . ($userdetails[0]["display_name"] == '' ? $userdetails[0]["name"] : $userdetails[0]["display_name"]);
		} else {
			$identity = rand() . '~' . 'Guest';
		}

// Create access token, which we will serialize and send to the client
		$token = new AccessToken(
			$TWILIO_ACCOUNT_SID,
			$TWILIO_API_KEY,
			$TWILIO_API_SECRET,
			3600,
			$identity
		);

// Grant access to Video
		$grant = new VideoGrant();
//$grant->setConfigurationProfileSid($TWILIO_CONFIGURATION_SID);
		$token->addGrant($grant);

		echo json_encode(array(
			'identity' => $identity,
			'token' => $token->toJWT(),
		));
	}

	function start_live_video() {
		$data['performer_id'] = $this->session->userdata('UserId');
		$data['start_at'] = date('Y-m-d H:i:s');
		$this->db->insert('performer_live', $data);
		$insert_id = $this->db->insert_id();
		$this->db->update('users', array('performer_live' => '1'), array('id' => $data['performer_id']));
		echo $insert_id;
	}

	function join_live_video() {
		$performer_id = $this->session->userdata('UserId');
		$details = $this->getUserDetails($performer_id);
		if ($details[0]['perform_type'] == 'private') {
			$this->db->update('users', array('performer_live' => '2'), array('id' => $performer_id));
		} else {
			$this->db->update('users', array('performer_live' => '3'), array('id' => $performer_id));
		}

		echo TRUE;
	}

	function stop_live_video($id = 0) {
		if ($id == 0) {
			$performer_id = $this->session->userdata('UserId');
			$result = $this->db->where('performer_id', $performer_id)->get('performer_live')->row();
			if ($result) {
				$data['end_at'] = date('Y-m-d H:i:s');
				$this->db->update('performer_live', $data, array('id' => $result->id));
			}
			$this->db->update('users', array('performer_live' => '0'), array('id' => $performer_id));
		} else {
			$data['end_at'] = date('Y-m-d H:i:s');
			$this->db->update('performer_live', $data, array('id' => $id));

			$sql = "UPDATE users, performer_live
SET performer_live.end_at = '" . date('Y-m-d H:i:s') . "',
    users.performer_live ='0'
WHERE
    users.id = performer_live.performer_id
    AND performer_live.id = '" . $id . "'";
			$this->db->query($sql);
		}

	}

	function is_accepted($request_id = '') {

		$row = $this->db->select('V.status,L.end_at')
			->where('V.id', $request_id)
			->from('video_chat V')
			->join('performer_live L', 'L.performer_id=V.performer_id and L.id=V.url_hash')
			->get()->row();

		//$row = $this->db->select('status')->where('id', $request_id)->from('video_chat')->get()->row();
		if ($row) {
			if ($row->end_at != '0000-00-00 00:00:00' && $row->end_at != '') {
				$this->db->update('video_chat', array('status' => 4), array('id' => $request_id));
			}

			$return_data['status'] = TRUE;
			$return_data['r_status'] = $row->status;
		} else {
			$return_data['status'] = FALSE;
		}
		echo json_encode($return_data);
	}

}
