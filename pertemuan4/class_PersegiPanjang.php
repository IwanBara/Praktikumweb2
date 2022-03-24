<?php 

class PersegiPanjang {
    private $Panjang;
    private $lebar;
    function __construct ($p, $l) {
        $this->Panjang = $p;
        $this->lebar = $l;
    }
    function getKeliling() {
        return 2 * ($this->Panjang + $this->lebar);
    }
    function getLuas() {
        return $this->Panjang * $this->lebar;
    }
}

?>