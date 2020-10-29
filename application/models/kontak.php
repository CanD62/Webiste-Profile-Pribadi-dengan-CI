<?php

class Kontak extends Ci_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mdata','mcats','mposts','madmins','',true);
		
	}



	
 function getKontak(){
     $data = array();
	 $Q = $this->db->get('kontak');
     $this->db->order_by('id','ASC');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
 }


 // function getAllCategories(){
 //     $data = array();
	//  $Q = $this->db->get('categories');
 //     $this->db->order_by('name','ASC');
 //     if ($Q->num_rows() > 0){
 //       foreach ($Q->result_array() as $row){
 //         $data[] = $row;
 //       }
 //    }
 //    $Q->free_result();  
 //    return $data; 
 // }
 //  function getTopCategories(){
 //     $this->db->where('parentid',0);
	//  $this->db->where('status', 'active');
 //     $Q = $this->db->get('categories');
 //     if ($Q->num_rows() > 0){
 //       foreach ($Q->result_array() as $row){
 //         $data[$row['id']] = $row['name'];
 //       }
 //    }
 //    $Q->free_result();  
 //    return $data; 
 // }
 // function getCategoriesDropDown(){
 //     $data = array();
 //     $this->db->select('id,name');
 //     $Q = $this->db->get('categories');
 //     if ($Q->num_rows() > 0){
 //       foreach ($Q->result_array() as $row){
 //         $data[$row['id']] = $row['name'];
 //       }
 //    }
 //    $Q->free_result();  
 //    return $data; 
 // }
	// function addCategory(){
	// $data = array( 
	// 	'name' => str_replace(" ", "_",$this->input->post('name')),
	// 	'shortdesc' => $this->input->post('shortdesc'),
	// 	'longdesc' => $this->input->post('longdesc'),
	// 	'status' => $this->input->post('status'),
	// 	'sortorder' => $this->input->post('sortorder')	
	// );

	// $this->db->insert('categories', $data);	 
 // }
 
 // function updateBiodata(){
	// $data = array( 
	// 	'name' => str_replace(" ", "_",$this->input->post('name')),
	// 	'shortdesc' => $this->input->post('shortdesc'),
	// 	'longdesc' => $this->input->post('longdesc'),
	// 	'status' => $this->input->post('status'),
	// 	'sortorder' => $this->input->post('sortorder')
	// );

 // 	$this->db->where('id', $this->input->post('id'));
	// $this->db->update('categories', $data);	
 
 // }
 
 // function deleteCategory($id){
 // 	$data = array('status' => 'inactive');
 // 	$this->db->where('id', $id);
	// $this->db->update('categories', $data);	
 // }
	
}

?>