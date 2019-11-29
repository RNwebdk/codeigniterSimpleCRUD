<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CrudModel');
	}

	public function index(){
		$data['result'] = $this->CrudModel->getAllData();
		$this->load->view('crudView', $data);
	}

	public function create(){
		$this->CrudModel->createData();
		redirect("CrudController");
	}

	public function edit($id){
		$data['row'] = $this->CrudModel->getData($id);
		$this->load->view('crudEdit',$data);
	}

	public function update($id){
		$this->CrudModel->updateData($id);
		redirect("CrudController");
	}

	public function delete($id){
		$this->CrudModel->deleteData($id);
		redirect("CrudController");
	}
}
