<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mdata','mposts','mcats','madmins','',true);
		$this->load->model('biodata');
		$this->load->model('galery');
		$this->load->model('kontak');
	}	

	public function index()
	{
		$data['judul_konten'] = "Berita / Info";
		$data['judul']="Home";
		$data['main']="home/home";
		$data['aktif']='active';
		$data['posts'] = $this->mposts->getLivePosts(5);
		$data['cats'] = $this->mcats->getTopCategories();
		$this->load->view('home/page',$data);
	}
	public function contact()
	{
		$data['judul_konten'] = "Kontak Saya";
		$data['judul']="Kontak Saya";
		$data['main']="home/contact";
		$data['aktif']='active';
		$data['kontak'] = $this->kontak->getKontak();
		
		$this->load->view('home/page',$data);
	}
	public function about()
	{
		$data['judul_konten'] = "Tentang Saya";
		$data['judul']="About Me";
		$data['main']="home/about";
		$data['aktif']='active';
		$data['biodata_'] = $this->biodata->getBiodata();
		$data['sekolah'] = $this->biodata->getSekolah(1);
		$this->load->view('home/page',$data);
	}
	public function galeri()
	{
		$data['judul_konten'] = "Foto Keluarga";
		$data['judul']="Foto Keluarga";
		$data['main']="home/galeri";
		$data['aktif']='active';
		$data['galeri'] = $this->galery->getGaleri();
		$this->load->view('home/page',$data);
	}


	function addcomment(){
		if ($this->input->post('isi')){
			$this->mcomments->addComment();
		}
  	
  	redirect('page/post/'.$this->input->post('post_id'), 'refresh');
  
  }
	public function login()
	{
		$data['judul']="Login";
		$data['main']="home/login";
		$data['aktif']='active';
		$data['judul_konten'] = "Silahkan Masuk";
		$this->load->view('home/page',$data);
	}
	function ceklogin(){
  	$this->load->library('encrypt');
	if ($this->input->post('username')){
		$u = $this->input->post('username');
		$pw = $this->input->post('password');
		$row = $this->madmins->verifyUser($u,$pw);
		if (count($row)){
			$_SESSION['userid'] = $row['id'];
			redirect('admin/dashboard','refresh');
		}else{
			$this->session->set_flashdata('result','Maaf Nama Pengguna atau Kata Sandi Anda salah!');
			redirect('page/login','refresh');
		}
	}else{
		$this->session->set_flashdata('result','Isi Nama Pengguna dan Kata Sandi dulu!');
		redirect('page/login','refresh');
	}  
   
	}
	
	
	function logout()
	{
		$sesi_items = array ('user' => '');
		$this->session->unset_userdata($sesi_items);
		$this->session->set_flashdata('result','Anda wes logout');
		header('location:'.base_url().'index.php/page/login');
	}	
	function post($id){
		$data['judul_konten'] = "Berita / Info";
		$data['main'] = "home/post";
		$data['aktif']='active';
		$data['post'] = $this->mposts->getPost($id);
		$data['comments'] = $this->mcomments->getComments($id);
		$data['cats'] = $this->mcats->getTopCategories();
		$data['judul'] = $data['post']['title'];
		$this->load->vars($data);
		$this->load->view('home/page');  
  
    }
	function category($id){
		$data['judul_konten'] = "Berita / Info";
		$data['aktif']='active';
		$data['category'] = $this->mcats->getCategory($id);
		$data['posts'] = $this->mposts->getAllPostsByCategory($id);
		$data['cats'] = $this->mcats->getTopCategories();
		$data['judul'] = $data['category']['name'];
		$data['main'] = 'home/home';
		$this->load->vars($data);
		$this->load->view('home/page');  
	}	
	
	
}
?>