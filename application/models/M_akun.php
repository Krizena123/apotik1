<?php

    class M_akun extends CI_Model {
        function get_akun(){
            return $this->db->query("
            SELECT * FROM account 
            JOIN apoteker ON account.kodeApoteker = apoteker.kodeApoteker 
            ");
        }

        public function cekkodeapoteker(){
            $query = $this->db->query("SELECT max(kodeApoteker) as kode_apoteker from apoteker");
            $hasil = $query->row();
            return $hasil->kode_apoteker;
        }

        public function simpan(){
            $account = array (
                "username" => $this->input->post("username"),
                "password" => md5($this->input->post("password")),
                "level" => "user",
                "kodeApoteker" => $this->input->post("kodeApoteker"),
            );
            return $this->db->insert('account', $account);
        }

        public function simpan1(){
            $apoteker = array (
                "kodeApoteker" => $this->input->post("kodeApoteker"),
                "namaApoteker" => $this->input->post("namaApoteker"),
                "tanggalLahir" => $this->input->post("tanggalLahir"),
            );
            return $this->db->insert('apoteker', $apoteker);
        }

        function get_akun_by_no($No,$kodeApoteker){
            return $this->db->query("
            SELECT * FROM account 
            JOIN apoteker ON account.kodeApoteker = apoteker.kodeApoteker 
            WHERE account.No ='$No'
            ");
        }

        public function _edit($table,$data,$where){
            $this->db->update($table,$data,$where);
        }

        function edit_data($No) {
			$account = array (
				"username" => $this->input->post("username"),
                "password" => $this->input->post("password"),
			);
			$this->db->where("No",$No);
			return $this->db->update('account', $account);
		}
        
        function edit_data1($kodeApoteker) {
			$apoteker = array (
				"namaApoteker" => $this->input->post("namaApoteker"),
                "tanggalLahir" => $this->input->post("tanggalLahir"),
			);
			$this->db->where("kodeApoteker",$kodeApoteker);
			return $this->db->update('apoteker', $apoteker);
		}
    }
?>