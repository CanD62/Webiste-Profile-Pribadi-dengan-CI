<?php 

class Madmins extends Ci_Model{

	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->database();
		$this->load->model('mdata','mposts','mcats','madmins','',true);
		//$this->load->library('form_validation');
	}	


	function verifyUser($u,$pw){
		$this->db->select('id,username');
		$this->db->where('username',$u);
		$this->db->where('password', md5($pw));
		$this->db->where('status', 'active');
		$this->db->limit(1);
		$Q = $this->db->get('users');
		$this->session->set_userdata('lastquery', $this->db->last_query());
		if ($Q->num_rows() > 0){
			$row = $Q->row_array();
			return $row;
		}else{
			$this->session->set_flashdata('error', 'Sorry, try again!');	
			return array();
		}		
	}

	function getUser($id){
      $data = array();
      $options = array('id' => $id);
      $Q = $this->db->get_where('users',$options,1);
      if ($Q->num_rows() > 0){
        $data = $Q->row_array();
      }

      $Q->free_result();    
      return $data;  		

	}
	
	function getAllUsers(){
     $data = array();
     $Q = $this->db->get('users');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
     }
     $Q->free_result();    
     return $data; 	
	}
	
	
	function getCountUsers()
	{
		
		
		$this->db->from("users");
		$hasil = $this->db->get();
		$data = $hasil->num_rows;
		$hasil->free_result();
		return $data;
		
	}

	function getCountGaleri()
	{
		
		$this->db->from("galeri");
		$hasil = $this->db->get();
		$data = $hasil->num_rows;
		$hasil->free_result();
		return $data;
		
	}

	function getCountBiodata()
	{
		
		$this->db->from("biodata");
		$hasil = $this->db->get();
		$data = $hasil->num_rows;
		$hasil->free_result();
		return $data;
		
	}

	function getCountBerita()
	{
		
		$this->db->from("posts");
		$hasil = $this->db->get();
		$data = $hasil->num_rows;
		$hasil->free_result();
		return $data;
		
	}

	function addUser(){
      $data = array('username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'status' => $this->input->post('status'),
                    'password' => md5($this->input->post('password'))
                    );
	
	  $this->db->insert('users',$data);
	
	}
	
	function updateUser(){
      $data = array('username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'status' => $this->input->post('status'),
                    'password' => md5($this->input->post('password'))
                    );
	  $this->db->where('id',$this->input->post('id'));
	  $this->db->update('users',$data);	
	
	}
	
	
	function deleteUser($id){
 	 
 	 $this->db->where('id', $id);
	
	$this->db->delete('users');	
	}
	
	

	
}


?>