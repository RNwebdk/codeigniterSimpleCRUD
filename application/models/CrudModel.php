<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function createData(){

		$data = [
			'lastName' => $this->input->post('lastName'),
			'firstName' => $this->input->post('firstName'),
			'birthdate' => $this->input->post('birthdate'),
			'contactNo' => $this->input->post('contactNo'),
			'bio' => $this->input->post('bio')
		];

		$this->db->insert('table_name', $data);
	}

	public function getAllData(){
		$query = $this->db->query('SELECT * FROM table_name');
		return $query->result();
	}

	public function getData($id){
		$query = $this->db->query('SELECT * FROM table_name WHERE `id` = ' . $id);
		return $query->row();
	}

	public function updateData($id){
		$data = [
			'lastName' => $this->input->post('lastName'),
			'firstName' => $this->input->post('firstName'),
			'birthdate' => $this->input->post('birthdate'),
			'contactNo' => $this->input->post('contactNo'),
			'bio' => $this->input->post('bio')
		];

		$this->db->where('id', $id);
		$this->db->update('table_name', $data);
	}

	public function deleteData($id){
		$this->db->where('id', $id);
		$this->db->delete('table_name');
	}

}
