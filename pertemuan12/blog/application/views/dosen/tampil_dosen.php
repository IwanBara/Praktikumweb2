<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    </head>
<body>
    <div class="col-md-12">
    <h3>Dosen</h3>
    <table border='1' class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($dosen as $dns) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?= $dns -> nama ?></td>
                <td><?= $dns -> gender ?></td>
                <td><?= $dns -> tmp_lahir ?></td>
                <td><?= $dns -> tgl_lahir ?></td>
                <td><?= $dns -> nidn ?> </td>
                <td><?= $dns -> pendidikan ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>