<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

use Hashids\Hashids;

$CI = &get_instance();
$CI->load->database();
$const_result = $CI->db->get('site_settings')->row();
foreach ($const_result as $key => $result) {
	if ($key != 'id' && $key != 'created_at' && $key != 'updated_at') {
		define(strtoupper($key), $result);
	}
}

if (!function_exists('write_log')) {
	/**
	 * Log system message
	 *
	 * @param array|object|string $msg
	 * @return void
	 */
	function write_log($msg) {
		$log_path = APPPATH . '/logs/log-' . date('Y-m-d') . '.php';
		$timestamp = date('[Y-m-d H:i:s]: ');

		if (is_array($msg) || is_object($msg)) {
			error_log($timestamp . print_r($msg, true) . PHP_EOL, 3, $log_path);
		} else {
			error_log($timestamp . $msg . PHP_EOL, 3, $log_path);
		}
	}
}

if (!function_exists('uploads_url')) {
	function uploads_url($path = null) {
		return base_url('uploads/' . $path);
	}
}

if (!function_exists('json_success')) {
	function json_success($data) {
		echo json_encode([
			'success' => true,
			'data' => $data,
		], JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);
		exit;
	}
}

if (!function_exists('json_error')) {
	function json_error($data) {
		echo json_encode([
			'success' => false,
			'data' => $data,
		], JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);
		exit;
	}
}

if (!function_exists('get_credit_plans')) {
	function get_credit_plans() {
		global $CI;
		$CI->load->database();
		$credit_plans = $CI->db->where('status', 1)->from('credit_plans')->get()->result_array();

		return $credit_plans;
	}
}

if (!function_exists('encrypt_id')) {
	function encrypt_id($id) {
		$hashids = new Hashids('', 16);

		return $hashids->encode($id);
	}
}

if (!function_exists('decrypt_id')) {
	function decrypt_id($hashed_id) {
		$hashids = new Hashids('', 16);
		$decoded_data = $hashids->decode($hashed_id);

		return isset($decoded_data[0]) ? $decoded_data[0] : null;
	}
}

if (!function_exists('currency_format')) {
	function currency_format($amount, $locale = 'en_GB') {
		$fmt = new NumberFormatter($locale, NumberFormatter::CURRENCY);
		return $fmt->format($amount);
	}
}

if (!function_exists('get_login_user')) {
	function get_login_user() {
		global $CI;
		$userDetails = $CI->getUserDetails($CI->session->userdata('UserId'));

		return isset($userDetails[0]) ? $userDetails[0] : [];
	}
}

if (!function_exists('db_val')) {
	function db_val($value) {
		return $value ? $value : '&mdash;';
	}
}

function SendEmailTo($to, $subject, $message, $from = "", $bcc = "", $path = "") {
// $host=$_SERVER['HTTP_HOST'];
	// if($host=='localhost' || $host=='ujjal'){
	//  customSmtpMailSend($to,$subject,$message,$bcc,$path);
	// }else if($host=='ujjal.net'){
	//  customMailSend($to,$subject,$message,$from,$bcc);
	//  //echo "test";
	// }else{
	//  customSmtpMailSend($to,$subject,$message,$bcc,$path);
	// }
	customMailSend($to, $subject, $message, $from, $bcc);
}

function customMailSend($to, $subject, $message, $from, $bcc) {
	if ($from == '') {
		$from = SITE_SENDER_EMAIL;
	}
	$headers = "From: " . SITE_NAME . " <" . strip_tags(SITE_SENDER_EMAIL) . "> \r\n";
	$headers .= "Reply-To: " . strip_tags($from) . "\r\n";
	$headers .= "Bcc: " . strip_tags($bcc) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	@mail($to, $subject, setEmailTemplate($message), $headers);
}

function customSmtpMailSend($to, $subject, $message, $bcc = "", $path = "") {

	$config['charset'] = 'utf-8';
	$config['newline'] = "\r\n";
	$config['mailtype'] = 'html'; // or html
	$config['validation'] = TRUE; // bool whether to validate email or not

	$CI = &get_instance();
	$CI->load->library('email');
	$CI->email->initialize($config);
	$CI->email->from(SITE_SENDER_EMAIL, SITE_NAME);
	$CI->email->to($to);
	if (isset($bcc) && $bcc != "") {
		$CI->email->bcc($bcc);
	}
	$CI->email->subject($subject);
	$CI->email->message(setEmailTemplate($message));
	if (isset($path) && $path != "") {
		$CI->email->attach($path);
	}
	$CI->email->send();
}

function pr($var) {
	echo "<pre>";
	print_r($var);
	echo "</pre>";
}

function fixed_pages() {
	return array(1, 2, 3, 4, 5, 6, 7, 8);
}

function setEmailTemplate($msg) {
	$logo = base_url("assets/images/logo.png");
	$footer_bg_color = '#0d2a47';
	$message_header = '<html>
<head>
<title>Sterile</title>
<style type="text/css">
.tmpltBdy{margin:0; padding:0; background:#ffffff; font-size:13px; font-family:Arial, Helvetica, sans-serif; font-weight:normal; color:#656363; line-height:18px;}
a{text-decoration:none; color:#faae2c;}
a:hover{text-decoration:none; color:#2f6f82;}
img{border:0; margin:0;}
p{margin:0;}
ul{margin:10px 0; padding:0;}
</style>
</head>
<body class="tmpltBdy" style="margin:0; padding:0; background:#ffffff; font-size:13px; font-family:Arial, Helvetica, sans-serif; font-weight:normal; color:#656363; line-height:18px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td style="padding:10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-bottom:5px; border-bottom:1px solid #e5e5e5;">
<tr>
<td width="65%" valign="top" align="left"><img src="' . $logo . '" width="250" alt="' . SITE_NAME . '"></td>
<td width="35%" valign="top" align="right" style="position:relative;">
<p style="font-size:12px; color:#6b6b6b; text-align:right;">' . SITE_ADDRESS . '</p>
<h2 style="margin:8px 0; font-size:16px; color:#6b6b6b; text-align:right;"><img src="' . base_url("assets/images/phone.png") . '" alt="Phone"> ' . SITE_PHONE_1 . '</h2>
<p text-align:right;><a style="font-size:12px; color:#6b6b6b; font-style:italic; float:right;" href="mailto:' . SITE_RECEIVER_EMAIL . '"><img src="' . base_url("assets/images/email.png") . '" alt="Email"> ' . SITE_RECEIVER_EMAIL . '</a></p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td style="padding:10px 10px 20px;" class="emailers_table_view">';

	$message_footer = '</td>
</tr>

<tr>
<td style="padding:16px 20px; color:#ffffff; background:' . $footer_bg_color . ';" align="center">Copyright &copy; ' . date('Y') . ' ' . SITE_NAME . ', All Rights Reserved.</td>
</tr>
</table>
</body>
</html>';

	return $message = $message_header . $msg . $message_footer;
}

function get_user_info($field, $value) {
	$ci = &get_instance();
	$ci->db->select('*');
	$ci->db->where($field, $value);
	$query = $ci->db->get('users');
	$result = $query->row();
	return $result;
}

function get_billdetails() {
	$ci = &get_instance();
	$userid = $ci->session->userdata('UserId');
	$ci->db->select('*');
	$ci->db->where('id', $userid);
	$query = $ci->db->get('users');
	$result = $query->row();
	return $result;
}
function get_plan_info($plan_id) {
	$ci = &get_instance();
	$ci->db->select('*');
	$ci->db->where('id', $plan_id);
	$query = $ci->db->get('credit_plans');
	$result = $query->row();
	return $result;
}