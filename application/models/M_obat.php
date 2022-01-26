<?php

    class M_obat extends CI_Model {
        function getall(){
            return $this->db->get("obat");
        }

        public function cekkodeobat(){
            $query = $this->db->query("SELECT max(kodeObat) as kode_obat from obat");
            $hasil = $query->row();
            return $hasil->kode_obat;
        }

        public function cekkodetransaksijual(){
            $query = $this->db->query("SELECT max(idTransaksi) as kode_transaksi from transaksi_obat_keluar");
            $hasil = $query->row();
            return $hasil->kode_transaksi;
        }

        public function cekkodetransaksibeli(){
            $query = $this->db->query("SELECT max(idTransaksi) as kode_transaksi from transaksi_obat_masuk");
            $hasil = $query->row();
            return $hasil->kode_transaksi;
        }

        public function simpan(){
            $obat = array (
                "kodeObat" => $this->input->post("kodeObat"),
                "namaObat" => $this->input->post("namaObat"),
                "hargaObat" => $this->input->post("hargaObat"),
                "sisaObat" => $this->input->post("sisaObat"),
                "tanggalKadarluasa" => $this->input->post("tanggalKadarluasa"),
            );
            return $this->db->insert('obat', $obat);
        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        function get_obat_by_no($kodeObat){
            $this->db->where("kodeObat",$kodeObat);
            return $this->db->get('obat');
        }

        function edit_data($kodeObat) {
			$obat = array (
				"namaObat" => $this->input->post("namaObat"),
                "hargaObat" => $this->input->post("hargaObat"),
                "sisaObat" => $this->input->post("sisaObat"),
                "tanggalKadarluasa" => $this->input->post("tanggalKadarluasa"),
			);
			$this->db->where("kodeObat",$kodeObat);
			return $this->db->update('obat', $obat);
		}

        function edit_data_jual($kodeObat) {
			$obat = array (
                "sisaObat" => $this->input->post("total"),
			);
			$this->db->where("kodeObat",$kodeObat);
			return $this->db->update('obat', $obat);
		}

        public function tambah_data_jual(){
            $transaksi_obat_keluar = array (
                "idTransaksi" => $this->input->post("idTransaksi"),
                "kodeObat" => $this->input->post("kodeObat"),
                "tanggalBeli" => date('Y-m-d'),
                "jumlahJual" => $this->input->post("jumlahJual"),
                "kodeApoteker" => $this->session->userdata('kodeApoteker'),
            );
            return $this->db->insert('transaksi_obat_keluar', $transaksi_obat_keluar);
        }

        function edit_data_beli($kodeObat) {
			$obat = array (
                "sisaObat" => $this->input->post("total"),
			);
			$this->db->where("kodeObat",$kodeObat);
			return $this->db->update('obat', $obat);
		}

        public function tambah_data_beli(){
            $transaksi_obat_masuk = array (
                "idTransaksi" => $this->input->post("idTransaksi"),
                "kodeObat" => $this->input->post("kodeObat"),
                "tanggalBeli" => date('Y-m-d'),
                "jumlahBeli" => $this->input->post("jumlahBeli"),
                "kodeApoteker" => $this->session->userdata('kodeApoteker'),
            );
            return $this->db->insert('transaksi_obat_masuk', $transaksi_obat_masuk);
        }
    }
?>