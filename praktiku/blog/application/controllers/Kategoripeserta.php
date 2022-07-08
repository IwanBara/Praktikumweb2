<?php
class Kategoripeserta extends CI_Controller{
    public function index(){
     // akses model
     $this->load->model('kategoripeserta_model');
     $kategoripeserta = $this->kategoripeserta_model->getAll();
     $data['kategoripeserta'] = $kategoripeserta;
        
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kategoripeserta/index', $data);
        $this->load->view('layout/footer');

    }
    public function detail($id){
        // akses model kategori peserta
        $this->load->model('kategoripeserta_model');
        $peserta = $this->kategoripeserta_model->getById($id);
        $data['peserta'] = $peserta;

         $this->load->view('layout/header');
         $this->load->view('layout/side');
         $this->load->view('kategoripeserta/detail', $data);
         $this->load->view('layout/footer');
    }
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kategoripeserta/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model kategoripeserta
        $this->load->model('kategoripeserta_model', 'kategoripeserta');
        $_nama = $this->input->post('nama');

        $data_kategoripeserta['nama'] = $_nama;
        
        if((!empty($_idedit))){
            $data_kategoripeserta['id'] = $_idedit;
            $this->kategoripeserta->update($data_kategoripeserta);
        }else{
            $this->kategoripeserta->simpan($data_kategoripeserta);
        }
        redirect('kategoripeserta','refresh');
    }
    public function edit($id){
        // akses model kategoripeserta
        $this->load->model('kategoripeserta_model','kategoripeserta');
        $obj_kategoripeserta = $this->kategoripeserta->getById($id);
        $data['obj_kategoripeserta'] = $obj_kategoripeserta;
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kategoripeserta/edit', $data);
        $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('kategoripeserta_model','kategoripeserta');
        // Mengecek data kategoripeserta berdasarkan id
        $data_kategoripeserta['id'] = $id;
        $this->kategoripeserta->delete($data_kategoripeserta);
        redirect('kategoripeserta','refresh');
    }
    public function upload(){
        $_idkategoripeserta =$this->input->post("idkategoripeserta");
        $this->load->model('kategoripeserta_model','kategoripeserta');
        $peserta = $this->kategoripeserta->getById($_idkategoripeserta);
        $data['peserta'] = $peserta;

        $config['upload_path']='./uploads/photos';
        $config['allowed_types']='jpg|png';
        $config['max_size']= 2894;
        $config['max_width']= 2894;
        $config['max_height']= 2894;
        $config['file_name']= $peserta->id;

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('foto')){
            $data['error'] = $this->upload->display_errors();
        }else{
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'data sukses';
        }
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kategoripeserta/detail', $data);
        $this->load->view('layout/footer');
    }
}
?>