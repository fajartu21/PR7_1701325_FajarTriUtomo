
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

     public function left(){
    $this->db->select('lokomotif.kd_kereta,nama,kursi.kd_kursi,kd_gerbong'); //memeilih semua field
    $this->db->from('lokomotif'); //memeilih tabel
    $this->db->join('kursi', 'lokomotif.kd_kereta = kursi.kd_kereta','left'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
    
 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $left[] = $data;
            }
        return $left; //hasil dari semua proses ada dimari
        }
}

        public function right(){
    $this->db->select('kursi.kd_kursi,kursi.kd_gerbong,kursi.kd_kereta,gerbong.nama'); //memeilih semua field
    $this->db->from('kursi'); //memeilih tabel
    $this->db->join('gerbong', 'kursi.kd_gerbong = gerbong.kd_gerbong','right'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
    
 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $right[] = $data;
            }
        return $right; //hasil dari semua proses ada dimari
        }
}

public function inner(){
    $this->db->select('lokomotif.kd_kereta,lokomotif.nama, kursi.kd_kursi,gerbong.kd_gerbong,gerbong.nama'); //memeilih semua field
    $this->db->from('lokomotif'); //memeilih tabel
    $this->db->join('kursi', 'lokomotif.kd_kereta = kursi.kd_kereta','inner'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
    $this->db->join('gerbong', 'lokomotif.kd_kereta = gerbong.kd_kereta','inner'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
    
 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
    return $query->result();    
}

// public function inner(){
//     $this->db->select('*');
//         $this->db->from('lokomotif');
//         $this->db->join('kursi','lokomotif.kd_kereta=kursi.kd_kereta');
//         $this->db->join('gerbong','lokomotif.kd_kereta=gerbong.kd_kereta');
//         $query = $this->db->get();
//         return $query->result();
// }



}
