<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_login');
      $this->load->model('m_penghuni');
      $this->load->model('m_paket');

		$this->load->helper('url');
	    $this->load->helper('form');


	    $this->load->library('session');

	  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('v_login');
	}

	function ceklogin(){
		  if(isset($_POST['submit'])){
		   $nama 	= $this->input->post('nama',true);
		   $nip 	= $this->input->post('nip',true);
		   $cek 	= $this->m_login->proseslogin($nama, $nip);

		   $hasil = count($cek);

		   if($hasil > 0){
         $this->session->set_userdata('nama_karyawan',$nama);
         $data1 	= $this->m_paket->getAllPaket();
         $this->session->set_userdata('data_paket',$data1);

						    $this->load->view('v_beranda');
		   }else{

		    echo "gagal";
		    redirect('c_login');
		   }
		  }
	}

	public function logout(){

		$this->session->sess_destroy();
		$this->session->unset_userdata('nama_karyawan');
		redirect('c_login');

	}

	}
