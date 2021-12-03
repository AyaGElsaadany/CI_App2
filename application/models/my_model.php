<?php

class My_model extends CI_Model{
	function get_all_data(){
		return $this->db->get('ayagamal');
	}

	function insert($user){
		$this->db->insert('ayagamal', $user);
	}

	function get_user_by_id($id){
		$this->db->where('id', $id);
		$this->db->limit(1);
		return $this->db->get('ayagamal');
	}

	function update($id, $user){
		$this->db->where('id', $id);
		$this->db->update('ayagamal', $user);
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('ayagamal');
	}
}

?>
