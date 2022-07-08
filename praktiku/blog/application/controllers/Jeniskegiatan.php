<?php
class Jeniskegiatan extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model jeniskegiatan
        $this->load->model('jeniskegiatan_model');
        $jeniskegiatan = $this->jeniskegiatan_model->getAll();
        $data['jeniskegiatan'] = $jeniskegiatan;
        // render data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('jeniskegiatan/index', $data);
        $this->load->view('layout/footer');
    }
    public function detail($id){
        // akses model jeniskegiatan
        $this->load->model('jeniskegiatan_model');
        $kegiatan = $this->jeniskegiatan_model->getById($id);
        $data['kegiatan'] = $kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('jeniskegiatan/detail', $data);
        $this->load->view('layout/footer');
    }
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('jeniskegiatan/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model jeniskegiatan
        $this->load->model('jeniskegiatan_model', 'jeniskegiatan');
        $_nama = $this->input->post('nama');
        $_deskripsi = $this->input->post('deskripsi');

        $data_jeniskegiatan['nama'] = $_nama;
        $data_jeniskegiatan['deskripsi'] = $_deskripsi;

        if((!empty($_idedit))){
            $data_jeniskegiatan['id'] = $_idedit;
            $this->jeniskegiatan->update($data_jeniskegiatan);
        }else{
            $this->jeniskegiatan->simpan($data_jeniskegiatan);
        }
        redirect('jeniskegiatan','refresh');
    }
    public function edit($id){
        // akses model jeniskegiatan
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
        $obj_jeniskegiatan = $this->jeniskegiatan->getById($id);
        $data['obj_jeniskegiatan'] = $obj_jeniskegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('jeniskegiatan/edit', $data);
        $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
        // Mengecek data jeniskegiatan berdasarkan id
        $data_jeniskegiatan['id'] = $id;
        $this->jeniskegiatan->delete($data_jeniskegiatan);
        redirect('jeniskegiatan','refresh');
    }
    public function upload(){
        $_idjeniskegiatan =$this->input->post("idjeniskegiatan");
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
        $kegiatan = $this->jeniskegiatan->getById($_idjeniskegiatan);
        $data['kegiatan'] = $kegiatan;

        $config['upload_path']='./uploads/photos';
        $config['allowed_types']='jpg|png';
        $config['max_size']= 2894;
        $config['max_width']= 2894;
        $config['max_height']= 2894;
        $config['file_name']= $kegiatan->id;

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('foto')){
            $data['error'] = $this->upload->display_errors();
        }else{
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'data sukses';
        }
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('jeniskegiatan/detail', $data);
        $this->load->view('layout/footer');
    }
}
?>