<?php

class Mcomments extends Ci_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mdata','mcats','mposts','mcomments','',true);
	}


 function getComments($postid){
     $data = array();
     $this->db->where('post_id',$postid);
     $Q = $this->db->get('comments');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
 }


 function addComment(){
 	$now = date("Y-m-d H:i:s");
	$data = array( 
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'isi' => strip_tags(substr($this->input->post('isi'),0,255)),
		'post_id' => $this->input->post('post_id'),
		'pubdate' => $now	
	);

	$this->db->insert('comments', $data);	 
 }
 
	
}

?>