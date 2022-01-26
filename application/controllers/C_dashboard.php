<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class C_dashboard extends CI_Controller{
		public function __construct(){
			parent::__construct();
			if ($this->session->userdata('status') != "login") {
				redirect(base_url('C_login'));
			}
		}
	 
		public function index(){
			$data['akun'] = $this->M_dashboard->JumlahAkun();
			$data['obat'] = $this->M_dashboard->JumlahObat();
			$data['keluar'] = $this->M_dashboard->TransaksiKeluar();
			$data['masuk'] = $this->M_dashboard->TransaksiMasuk();
		    $this->load->view('temp/atas');
		    $this->load->view('temp/menu');
		    $this->load->view('dashboard/index',$data);
		    $this->load->view('temp/bawah');
		}
	}
 ?>