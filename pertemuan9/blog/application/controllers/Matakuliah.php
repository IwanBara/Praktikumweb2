<?php
class Matakuliah extends CI_Controller{
    // Method matakuliah
    public function index_matakuliah(){
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;

        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index_matakuliah', $data);
        $this->load->view('layouts/footer');
    }
    public function form_matakuliah(){
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/form_matakuliah');
        $this->load->view('layouts/footer');
    }
    public function save_matakuliah(){
        $this->load->model('matakuliah_model','index_matakuliah');
            $_nama = $this->input->post('nama');
            $_sks = $this->input->post('sks');
            $_kode = $this->input->post('kode');

        $data_matakuliah['nama'] = $_nama;
        $data_matakuliah['sks'] = $_sks;
        $data_matakuliah['kode'] = $_kode;

        if(!empty($_idedit)){   
            $data_matakuliah['id']=$_idedit;
            $this->index_matakuliah->update($data_matakuliah);
        }else{
            $this->index_matakuliah->simpan($data_matakuliah);
        }
        redirect('matakuliah/index_matakuliah','refresh');
    }
    public function edit_matakuliah($id){
        $this->load->model('matakuliah_model','index_matakuliah');
        $obj_matakuliah = $this->index_matakuliah->getById($id);
        $data['obj_matakuliah']=$obj_matakuliah;

        $this->load->view('layouts/header');
        $this->load->view('matakuliah/edit_matakuliah', $data);
        $this->load->view('layouts/footer');
    }
    public function delete_matakuliah($id){
        $this->load->model('matakuliah_model','index_matakuliah');
        $data_matakuliah['id']=$id;
        $this->index_matakuliah->delete($data_matakuliah);
        redirect('matakuliah/index_matakuliah','refresh');
    }
}
?>