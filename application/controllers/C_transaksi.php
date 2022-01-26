<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class C_transaksi extends CI_Controller{
		public function __construct(){
			parent::__construct();
            if ($this->session->userdata('status') != "login") {
				redirect(base_url('C_login'));
			}
		}
	   
		public function index(){
			$data['obat'] = $this->M_transaksi->getall();
    		$this->load->view('temp/atas');
    		$this->load->view('temp/menu');
    		$this->load->view('transaksi/index',$data);
    		$this->load->view('temp/bawah');
		}

		public function beli(){
			$data['obat'] = $this->M_transaksi->getallbeli();
    		$this->load->view('temp/atas');
    		$this->load->view('temp/menu');
    		$this->load->view('transaksi/index_beli',$data);
    		$this->load->view('temp/bawah');
		}

		public function hapus($idTransaksi){
            $where = array('idTransaksi' => $idTransaksi);
            $this->M_obat->hapus_data($where,'transaksi_obat_keluar');
            redirect(site_url("C_transaksi"));
    	}

		public function hapusbeli($idTransaksi){
            $where = array('idTransaksi' => $idTransaksi);
            $this->M_obat->hapus_data($where,'transaksi_obat_keluar');
            redirect(site_url("C_transaksi/beli"));
    	}

		public function edit($idTransaksi){
			$data['transaksi'] = $this->M_transaksi->get_obat_by_noJual($idTransaksi)->row();
			$this->load->view('temp/atas');
			$this->load->view('temp/menu');
			$this->load->view("transaksi/edit",$data);
			$this->load->view('temp/bawah');
		}

		public function proses_edit($kodeObat){
			$this->M_obat->edit_data($kodeObat);
			redirect(site_url("C_obat/"));
		}

		public function cetak(){
			$data['obatJ'] = $this->M_transaksi->getall();
			$data['obatB'] = $this->M_transaksi->getallbeli();		
    		$this->load->view('transaksi/cetak',$data);
		}	

	}
 ?>