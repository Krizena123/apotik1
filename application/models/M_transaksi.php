<?php

    class M_transaksi extends CI_Model {
        function getall(){
            return $this->db->query("
            SELECT * FROM transaksi_obat_keluar 
            JOIN apoteker ON transaksi_obat_keluar.kodeApoteker = apoteker.kodeApoteker 
            JOIN obat ON transaksi_obat_keluar.kodeObat = obat.kodeObat
            ");
        }

        function getallbeli(){
            return $this->db->query("
            SELECT * FROM transaksi_obat_masuk
            JOIN apoteker ON transaksi_obat_masuk.kodeApoteker = apoteker.kodeApoteker 
            JOIN obat ON transaksi_obat_masuk.kodeObat = obat.kodeObat
            ");
        }

        function get_obat_by_noJual($idTransaksi){
            $query = $this->db->query("
            SELECT * FROM transaksi_obat_keluar 
            JOIN apoteker ON transaksi_obat_keluar.kodeApoteker = apoteker.kodeApoteker 
            JOIN obat ON transaksi_obat_keluar.kodeObat = obat.kodeObat
            WHERE transaksi_obat_keluar.idTransaksi = '$idTransaksi'
            ");
            return $query;
        }
    }
?>