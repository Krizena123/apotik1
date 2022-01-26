<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class C_login extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('M_login');
		}
	 
		public function index(){
			$this->load->view('temp/atas');
			$this->load->view('login/index.php');
			$this->load->view('temp/bawah');
		}	

		function logout(){
			$this->session->sess_destroy();
			redirect('c_login');
            $this->load->view('dashboard');
		}

        public function login(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $pass = md5($password);
            
            //data kondisi untuk seleksi di database
            $where = array(
                'username' => $username,
                'password' => $pass,
                // 'status' => "0"
            );

            //pengecekan apakah account terdaftar atau tidak
            $login = $this->M_login->validasiLogin("account", $where);
            if($login->num_rows()>0){
                $d = $login->row_array();
                    $data_session=array(
                        'username'  => $d['username'],
                        'password'  => $d['password'],
                        'kodeApoteker' => $d['kodeApoteker'],
                        'level'  => $d['level'],
                        'status' => "login",
                        
                        // 'Foto' =>  $d['Foto'],
                        );
                    $this->session->set_userdata($data_session);                
                    redirect(site_url('c_dashboard'));
            }else{
                    echo "<script>alert('Login Gagal : Silahkan check Username atau Password yang dimasukan'); history.go(-1);</script>";

                }
        }

        public function regist(){
			$this->load->view('temp/atas');
			$this->load->view('login/regist.php');
			$this->load->view('temp/bawah');
		}	

		public function tambahDataAkun(){
			$f_name = $this->input->post('f_name');
            $s_name = $this->input->post('s_name');
            $password = $this->input->post('password');
            $password1 = $this->input->post('password1');
            $username = $this->input->post('username');
            $nama = "$f_name $s_name";
            $level = "user";

            $where = array(
                'username' => $username,
            );
            $regist = $this->M_login->validasiLogin("account", $where);

            if($regist->num_rows()>0){
                echo "<script>alert('Registrasi Gagal : username sudah digunakan!'); history.go(-1);</script>";
            }else{
                if ($password == $password1) {
                    if ($this->M_login->insertDataAkun($nama)) {
                        redirect(site_url("c_login/"));
                    }
                }else{
                    echo "<script>alert('Registrasi Gagal : terdapat kesalahan, mohon cek kembali!'); history.go(-1);</script>";
                }
            }
            
        }

	}
 ?>