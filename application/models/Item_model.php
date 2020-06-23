<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 * item model
 */
class Item_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function add_item($data) {
		$this->db->trans_start();
		$this->db->insert('buy_items', $data);
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			return 0;
		} else {

			return $insert_id;
		}
	}

	public function update_item($id, $user) {
		$this->db->trans_start();
		$this->db->update('buy_items', $user, array('id' => $id));
		$this->db->trans_complete();
		if ($this->db->affected_rows() >= 0) {
			return true;
		} else {
			return false;
		}
	}

	function get_item_details($id) {

		$this->db->select('*');
		$this->db->from('buy_items');
		$this->db->where('id', $id);
		$query = $this->db->get();
		///echo $this->db->last_query();
		return $query->row();

	}

	public function delete_item($id) {
		if ($id != '') {
			if ($this->db->delete('buy_items', array('id' => $id))) {

				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	public function check_item_exists($item_id) {
		$user_exists = $this->db->where('item_id', $item_id)->count_all_results('billing_trans');
		if ($user_exists > 0) {
			return FALSE;
		} else {
			return true;
		}
	}
	function make_query() {
		$select_column = array("id", "image", "name", "status");
		$order_column = array("name", "image", "status");
		$sSearch = $this->input->get_post('search[value]', true);
		$this->db->select($select_column);
		$this->db->from('buy_items');
		/*     if(isset($_POST["search"]["value"]))
			{
			$this->db->like("first_name", $_POST["search"]["value"]);
			$this->db->or_like("last_name", $_POST["search"]["value"]);
		*/
		if (isset($sSearch) && !empty($sSearch)) {
			for ($i = 0; $i < count($select_column); $i++) {
				$bSearchable = $this->input->get_post('columns[' . $i . '][searchable]', true);
				// Individual column filtering
				if (isset($bSearchable) && $bSearchable == 'true') {
					$this->db->or_like($select_column[$i], $this->db->escape_like_str($sSearch), 'both');
				}
			}
		}
		if (isset($_POST["order"])) {
			$this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			//$this->db->order_by($aColumns[intval($this->db->escape_str($iSortCol))], $this->db->escape_str($sSortDir));
		} else {
			$this->db->order_by('name', 'ASC');
		}

	}
	function make_datatables() {
		$this->make_query();
		if ($_POST["length"] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
	}
	function get_filtered_data() {
		$this->make_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
	function get_all_data() {
		$this->db->select("*");
		$this->db->from('buy_items');
		return $this->db->count_all_results();
	}

}