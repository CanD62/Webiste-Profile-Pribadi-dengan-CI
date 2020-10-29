<?php

class Mposts extends Ci_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mdata','mposts','mcats','','',true);
	}


function getPost($id){
    $data = array();
    $this->db->where('id',$id);
    $this->db->limit(1);
    $Q = $this->db->get('posts');
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }

    $Q->free_result();    
    return $data;    
 }
	

 function getAllPosts(){
     $data = array();
	// $this->db->limit(10);
     $Q = $this->db->get('posts');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
 }

 function getAllPostsByCategory($catid){
     $data = array();
     $this->db->where("category_id",$catid);
     $this->db->where('status', 'published');
     $Q = $this->db->get('posts');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
 }
 
  function getLivePosts($limit){
     $data = array();
     $this->db->limit($limit);
     $this->db->where('status', 'published');
     $this->db->order_by('pubdate','asc');
     $Q = $this->db->get('posts');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
 }
 	function addPost(){
 	$now = date("Y-m-d H:i:s");
	$data = array( 
		'title' => $this->input->post('title'),
		'tags' => $this->input->post('tags'),
		'status' => $this->input->post('status'),
		'isi' => $this->input->post('isi'),
		'category_id' => $this->input->post('category_id'),
		'pubdate' => $now
	
	);

	$this->db->insert('posts', $data);	 
 }
 function updatePost(){
	$data = array( 
		'title' => $this->input->post('title'),
		'tags' => $this->input->post('tags'),
		'status' => $this->input->post('status'),
		'isi' => $this->input->post('isi'),
		'category_id' => $this->input->post('category_id'),
		'user_id' => $_SESSION['userid']

	);

 	$this->db->where('id', $this->input->post('id'));
	$this->db->update('posts', $data);	
 
 }
 function deletePost($id){
 	$this->db->where('id', $id);
	$this->db->delete('posts');	
 }
}

?>