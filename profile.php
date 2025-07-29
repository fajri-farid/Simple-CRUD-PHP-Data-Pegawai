<?php
include('connection.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = '$id'");
$pegawai = mysqli_fetch_assoc($query);

// echo "<pre>";
// print_r($pegawai);
// echo "</pre>";
?>

<html>
    <head>
        <title>Profile Pegawai</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h3><?= $pegawai['nama']?></h3>
            <a href="index.php">Kembali</a>
            <br><br>

            <label>Jenis Kelamin :</label>
            <label"><?= $pegawai['jenis_kelamin']; ?></label>
            <br>

            <label>Alamat :</label>
            <label"><?= $pegawai['alamat']; ?></label>
            <br>

            <label>Tempat Lahir :</label>
            <label"><?= $pegawai['tempat_lahir']; ?></label>
            <br>

            <label>Tanggal Lahir :</label>
            <label"><?= date("d/m/Y", strtotime($pegawai['tanggal_lahir'])); ?></label>
            <br>

            <label>Nomor Seluler :</label>
            <label"><?= $pegawai['nomor_seluler']; ?></label>
            <br>

            <label>Status Perkawinan :</label>
            <label"><?= $pegawai['status_perkawinan']; ?></label>
            <br>
        </div>
    </body>
</html>