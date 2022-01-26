<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_dashboard extends CI_Model {
        public function JumlahAkun(){   
            $query = $this->db->get('account');
                if($query->num_rows()>0){
                    return $query->num_rows();
                }else{
                    return 0;
                }
        }
        public function JumlahObat(){   
            $query = $this->db->get('obat');
                if($query->num_rows()>0){
                    return $query->num_rows();
                }else{
                    return 0;
                }
        }

        public function TransaksiKeluar(){   
            $query = $this->db->get('transaksi_obat_keluar');
                if($query->num_rows()>0){
                    return $query->num_rows();
                }else{
                    return 0;
                }
        }

        public function TransaksiMasuk(){   
            $query = $this->db->get('transaksi_obat_masuk');
                if($query->num_rows()>0){
                    return $query->num_rows();
                }else{
                    return 0;
                }
        }
    }  
?>