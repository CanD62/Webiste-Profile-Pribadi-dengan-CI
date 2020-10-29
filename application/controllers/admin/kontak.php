<?php

class Kontak extends Ci_Controller {
  function __construct()
	{
	parent::__construct();
	$this->load->model('mdata','mposts','mcats','madmins',true);
	$this->load->model('contact');
	if ($_SESSION['userid'] < 1){
    	redirect('page/login','refresh');
    }
    
    } 

    function index(){
		$data['judul'] = "Manage Kontak";
		$data['aktif']='active';
		$data['main'] = 'admin/kontak';
		$data['kontak'] = $this->contact->getKontak();
		//$data['posts'] = $this->mposts->getAllPosts();
		//$data['cats'] = $this->mcats->getTopCategories();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');  
	}
  
 
  
    function edit($id=0){
  	if ($this->input->post('username')){
  		$this->contact->editKontak();
  		$this->session->set_flashdata('message','Kontak berhasil diupdate');
  		redirect('admin/kontak/','refresh');
  	}else{
  		$data['aktif']='active';
		$data['judul'] = "Edit Kontak";
		$data['main'] = 'admin/kontak_edit';
		$data['kontak'] = $this->contact->getInfoKontak($id);
		
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
    }
  

	
}
?>