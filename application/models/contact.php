<?php

class Contact extends Ci_Model{

	function __construct()
	{
		parent::__construct();
	//	$this->load->helper(array('form', 'url'));
		$this->load->model('mdata','mcats','mposts','madmins','',true);
		
	}


	function getInfoKontak($id){
    $data = array();
    $options = array('id' => $id);
    $Q = $this->db->get_where('kontak',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }

    $Q->free_result();    
    return $data;    
 } 

 function getKontak(){
     $data = array();
	 $Q = $this->db->get('kontak');
     $this->db->order_by('id','DESC');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
 }

	


	function editKontak(){
		
	$data = array( 
		'username' => $this->input->post('username'),
		'link' => $this->input->post('link')
	);

	 	$this->db->where('id', $this->input->post('id'));
	$this->db->update('kontak', $data);	
	
 }


	
}

?>