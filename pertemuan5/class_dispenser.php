<?php
class Dispenser{
    protected $volume;
    protected $hargasegelas;
    const volume_gelas = 250;
    public $namaminuman;

    public function set_isi($vol){
        return $this->volume = $vol;
    }
    public function set_harga($harga){
        return $this->hargasegelas = $harga;
    }
    function gethasil(){
        return $this->volume - self::volume_gelas;
    }
}

$Aqua = new Dispenser();
echo "Nama Minuman ".$Aqua -> namaminuman = 'Aqua';
echo "<hr>";
echo "Volume galon nya adalah ".$Aqua -> set_isi(1000) ." Ml";
echo "<br/>";
echo "Harga Segelas nya adalah ".$Aqua -> set_harga(3000) ." Rupiah";
echo "<br/>";
echo "Andi beli air 1 gelas yang volume nya ".Dispenser::volume_gelas ." Ml";
echo "<br/>";
echo "Hasil volume sekarang adalah ".$Aqua -> gethasil() ." Ml";
?>