<?php
class mdata extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	
	function getLivePosts($limit){
     $data = array();
     $this->db->limit($limit);
     $this->db->where('status', 'published');
     $this->db->order_by('pubdate','desc');
     $Q = $this->db->get('posts');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
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
	
	function getTopCategories(){
     //$data[0] = 'root';
     $this->db->where('parentid',0);
     $Q = $this->db->get('categories');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[$row['id']] = $row['name'];
       }
    }
    $Q->free_result();  
    return $data; 
 }	

	function tampilberita()
	{
		$data = array();
		$this->db->select("*");
		$this->db->from("berita");
		$this->db->order_by("no","desc");
		$this->db->limit("3");	
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0)
		{
			$data = $hasil->result();
		}	
		$hasil->free_result();
		return $data;
		
	}	
	
	function viewdata()
	{
		$data = array();
		$this->db->select("*");
		$this->db->from("about");
		$this->db->order_by("no");
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0)
		{
			$data = $hasil->result();
		}	
		$hasil->free_result();
		return $data;
	} 
	

	
}	