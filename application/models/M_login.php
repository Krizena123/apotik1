<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_login extends CI_Model {
        public function validasiLogin($table, $where)
        {   
            $this->db->where($where);
            return $this->db->get($table);
            
        }

        public function cek($table, $where)
        {   
            $this->db->where($where);
            return $this->db->get($table);
            
        }
        
        // function insertDataAkun($nama) {
        //     $account = array (
        //         "Nama" => $nama,
        //         "username" => $this->input->post("username"),
        //         "password" => md5($this->input->post("password")),
        //         "foto" => "user.png",
        //         "level" => "user",
        //     );
        //     return $this->db->insert('account', $account);
        // }        

        public function cek_regist($username){   
            $query = $this->db->query("SELECT COUNT(*) FROM account WHERE 'username' = '$username'");
                if($query->num_rows()>0){
                    return $query->num_rows();
                }else{
                    return 0;
                }
        }
    }  
?>