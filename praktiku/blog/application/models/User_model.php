<?php
class User_model extends CI_Model{
    private $tabel = "users";

    public function getAll(){
        $query = $this->db->get($jenis->table);
        return $query->result();
    }
    public function finById($id){
        $this->db->where('id,$id');
        $query = $this->db->get($jenis->table);
        return $query->row();
    }
    public function login($uname,$pass){
        $sql = "SELECT * From users WHERE username=? and password=MD5(?)";
        $data = [$uname,$pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
}
?>