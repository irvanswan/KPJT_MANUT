<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MGrafik extends CI_Model{
 
    function get_jml_hasil(){
        $query = $this->db->query("SELECT nm_produk,SUM(jml_hasil) AS jml_ FROM barang GROUP BY nm_produk");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 
}