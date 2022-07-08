<?php
class Kegiatan_model extends CI_Model {
    public $judul, $kapasitas, $harga_tiket, $tanggal, $narasumber, $tempat, $pic, $jenis_id;

    public function getAll(){
        // menampilkan seluruh data yang ada di table kegiatan menggunakan query builder
        $query = $this->db->get('kegiatan');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('kegiatan', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO kegiatan (judul,kapasitas,harga_tiket,tanggal,narasumber,tempat,pic, jenis_id) VALUES (?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE kegiatan SET judul=?,kapasitas=?,harga_tiket=?,tanggal=?,narasumber=?,tempat=?,pic=?,jenis_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data kegiatan
        $sql = "DELETE FROM kegiatan WHERE id=?";
        $this->db->query($sql,$data);
    }
   }
   
?>