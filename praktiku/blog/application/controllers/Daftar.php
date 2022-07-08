<?php
class Daftar extends CI_Controller{
    public function index(){
     // akses model

     $this->load->model('daftar_model');
     $daftar = $this->daftar_model->getAll();
     $data['daftar'] = $daftar;
        
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('daftar/index', $data);
        $this->load->view('layout/footer');

    }
    public function detail($id){
        // akses model daftar
        $this->load->model('daftar_model');
        $daftar = $this->daftar_model->getById($id);
        $data['daftar'] = $daftar;

         $this->load->view('layout/header');
         $this->load->view('layout/side');
         $this->load->view('daftar/detail', $data);
         $this->load->view('layout/footer');
    }
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('daftar/form');
        $this->load->view('layout/footer'); 
        
    }
    public function save(){
        // akses ke model daftar
        $this->load->model('daftar_model', 'daftar');
        $_tanggal_daftar = $this->input->post('tanggal_daftar');
        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');

        $data_daftar['tanggal_daftar'] = $_tanggal_daftar;
        $data_daftar['alasan'] = $_alasan;
        $data_daftar['users_id'] = $_users_id;
        $data_daftar['kegiatan_id'] = $_kegiatan_id;
        $data_daftar['kategori_peserta_id'] = $_kategori_peserta_id;
        $data_daftar['nosertifikat'] = $_nosertifikat;

        if((!empty($_idedit))){
            $data_daftar['id'] = $_idedit;
            $this->daftar->update($data_daftar);
        }else{
            $this->daftar->simpan($data_daftar);
        }
        redirect('daftar','refresh');
    }
    public function edit($id){
        $this->load->model('daftar_model','daftar');
        $obj_daftar = $this->daftar->getById($id);
        $data['obj_daftar'] = $obj_daftar;
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('daftar/edit', $data);
        $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('daftar_model','daftar');
        $data_daftar['id'] = $id;
        $this->daftar->delete($data_daftar);
        redirect('daftar','refresh');
    }
    public function upload(){
        $_iddaftar =$this->input->post("iddaftar");
        $this->load->model('daftar_model','daftar');
        $daftar = $this->daftar->getById($_iddaftar);
        $data['daftar'] = $daftar;

        $config['upload_path']='./uploads/photos';
        $config['allowed_types']='jpg|png';
        $config['max_size']= 2894;
        $config['max_width']= 2894;
        $config['max_height']= 2894;
        $config['file_name']= $daftar->id;

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('foto')){
            $data['error'] = $this->upload->display_errors();
        }else{
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'data sukses';
        }
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('daftar/detail', $data);
        $this->load->view('layout/footer');
    }
}

?>