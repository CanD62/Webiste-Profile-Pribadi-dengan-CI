<?php

class Galeri extends Ci_Controller {
  function __construct()
	{
	parent::__construct();
	$this->load->model('mdata','mposts','mcats','madmins',true);
	$this->load->model('galery');
	if ($_SESSION['userid'] < 1){
    	redirect('page/login','refresh');
    }
    
    } 

    function index(){
		$data['judul'] = "Manage Galeri";
		$data['aktif']='active';
		$data['main'] = 'admin/galeri';
		$data['galeri'] = $this->galery->getGaleri();
		//$data['posts'] = $this->mposts->getAllPosts();
		//$data['cats'] = $this->mcats->getTopCategories();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');  
	}
  
    function create(){
   	if ($this->input->post('keterangan')){
  		$this->galery->addGaleri();
  		$this->session->set_flashdata('message','Foto berhasil diupload');
  		redirect('admin/galeri/','refresh');
  	}else{
  		$data['aktif']='active';
		$data['judul'] = "Upload Foto";
		$data['main'] = 'admin/galeri_create';
		//$data['cats'] = $this->mcats->getCategoriesDropDown();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	} 
    }
  
    function edit($id=0){
  	if ($this->input->post('keterangan')){
  		$this->galery->editGaleri();
  		$this->session->set_flashdata('message','Foto berhasil diupdate');
  		redirect('admin/galeri/','refresh');
  	}else{
  		$data['aktif']='active';
		$data['judul'] = "Edit Foto";
		$data['main'] = 'admin/galeri_edit';
		$data['foto'] = $this->galery->getFoto($id);
		
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
    }
  
	function delete($id){
		$this->galery->deleteGaleri($id);
		$this->session->set_flashdata('message','Foto berhasil dihapus');
		redirect('admin/galeri','refresh');
	}
	
}
?>