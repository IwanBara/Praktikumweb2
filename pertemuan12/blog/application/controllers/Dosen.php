<?php
class Dosen extends CI_Controller{
    // Method Dosen
    public function index_dosen(){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;

        $this->load->view('layouts/header');
        $this->load->view('dosen/index_dosen', $data);
        $this->load->view('layouts/footer');
    }
    public function detail_dosen($id){
        $this->load->model('dosen_model');
        $pengajar = $this->dosen_model->getById($id);
        $data['pengajar'] = $pengajar;

        $this->load->view('layouts/header');
        $this->load->view('dosen/detail_dosen', $data);
        $this->load->view('layouts/footer');
    }
    public function form_dosen(){
        $this->load->view('layouts/header');
        $this->load->view('dosen/form_dosen');
        $this->load->view('layouts/footer');
    }
    public function save_dosen(){
        $this->load->model('dosen_model','index_dosen');
            $_nama = $this->input->post('nama');
            $_gender = $this->input->post('gender');
            $_tmp_lahir = $this->input->post('tmp_lahir');
            $_tgl_lahir = $this->input->post('tgl_lahir');
            $_nidn = $this->input->post('nidn');
            $_pendidikan = $this->input->post('pendidikan');

        $data_dosen['nama'] = $_nama;
        $data_dosen['gender'] = $_gender;
        $data_dosen['tmp_lahir'] = $_tmp_lahir;
        $data_dosen['tgl_lahir'] = $_tgl_lahir;
        $data_dosen['nidn'] = $_nidn;
        $data_dosen['pendidikan'] = $_pendidikan;

        if(!empty($_idedit)){
            $data_dosen['id']=$_idedit;
            $this->index_dosen->update($data_dosen);
        }else{
            $this->index_dosen->simpan($data_dosen);
        }
        redirect('dosen/index_dosen','refresh');
    }
    public function edit_dosen($id){
        $this->load->model('dosen_model','index_dosen');
        $obj_dosen = $this->index_dosen->getById($id);
        $data['obj_dosen']=$obj_dosen;

        $this->load->view('layouts/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('layouts/footer');
    }
    public function delete_dosen($id){
        $this->load->model('dosen_model','index_dosen');
        $data_dosen['id']=$id;
        $this->index_dosen->delete($data_dosen);
        redirect('dosen/index_dosen','refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }
    public function upload(){
        $_iddosen =$this->input->post("iddosen");
        $this->load->model('dosen_model','dosen');
        $pengajar = $this->dosen->getById($_iddosen);
        $data['pengajar'] = $pengajar;

        $config['upload_path']='./uploads/photos';
        $config['allowed_types']='jpg|png';
        $config['max_size']= 2894;
        $config['max_width']= 2894;
        $config['max_height']= 2894;
        $config['file_name']= $pengajar->id;

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('foto')){
            $data['error'] = $this->upload->display_errors();
        }else{
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'data sukses';
        }

        $this->load->view('layouts/header');
        $this->load->view('dosen/detail_dosen', $data);
        $this->load->view('layouts/footer');
    }
}
?>