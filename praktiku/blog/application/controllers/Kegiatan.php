<?php
class Kegiatan extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model kegiatan
        $this->load->model('kegiatan_model');
        $kegiatan = $this->kegiatan_model->getAll();
        $data['kegiatan'] = $kegiatan;
        // render data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kegiatan/index', $data);
        $this->load->view('layout/footer');
    }
    public function dasboard(){
        // akses model kegiatan
        $this->load->model('kegiatan_model');
        $kegiatan = $this->kegiatan_model->getAll();
        $data['kegiatan'] = $kegiatan;
        // render data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kegiatan/dasboard', $data);
        $this->load->view('layout/footer');
    }
    public function detail($id){
        // akses model kegiatan
        $this->load->model('kegiatan_model');
        $kegiatan = $this->kegiatan_model->getById($id);
        $data['kegiatan'] = $kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kegiatan/detail', $data);
        $this->load->view('layout/footer');
    }
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kegiatan/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model kegiatan
        $this->load->model('kegiatan_model', 'kegiatan');
        $_judul = $this->input->post('judul');
        $_kapasitas = $this->input->post('kapasitas');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_tanggal = $this->input->post('tanggal');
        $_narasumber = $this->input->post('narasumber');
        $_tempat = $this->input->post('tempat');
        $_pic = $this->input->post('pic');
        $_jenis_id = $this->input->post('jenis_id');

        $data_kegiatan['judul'] = $_judul;
        $data_kegiatan['kapasitas'] = $_kapasitas;
        $data_kegiatan['harga_tiket'] = $_harga_tiket;
        $data_kegiatan['tanggal'] = $_tanggal;
        $data_kegiatan['narasumber'] = $_narasumber;
        $data_kegiatan['tempat'] = $_tempat;
        $data_kegiatan['pic'] = $_pic;
        $data_kegiatan['jenis_id'] = $_jenis_id;

        if((!empty($_idedit))){
            $data_kegiatan['id'] = $_idedit;
            $this->kegiatan->update($data_kegiatan);
        }else{
            $this->kegiatan->simpan($data_kegiatan);
        }
        redirect('kegiatan','refresh');
    }
    public function edit($id){
        // akses model kegiatan
        $this->load->model('kegiatan_model','kegiatan');
        $obj_kegiatan = $this->kegiatan->getById($id);
        $data['obj_kegiatan'] = $obj_kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kegiatan/edit', $data);
        $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('kegiatan_model','kegiatan');
        // Mengecek data kegiatan berdasarkan id
        $data_kegiatan['id'] = $id;
        $this->kegiatan->delete($data_kegiatan);
        redirect('kegiatan','refresh');
    }
    public function upload(){
        $_idkegiatan =$this->input->post("idkegiatan");
        $this->load->model('kegiatan_model','kegiatan');
        $kegiatan = $this->kegiatan->getById($_idkegiatan);
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
        $this->load->view('kegiatan/detail', $data);
        $this->load->view('layout/footer');
    }
}
?>