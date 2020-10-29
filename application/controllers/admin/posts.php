<?php

class Posts extends Ci_Controller {
  function __construct()
	{
	parent::__construct();
	$this->load->model('mdata','mposts','mcats','madmins',true);

	if ($_SESSION['userid'] < 1){
    	redirect('page/login','refresh');
    }
    
    } 

    function index(){
		$data['judul'] = "Manage Posts";
		$data['aktif']='active';
		$data['main'] = 'admin/posts_home';
		$data['posts'] = $this->mposts->getAllPosts();
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');  
	}
  
    function create(){
   	if ($this->input->post('title')){
  		$this->mposts->addPost();
  		$this->session->set_flashdata('message','Post created');
  		redirect('admin/posts/','refresh');
  	}else{
  		$data['aktif']='active';
		$data['judul'] = "Create Post";
		$data['main'] = 'admin/posts_create';
		$data['cats'] = $this->mcats->getCategoriesDropDown();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	} 
    }
  
    function edit($id=0){
  	if ($this->input->post('title')){
  		$this->mposts->updatePost();
  		$this->session->set_flashdata('message','Post updated');
  		redirect('admin/posts/','refresh');
  	}else{
  		$data['aktif']='active';
		$data['judul'] = "Edit Post";
		$data['main'] = 'admin/posts_edit';
		$data['post'] = $this->mposts->getPost($id);
		$data['cats']  = $this->mcats->getCategoriesDropDown();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}
    }
  
	function delete($id){
		$this->mposts->deletePost($id);
		$this->session->set_flashdata('message','Post deleted');
		redirect('admin/posts/','refresh');
	}
	
}
?>