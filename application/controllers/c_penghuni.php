<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_penghuni extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_paket');
      $this->load->model('m_penghuni');
	    $this->load->helper(array('form', 'url'));
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
		// $data = $this->m_paket->getAllPaket1();
    $data2 = $this->m_penghuni->getAllPenghuni();
		// $this->session->set_userdata('all_dataPaket',$data);
    $this->session->set_userdata('all_dataPenghuni',$data2);

		$this->load->view('v_penghuni');
	}

	public function inputbank()
	{
		$this->load->view('admin/bank/inputbank');
	}

  public function prosesinputpenghuni(){
		    $nama 			= $this->input->post('nama');
        $unit           		= $this->input->post('unit');
       	$no_ktp         		= $this->input->post('no_ktp');
       	// $isi_paket       			= $this->input->post('isi_paket');
        // $tanggal_diambil 			= "Belum Di Ambil";
        // $pecah = explode( "/",$tanggal_datang);
        // $tanggal = $pecah['2']."-".$pecah['0']."-".$pecah['1'];


    //    	$config['upload_path']          = './gambar/bank/';
		// $config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
    //
		// $this->load->library('upload', $config);
    //
		// if ( ! $this->upload->do_upload('Logo_Bank')){
		// 	$error = array('error' => $this->upload->display_errors());
		// 	$this->load->view('admin/bank/inputbank', $error);
		// }else{
		// 	$data = array('upload_data' => $this->upload->data());
		// 	$logo_bank = $data['upload_data']['full_path'];
		// 	$this->Model_Bank->inputBank($id_bank,$nama_bank,$no_rekening,$deskripsi,$logo_bank);
		// }
    $this->m_penghuni->inputPenghuni($nama, $unit, $no_ktp);
  		//print_r($foto);
        redirect('c_penghuni');

	}

	public function editpenghuni()
	{
		$query = $this->m_penghuni->getPenghuni($_GET['id_penghuni']);
		// print_r($query);
		$this->session->set_userdata('Penghuni',$query);
		$this->load->view('v_editPenghuni');
	}

  public function detailbank()
	{
		$query['data'] = $this->Model_Bank->getBank($_GET['Id_Bank']);

		$this->load->view('admin/bank/detailbank',$query);
	}

  public function proseseditpenghuni(){
		$id_penghuni			= $this->input->post('id_penghuni');
		$nama 			= $this->input->post('nama');
		$unit           		= $this->input->post('unit');
		$no_ktp         		= $this->input->post('no_ktp');


    //    	$config['upload_path']          = './gambar/bank/';
		// $config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
    //
    // $this->load->library('upload', $config);
    //
    // if ( ! $this->upload->do_upload('Logo_Bank')){
    //   $error = array('error' => $this->upload->display_errors());
    //   $this->load->view('admin/bank/editbank', $error);
    //   $logo_bank = $this->input->post('Foto_Profil_Lama');
    //   $this->Model_Bank->editBank($id_bank,$nama_bank,$no_rekening,$deskripsi,$logo_bank);
    // }else{
    //   $data = array('upload_data' => $this->upload->data());
    //   $logo_bank = $data['upload_data']['full_path'];
    //   $this->Model_Bank->editBank($id_bank,$nama_bank,$no_rekening,$deskripsi,$logo_bank);
    // }
    $this->m_penghuni->editPenghuni($id_penghuni, $nama,$unit, $no_ktp);





            redirect('c_penghuni');

  }

	 public function hapuspenghuni()
    {
      $id = $_GET['id_penghuni'];

        $this->m_penghuni->hapusPenghuni($id);

        //redirect
        redirect('c_penghuni');

    }
}
