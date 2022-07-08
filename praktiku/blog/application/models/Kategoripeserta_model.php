<?php
class Kategoripeserta_model extends CI_Model {
    public $nama;
    
    public function getAll(){
        // menampilkan seluruh data yang ada di tabel jenis kegiatan 
        $query =$this->db->get('kategoripeserta');
        return $query->result();
       }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('kategoripeserta',['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO kategoripeserta (nama) VALUES (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE kategoripeserta SET nama=?, WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data kategoripeserta
        $sql = "DELETE FROM kategoripeserta WHERE id=?";
        $this->db->query($sql,$data);
    }
   }
   
?>