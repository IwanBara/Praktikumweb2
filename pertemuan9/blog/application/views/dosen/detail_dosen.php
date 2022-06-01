<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <h3>Detail Dosen</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $pengajar -> id ?></td>
                <td><?php echo $pengajar -> nama ?> </td>
                <td><?php echo $pengajar -> gender ?></td>
                <td><?php echo $pengajar -> tmp_lahir ?></td>
                <td><?php echo $pengajar -> tgl_lahir ?></td>
                <td><?php echo $pengajar -> nidn ?></td>
                <td><?php echo $pengajar -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>