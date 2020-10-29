<?php

class Galery extends Ci_Model{

	function __construct()
	{
		parent::__construct();
	//	$this->load->helper(array('form', 'url'));
		$this->load->model('mdata','mcats','mposts','madmins','',true);
		
	}


	function getFoto($id){
    $data = array();
    $options = array('id' => $id);
    $Q = $this->db->get_where('galeri',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }

    $Q->free_result();    
    return $data;    
 } 

 function getGaleri(){
     $data = array();
	 $Q = $this->db->get('galeri');
     $this->db->order_by('id','DESC');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();  
    return $data; 
 }

	function addGaleri(){
	$data = array( 
		
		'keterangan' => $this->input->post('keterangan'),
		'photo' => $this->_uploadImage()

	);

	$this->db->insert('galeri', $data);	 
 }

 	public function _uploadImage()
	{
		$config['upload_path']          = './lte3/dist/img/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		//$config['file_name']            = '$_FILES['foto']['name']';
		//$config['overwrite']			= true;
		//$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('foto')) {
			
			return $this->upload->data("file_name")["file_name"];
		}
		
		return "puput.jpeg";
	}


	function editGaleri(){
		if (!empty($_FILES["foto"]["name"])) {
         $p=  $this->_uploadImage();
        } else {
         $p=  $this->input->post('old_foto');
		}
	$data = array( 
		
		'keterangan' => $this->input->post('keterangan'),
		'photo' => $p

	);

	 	$this->db->where('id', $this->input->post('id'));
	$this->db->update('galeri', $data);	
	
 }
 function deleteGaleri($id){
 	$this->db->where('id', $id);
	$this->db->delete('galeri');	
 }


	
}

?>