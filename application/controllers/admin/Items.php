<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
class Items extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('user_logged_in')) {
			redirect(base_url() . 'admin');
		}
		$this->load->model('item_model');
	}
	function index($page = 1, $sort_field = 'U.first_name', $order = 'asc') {
		if ($this->session->has_userdata('searchData')) {
			$this->session->unset_userdata('searchData');
		}

		$base_url = base_url('admin/item/');
		$this->load->view('admin/item/manage_item');
	}
	public function get_items() {
		$fetch_data = $this->item_model->make_datatables();
		$data = array();
		foreach ($fetch_data as $row) {
			$sub_array = array();
			$sub_array[] = $row->name;
			$sub_array[] = ($row->image != '' ? '<img src="' . uploads_url('buy_tem/' . $row->image) . '"  height="30" width="30">' : '');
			$sub_array[] = ($row->status == 1 ? 'Active' : 'Inactive');
			$sub_array[] = '
<span class="action-group">
		<a href="' . base_url() . 'admin/items/edit/' . $row->id . '" title="Edit"><i class="fa fa-pencil"></i></a>
		<a href="javascript:del(' . $row->id . ',\'admin/items/delete/' . $row->id . '\',\'item\')"  class="del" data-item-id="' . $row->id . '" title="Delete"><i class="fa fa-trash"></i></a>
</span>
';
			$data[] = $sub_array;
		}
		$output = array(
			"draw" => intval($_POST["draw"]),
			"recordsTotal" => $this->item_model->get_all_data(),
			"recordsFiltered" => $this->item_model->get_filtered_data(),
			"data" => $data,
		);
		echo json_encode($output);
	}

	public function add() {

		$data['page_title'] = 'Add item';
		$this->load->view('admin/item/add_item', $data);
	}
	public function edit($id = '') {

		$data['page_title'] = 'Edit item';
		if ($id != '') {
			$data['item_info'] = $this->item_model->get_item_details($id);
			$this->load->view('admin/item/add_item', $data);
		} else {
			redirect('admin/items/');
		}
	}

	function insert_update_item() {

		$item_id = trim($this->input->post('item_id', TRUE));
		$data['name'] = trim($this->input->post('name', TRUE));
		$data['status'] = trim($this->input->post('is_active', TRUE));
		$old_img = $this->input->post('saved_item_image');

		$this->form_validation->set_rules('name', 'item name', "trim|required|xss_clean|callback_edit_unique[buy_items.name." . $item_id . "]");

		//$this->form_validation->set_rules('price', 'item price', 'trim|required|xss_clean|numeric');

		$return_data = array();
		if ($this->form_validation->run() == FALSE) {
			$return_data['error_message'] = message(validation_errors('<span>', '</span>'), 2);
			$return_data['success'] = 0;
		} else {
			if (isset($_FILES['item_image']['name']) && $_FILES['item_image']['name'] != NULL) {
				if (!is_dir('./uploads/buy_tem')) {
					mkdir('./uploads/buy_tem', 0777, true);
				}
				$config['upload_path'] = './uploads/buy_tem';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = time() . "-" . $_FILES['item_image']['name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('item_image')) {
					$upload = $this->upload->data();
					$data['image'] = $upload['file_name'];
					if ($old_img != '') {
						if (file_exists('./uploads/buy_tem/' . $old_img)) {
							unlink('./uploads/buy_tem/' . $old_img);
						}
					}
				} else {
					$return_data['error_message'] = message($this->upload->display_errors('<span>', '</span>'), 2);
					$return_data['success'] = 0;
					echo json_encode($return_data);
					exit();
				}
			}

			if ($item_id > 0) {
				$return = $this->item_model->update_item($item_id, $data);
				if ($return) {
					$this->session->set_flashdata('success_msg', message('Item details successfully updated.', 1));
					$return_data['success'] = 1;
					$return_data['action'] = "update";
				} else {
					$return_data['error_message'] = message('Something went wrong while saving the data. Please try again.', 2);
					$return_data['success'] = 0;
				}
			} else {

				$insert_id = $this->item_model->add_item($data);
				if ($insert_id > 0) {
					$return_data['success_message'] = message("Item successfully added.", 1);
					$return_data['action'] = "add";
					$return_data['success'] = 1;
				} else {
					$return_data['error_message'] = message(ADD_UPDATE_ERROR_MESSAGE, 2);
					$return_data['success'] = 0;
				}
			}
		}
		echo json_encode($return_data);
	}
	function edit_unique($value, $params) {
		$this->form_validation->set_message('edit_unique', 'Your provided %s is already taken.');
		list($table, $field, $id) = explode(".", $params, 3);
		if ($id == 'add') {
			$query = $this->db->select($field)->from($table)->where($field, $value)->limit(1)->get();
		} else {
			$query = $this->db->select($field)->from($table)->where($field, $value)->where('id !=', $id)->limit(1)->get();
		}
		if ($query->row()) {
			return false;
		} else {
			$value = str_replace(" ", '', $value);
			if ($id == 'add') {
				$query = $this->db->query("SELECT {$field} FROM {$table} WHERE REPLACE({$field}, ' ', '') = '{$this->db->escape_str($value)}'");
			} else {
				$query = $this->db->query("SELECT {$field} FROM {$table} WHERE id!={$id} and REPLACE({$field}, ' ', '') = '{$this->db->escape_str($value)}'");
			}
			if ($query->row()) {
				return false;
			} else {
				return true;
			}
		}
	}

	public function delete($id) {

		$result = $this->item_model->delete_item($id);
		$return_data = array();
		if ($result) {
			$return_data['success_message'] = message("Your selected item deleted", 1);
			$return_data['success'] = 1;
		} else {
			$return_data['error_message'] = message("Something went wrong", 2);
			$return_data['success'] = 0;
		}

		echo json_encode($return_data);
		exit();
		//	redirect(header_redirect('user/manage/'));
	}

}
?>