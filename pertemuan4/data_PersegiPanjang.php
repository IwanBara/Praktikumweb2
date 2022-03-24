<?php 
require_once 'class_PersegiPanjang.php';
echo "Menghitung Luas dan keliling persegi panjang";
$satu = new PersegiPanjang(18,9);
$dua = new PersegiPanjang(6,3);

echo "<br>Luas persegi panjang 1 = " .$satu->getLuas();
echo "<br>Luas persegi panjang 2 = " .$dua->getLuas();

echo "<br>Keliling persegi panjang 1 = " .$satu->getKeliling();
echo "<br>Keliling persegi panjang 2 = " .$dua->getKeliling();

?>