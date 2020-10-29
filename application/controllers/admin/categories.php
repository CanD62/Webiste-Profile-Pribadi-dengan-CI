<?php

class Categories extends Ci_Controller {
	function __construct()
	{
		parent::__construct();		 

		if ($_SESSION['userid'] < 1){
			redirect('template/login','refresh');
		}
	}
  

	function index(){
		$data['aktif']='active';
		$data['judul'] = "Manage Categories";
		$data['main'] = 'admin/cat_home';
		$data['categories'] = $this->mcats->getAllCategories();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');  
	}
	  

  
	function create(){
		if ($this->input->post('name')){
			$this->mcats->addCategory();
			$this->session->set_flashdata('message','Category created');
			redirect('admin/categories/','refresh');
		}else{
			$data['aktif']='active';
			$data['judul'] = "Create Category";
			$data['main'] = 'admin/cat_create';
			$data['categories'] = $this->mcats->getTopCategories();
			$this->load->vars($data);
			$this->load->view('admin/dashboard');    
		} 
	}
  
	function edit($id=0){
		if ($this->input->post('name')){
			$this->mcats->updateCategory();
			$this->session->set_flashdata('message','Category updated');
			redirect('admin/categories/','refresh');
		}else{
			$data['aktif']='active';
			//$id = $this->uri->segment(4);
			$data['judul'] = "Edit Category";
			$data['main'] = 'admin/cat_edit';
			$data['category'] = $this->mcats->getCategory($id);
			$data['categories'] = $this->mcats->getTopCategories();
			$this->load->vars($data);
			$this->load->view('admin/dashboard');    
		}
	}
  
	function delete($id){
		//$id = $this->uri->segment(4);
		$this->mcats->deleteCategory($id);
		$this->session->set_flashdata('message','Category deleted');
		redirect('admin/categories/','refresh');
	}
}
?>