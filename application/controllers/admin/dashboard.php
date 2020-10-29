<?php

class Dashboard extends Ci_Controller {
  function __construct()
	{
	parent::__construct();
      
	if ($_SESSION['userid'] < 1){
    	redirect('page/login','refresh');
		
    } 
  }
  
 
  function index(){	
	$data['judul'] = "Dashboard";
	$data['main'] = 'admin/home';
	$data['aktif']='active';
	$data['count_users'] = $this->madmins->getCountUsers();
	$data['count_galery'] = $this->madmins->getCountGaleri();
	$data['count_biodata'] = $this->madmins->getCountBiodata();
	$data['count_berita'] = $this->madmins->getCountBerita();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');
  }
  function users(){
	$data['judul'] = "Manage Users";
	$data['main'] = 'admin/user_home';
	$data['aktif']='active';
	$data['admins'] = $this->madmins->getAllUsers();
	$this->load->vars($data);
	$this->load->view('admin/dashboard');  
  }
  

  
  function create(){
  	$this->load->library('encrypt');
   	if ($this->input->post('username')){
  		$this->madmins->addUser();
  		$this->session->set_flashdata('message','User created');
  		redirect('admin/dashboard/users','refresh');
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
  		redirect('admin/dashboard/users','refresh');
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
	redirect('admin/dashboard/users','refresh');
  }

 
 function logout(){
	unset($_SESSION['userid']);
	$this->session->set_flashdata('error',"You've been logged out!");
	redirect('page/login','refresh'); 	
 }
 
}
?>