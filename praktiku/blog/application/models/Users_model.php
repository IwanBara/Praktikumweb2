<?php
class Users_model extends CI_Model {
    public $username, $password, $email, $created_at, $last_login, $role;
    

    public function getAll(){
        // menampilkan seluruh data yang ada di tabel jenis users 
        $query =$this->db->get('users');
        return $query->result();
       }
    
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('users',['id' => $id]);
        return $query->row();
    }   
    
    public function delete($data){
        // hapus data kegiatan
        $sql = "DELETE FROM kegiatan WHERE id=?";
        $this->db->query($sql,$data);
   }
}
   
?>