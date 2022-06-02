<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <script>
        function hapusmatakuliah(pesan){
                if (confirm(pesan)){
                    return true;
                }else{
                    return false;
                }
            }
    </script>
</head>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
    <div class="col-md-12">
    <h3>Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $mtkl) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?= $mtkl -> nama ?> </td>
                <td><?= $mtkl -> sks ?></td>
                <td><?= $mtkl -> kode ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/matakuliah/edit_matakuliah/$mtkl->id") ?>"
                    class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
                    &nbsp;
                    <a href=<?php echo base_url("index.php/matakuliah/delete_matakuliah/$mtkl->id") ?> 
                    class="btn btn-danger btn-lg active" role="button" aria-pressed="true"
                    onclick=" return hapusmatakuliah('Anda Yakin ingin menghapus matakuliah <?php echo $mtkl->nama ?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href="<?php echo base_url("index.php/matakuliah/form_matakuliah") ?>"
    class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
    </div>
</body>
</html>