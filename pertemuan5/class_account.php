<?php
class Account{
    public $nomor;
    public $nama;
    public $saldo;

    public function __construct($nomor, $nama, $saldo){
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }
    public function daftar(){
    echo "{$this->nomor} {$this->nama} {$this->saldo}";
    }
}

class accountBank extends Account{
    public function nabung($uang){
        echo " Nabung ". number_format ($uang) ." <br>";
    }
    public function tarik($uang){
        echo " Tarik Uang ". number_format ($uang) ."<br>";
    }
}
echo "<H3>Bank INI</H3>";
?>
<?php
$pemilik1 = new accountBank("", "Ahmad", "");
$pemilik1->daftar();
$pemilik1->nabung(1000000);

$pemilik2 = new accountBank("", "Budi","" );
$pemilik2->daftar();
$pemilik2->tarik(2500000);
?>

<?php
    $pemilik1 = ['nomor' => 'C001', 'nama' => 'Ahmad', 'saldo' => 6000000];
    $pemilik2 = ['nomor' => 'C002', 'nama' => 'Budi', 'saldo' => 5350000];
    $pemilik3 = ['nomor' => 'C003', 'nama' => 'Kurniawan', 'saldo' => 2500000];

    $ar_account = [$pemilik1, $pemilik2, $pemilik3];
?>
<br>
<table class="table" border="1" width="80%">
    <thead>
        <tr>
            <th>No</th>
            <th>No.Account</th>
            <th>Pemilik</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($ar_account as $ac) {
            echo '<tr><td>'.$no.'</td>';
            echo '<td>'.$ac['nomor'].'</td>';
            echo '<td>'.$ac['nama'].'</td>';
            $ha = $ac['saldo'];
            echo '<td>'.number_format($ha).'</td><tr>';
            $no++;
        }
        ?>
    </tbody>
</table>