<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class C_obat extends CI_Controller{
		public function __construct(){
			parent::__construct();
            if ($this->session->userdata('status') != "login") {
				redirect(base_url('C_login'));
			}
		}
	   
		public function index(){
			$data['obat'] = $this->M_obat->getall();
    		$this->load->view('temp/atas');
    		$this->load->view('temp/menu');
    		$this->load->view('obat/index',$data);
    		$this->load->view('temp/bawah');
		}

		public function tambah(){
			$kodeObatdb = $this->M_obat->cekkodeobat();
			$nourut = substr($kodeObatdb, 2, 3);
			$kodeObatSekarang = $nourut + 1;
			$data = array('kodeObat' => $kodeObatSekarang);
    		$this->load->view('temp/atas');
    		$this->load->view('temp/menu');
    		$this->load->view('obat/tambah',$data);
    		$this->load->view('temp/bawah');
		}

		public function tambahobat(){
			$this->M_obat->simpan();
			redirect(site_url("C_obat/"));
		}

		public function hapus($kodeObat){
            $where = array('kodeObat' => $kodeObat);
            $this->M_obat->hapus_data($where,'obat');
            redirect(site_url("C_obat"));
    	}

		public function edit($kodeObat){
			$data['obat'] = $this->M_obat->get_obat_by_no($kodeObat)->row();
			$this->load->view('temp/atas');
			$this->load->view('temp/menu');
			$this->load->view("obat/edit",$data);
			$this->load->view('temp/bawah');
		}

		public function proses_edit($kodeObat){
			$this->M_obat->edit_data($kodeObat);
			redirect(site_url("C_obat/"));
		}

		public function transaksi($kodeObat){
			$kodeTransaksidb = $this->M_obat->cekkodetransaksijual();
			$kodeTransaksiMdb = $this->M_obat->cekkodetransaksibeli();
			$nourut = substr($kodeTransaksidb, 3, 3);
			$nourutM = substr($kodeTransaksiMdb, 3, 3);
			$kodeTransaksiSekarang = $nourut + 1;
			$kodeTransaksiMSekarang = $nourutM + 1;
			$data = array(
				'idTransaksi' => $kodeTransaksiSekarang,
				'idTransaksi1' => $kodeTransaksiMSekarang,
			);

			// print_r("$kodeTransaksiMdab - $nourutM - $kodeTransaksiMSekarang");
			$data['obat'] = $this->M_obat->get_obat_by_no($kodeObat)->row();
			$this->load->view('temp/atas');
			$this->load->view('temp/menu');
			$this->load->view("obat/transaksi",$data);
			$this->load->view('temp/bawah');
		}

		public function proses_jual($kodeObat){
			$this->M_obat->edit_data_jual($kodeObat);
			$this->M_obat->tambah_data_jual($kodeObat);
			redirect(site_url("C_obat/"));
		}
		
		public function proses_beli($kodeObat){
			$this->M_obat->edit_data_beli($kodeObat);
			$this->M_obat->tambah_data_beli($kodeObat);
			redirect(site_url("C_obat/"));
		}
	}
 ?>