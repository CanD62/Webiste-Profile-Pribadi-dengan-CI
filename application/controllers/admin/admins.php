<?php

class Admins extends Ci_Controller {
  function __construct()
	{
		parent::__construct();
   // session_start();
    
	if ($_SESSION['userid'] < 1){
    	redirect('template/login','refresh');
    }
  }
  
  function index(){
    $data['aktif']='active';
	$data['judul'] = "Manage Users";
	$data['main'] = 'admin/user_home';
	$data['admins'] = $this->madmins->getAllUsers();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  

  
  function create(){
  	$this->load->library('encrypt');
   	if ($this->input->post('username')){
  		$this->madmins->addUser();
  		$this->session->set_flashdata('message','User created');
  		redirect('admin/admins/index','refresh');
  	}else{
      $data['aktif']='active';
		$data['judul'] = "Create User";
		$data['main'] = 'admin/user_create';
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	} 
  }
  
  function edit($id=0){
  	$this->load->library('encrypt');
  	if ($this->input->post('username')){
  		$this->madmins->updateUser();
  		$this->session->set_flashdata('message','User updated');
  		redirect('admin/admins/','refresh');
  	}else{
      $data['aktif']='active';
		//$id = $this->uri->segment(4);
		$data['judul'] = "Edit User";
		$data['main'] = 'admin/user_edit';
		$data['admin'] = $this->madmins->getUser($id);
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
  }
  
  function delete($id){
	$this->madmins->deleteUser($id);
	$this->session->set_flashdata('message','User deleted');
	redirect('admin/admins/','refresh');
  }
  
}


?>