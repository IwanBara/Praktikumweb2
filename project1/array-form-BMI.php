<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    form{
        margin-left:2em;
        margin-right:2em;
      }
      table{
        margin-left:2em;
        padding-left:2em;

      }
      h1{
          text-align:center;
      }
    </style>
<br>
<h1>Kalkulator BMI</h1>
<hr/>

<form method = "POST" action = "">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama pasien</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="nama lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Kode pasien</label> 
    <div class="col-8">
      <input id="kode" name="kode" placeholder="kode" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Tanggal periksa</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control" > 
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <select id="gender" name="gender" class="custom-select">
        <option value="P">laki-laki</option>
        <option value="L">Wanita</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Berat badan (kg)</label> 
    <div class="col-8">
      <input id="berat" name="berat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Tinggi badan (cm)</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>

<?php

require_once 'class_BMI.php';
require_once 'class_pasien.php';


$nama = $_POST['nama'];
$kode = $_POST['kode'];
$tanggal = $_POST['tanggal'];
$gender = $_POST['gender'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];


$nilai = new BMI ($berat, $tinggi);

$psn1 = ['id'=>1, 'tanggal_periksa'=>'2022-01-10','kode_pasien'=>'P001','nama_pasien'=>'Ahmad','gender'=>'L','berat'=>69.8,'tinggi'=>169,'Nilai_BMI'=>24.7,'status_BMI'=>'Kelebihan Berat Badan'];
$psn2 = ['id'=>2, 'tanggal_periksa'=>'2022-01-10','kode_pasien'=>'P002','nama_pasien'=>'Rina','gender'=>'P','berat'=>55.3,'tinggi'=>165,'Nilai_BMI'=>20.3,'status_BMI'=>'Normal(ideal)'];
$psn3 = ['id'=>3, 'tanggal_periksa'=>'2022-01-11','kode_pasien'=>'P003','nama_pasien'=>'Lutfi','gender'=>'L','berat'=>45.2,'tinggi'=>171,'Nilai_BMI'=>15.4,'status_BMI'=>'Kekurangan Berat Badan'];
$psn4 = ['id'=>4, 'tanggal_periksa'=>$tanggal,'kode_pasien'=>$kode,'nama_pasien'=>$nama,'gender'=>$gender,'berat'=>$berat,'tinggi'=>$tinggi,'Nilai_BMI'=>$nilai->nilaiBMI(),'status_BMI'=>$nilai->statusBMI()];
$arr_data = [$psn1, $psn2, $psn3, $psn4];
?>

<h1>Data BMI pasien</h1>
<br>

<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Tanggal Periksa</th><th>Kode pasien</th><th>Nama Pasien</th>
            <th>Gender</th><th>Berat(Kg)</th><th>Tinggi(cm)</th><th>Nilai BMI</th><th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $nomor=1;
        foreach($arr_data as $obj){
            echo'<tr>';
            echo '<td>'.$nomor.'</td>';
            echo '<td>'.$obj['tanggal_periksa'].'</td>';
            echo '<td>'.$obj['kode_pasien'].'</td>';
            echo '<td>'.$obj['nama_pasien'].'</td>';
            echo '<td>'.$obj['gender'].'</td>';
            echo '<td>'.$obj['berat'].'</td>';
            echo '<td>'.$obj['tinggi'].'</td>';
            echo '<td>'.$obj['Nilai_BMI'].'</td>';
            echo '<td>'.$obj['status_BMI'].'</td>';
            $nomor++;

        }
        ?>
    </tbody>
</table>
