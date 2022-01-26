<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class C_akun extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
	 
		public function index(){
			$data['akun'] = $this->M_akun->get_akun();
		    $this->load->view('temp/atas');
		    $this->load->view('temp/menu');
		    $this->load->view('akun/index',$data);
		    $this->load->view('temp/bawah');
		}

    public function tambah(){
      $kodeApotekerdb = $this->M_akun->cekkodeapoteker();
			$nourut = substr($kodeApotekerdb, 2, 3);
			$kodeApotekerSekarang = $nourut + 1;
			$data = array(
				'kodeApoteker' => $kodeApotekerSekarang,
			);
		  $this->load->view('temp/atas');
		  $this->load->view('temp/menu');
		  $this->load->view('akun/tambah',$data);
	    $this->load->view('temp/bawah');
		}

    public function proses_tambah(){
      $this->M_akun->simpan();
      $this->M_akun->simpan1();
      $data['akun'] = $this->M_akun->get_akun();
		  $this->load->view('temp/atas');
		  $this->load->view('temp/menu');
		  $this->load->view('akun/index',$data);
	    $this->load->view('temp/bawah');
		}

		public function hapus($No,$kodeApoteker){
      $where = array('No' => $No);
      $where1 = array('kodeApoteker' => $kodeApoteker);
      $this->M_obat->hapus_data($where1,'apoteker');
      $this->M_obat->hapus_data($where,'account');
      redirect(site_url("C_akun"));
    }

    public function edit($No,$kodeApoteker){
        $data['akun'] = $this->M_akun->get_akun_by_no($No,$kodeApoteker)->row();
        $this->load->view('temp/atas');
		    $this->load->view('temp/menu');
		    $this->load->view("akun/edit",$data);
		    $this->load->view('temp/bawah');
    }

    public function proses_edit($No,$kodeApoteker){
        $this->M_akun->edit_data($No);
        $this->M_akun->edit_data1($kodeApoteker);
	      redirect('C_akun');
	  }

    
    public function level($No,$level){
      if ($level =="user") {
          $level     = "admin";
          $data = array(
            'level'  => $level,
          );
          $where = array(
            'No'    => $No,
          );
      } else {
          $level     = "user";
          $data = array(
            'level'  => $level,
          );
          $where = array(
            'No'    => $No,
          );
      }
      if ($this->M_akun->_edit('account', $data, $where)) { }
      redirect('C_akun');
    }
	}
 ?>