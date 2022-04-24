<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');

        // buat object model 1 dan nilai nya
        $this->mhs1->id=1;
        $this->mhs1->nim='0111';
        $this->mhs1->nama='Faiz';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model','mhs2');

        // buat object model 2 dan nilai nya
        $this->mhs2->id=2;
        $this->mhs2->nim='0222';
        $this->mhs2->nama='nurul';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        // simpan object yang kita buat tadi ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
    // Method Dosen
    public function dosen(){
        $this ->load->model('dosen_model','dns1');
        $this ->dns1->nidn='011';
        $this ->dns1->pendidikan='S1';

        $this ->load->model('dosen_model','dns2');
        $this ->dns2->nidn='012';
        $this ->dns2->pendidikan='S2';

        $this ->load->model('dosen_model','dns3');
        $this ->dns3->nidn='013';
        $this ->dns3->pendidikan='S3';

        $list_dns = [$this->dns1,$this->dns2,$this->dns3];
        $data['list_dns'] = $list_dns;
        $this->load->view('mahasiswa/dosen', $data);
    }

    public function matakuliah(){
        $this ->load->model('matakuliah_model','mtkl1');
        $this ->mtkl1->nama='Pemweb';
        $this ->mtkl1->sks='3';
        $this ->mtkl1->kode='PW2';
    
        $this ->load->model('matakuliah_model','mtkl2');
        $this ->mtkl2->nama='Basis Data';
        $this ->mtkl2->sks='4';
        $this ->mtkl2->kode='BD';

        $this ->load->model('matakuliah_model','mtkl3');
        $this ->mtkl3->nama='Jaringan Komputer';
        $this ->mtkl3->sks='3';
        $this ->mtkl3->kode='JK';

        $list_mtkl = [$this->mtkl1,$this->mtkl2,$this->mtkl3];
        $data['list_mtkl'] = $list_mtkl;
        $this->load->view('mahasiswa/matakuliah', $data);
    }
    
}
?>