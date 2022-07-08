<?php
class Users extends CI_Controller{
    public function index(){
     // akses model

     $this->load->model('users_model');
     $users = $this->users_model->getAll();
     $data['users'] = $users;
        
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('users/index', $data);
        $this->load->view('layout/footer');

    }
    public function profil(){
        // akses model
   
        $this->load->model('users_model');
        $users = $this->users_model->getAll();
        $data['users'] = $users;
           
           $this->load->view('layout/header');
           $this->load->view('layout/side');
           $this->load->view('users/profil', $data);
           $this->load->view('layout/footer');
   
       }
    public function detail($id){
        // akses model users
        $this->load->model('users_model');
        $users = $this->users_model->getById($id);
        $data['users'] = $users;

         $this->load->view('layout/header');
         $this->load->view('layout/side');
         $this->load->view('users/detail', $data);
         $this->load->view('layout/footer');
     }
     
    public function delete($id){
        $this->load->model('users_model','users');
        // Mengecek data users berdasarkan id
        $data_users['id'] = $id;
        $this->users->delete($data_users);
        redirect('users','refresh');
    }
}
?>