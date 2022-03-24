<?php 
class nilaiMahasiswa{
    public $nim;
    public $matkul;
    public $nilai;

    function __construct($nim, $matkul, $nilai) {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function hitungNilai() {
        return $this->nilai;
    }

    function kelulusan($keterangan){
        if($keterangan > 55) {
            return "Anda Lulus";
        } else {
            return "Anda Tidak Lulus";
        } 
    }
    function grade($keterangan){
        if($keterangan >= 85 && $keterangan == 100){
            return 'A';
        }else if ($keterangan >= 70 && $keterangan == 84){
            return 'B';
        }else if ($keterangan >= 56 && $keterangan == 69){
            return 'C';
        }else if ($keterangan >= 36 && $keterangan == 55){
            return 'D';
        }else if ($keterangan >= 10 && $keterangan == 35){
            return 'E';
        }else{
            return 'I';
        };
    }
}
?>