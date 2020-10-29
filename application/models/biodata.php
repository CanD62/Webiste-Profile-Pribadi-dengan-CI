<?php

class Biodata extends Ci_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mdata','mcats','mposts','madmins','',true);
		$this->load->model('galery');
	}


function getSekolah($id){
    $data = array();
    $options = array('bio_id' => $id);
    $Q = $this->db->get_where('sekolah',$options);
     $this->db->order_by('id','ASC');
    if ($Q->num_rows() > 0){
     foreach ($Q->result_array() as $row){
        $data[] = $row;
      }
    }

    $Q->free_result();    
    return $data;    
 }
	
 function getBiodata(){
     $data = array();
	 $Q = $this->db->get('biodata');
     $this->db->order_by('id','DESC');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
 }

	function getBio($id){
    $data = array();
    $options = array('id' => $id);
    $Q = $this->db->get_where('biodata',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
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
 
 function updateBiodata(){
 	if (!empty($_FILES["foto"]["name"])) {
         $p=  $this->galery->_uploadImage();
        } else {
         $p=  $this->input->post('old_foto');
		}
	$data = array( 
		'nama_lengkap' => $this->input->post('nama_lengkap'),
		'alamat' => $this->input->post('alamat'),
		'skill' => $this->input->post('skill'),
		'photo' => $p,
		'quotes' => $this->input->post('quotes')
	);

 	$this->db->where('id', $this->input->post('id'));
	$this->db->update('biodata', $data);	
 
 }
 
 // function deleteCategory($id){
 // 	$data = array('status' => 'inactive');
 // 	$this->db->where('id', $id);
	// $this->db->update('categories', $data);	
 // }
	
}

?>