<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Pegawai</title>
    <link rel="stylesheet" href="../../style.css">
</head>
    <body>
        <div class="container">
            <h3><?= $pegawai['nama']?></h3>
            <a href="/DATA_PEGAWAI_APP/public">Kembali</a>
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

