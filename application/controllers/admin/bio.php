<?php

class Bio extends Ci_Controller {
  function __construct()
	{
	parent::__construct();
	$this->load->model('mdata','mposts','mcats','madmins',true);
	$this->load->model('biodata');
	
	if ($_SESSION['userid'] < 1){
    	redirect('page/login','refresh');
    }
    
    } 

    function index(){
		$data['judul'] = "Manage Biodata";
		$data['aktif']='active';
		$data['main'] = 'admin/bio_home';
		$data['biodata'] = $this->biodata->getBiodata();
		//$data['posts'] = $this->mposts->getAllPosts();
		//$data['cats'] = $this->mcats->getTopCategories();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');  
	}
  
 //    function create(){
 //   	if ($this->input->post('keterangan')){
 //  		$this->biodata->addGaleri();
 //  		$this->session->set_flashdata('message','Foto berhasil diupload');
 //  		redirect('admin/bio_home/','refresh');
 //  	}else{
 //  		$data['aktif']='active';
	// 	$data['judul'] = "Upload Foto";
	// 	$data['main'] = 'admin/bio_home_create';
	// 	//$data['cats'] = $this->mcats->getCategoriesDropDown();
	// 	$this->load->vars($data);
	// 	$this->load->view('admin/dashboard');    
	// } 
 //    }
  
    function edit($id=0){
  	if ($this->input->post('quotes')){
  		$this->biodata->updateBiodata();
  		$this->session->set_flashdata('message','Biodata berhasil diupdate');
  		redirect('admin/bio','refresh');
  	}else{
  		$data['aktif']='active';
		$data['judul'] = "Edit Biodata";
		$data['main'] = 'admin/bio_edit';
		$data['biodata'] = $this->biodata->getBio($id);
		
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
    }
  
	// function delete($id){
	// 	$this->biodata->deleteGaleri($id);
	// 	$this->session->set_flashdata('message','Foto berhasil dihapus');
	// 	redirect('admin/bio_home','refresh');
	// }
	
}
?>