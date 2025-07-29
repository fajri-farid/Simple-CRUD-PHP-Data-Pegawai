<?php
include('connection.php');

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = '$id'");
$pegawai = mysqli_fetch_assoc($query);
?>

<html>
      <body>
        <div class="container">
            <h1>Edit Data Pegawai</h1>

            <form method="POST" action="update.php">
                <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">

                <label>Nama</label><br>
                <input type="text" name="nama" required value="<?= $pegawai['nama']; ?>">
                <br><br>

                <label>Jenis Kelamin</label><br>
                <select name="jenis_kelamin" required>
                    <option value="Laki-laki" <?= $pegawai['jenis_kelamin'] == 'Laki-Laki' ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $pegawai['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                </select>
                <br><br>

                <label>Alamat</label><br>
                <textarea name="alamat" required><?= $pegawai['alamat']; ?></textarea>
                <br><br>

                <label>Tempat Lahir</label><br>
                <input type="text" name="tempat_lahir" required value="<?= $pegawai['tempat_lahir']; ?>">
                <br><br>

                <label>Tanggal Lahir</label><br>
                <input type="date" name="tanggal_lahir" required value="<?= $pegawai['tanggal_lahir']; ?>">
                <br><br>

                <label>Nomor Seluler</label><br>
                <input type="text" name="nomor_seluler" required value="<?= $pegawai['nomor_seluler']; ?>">
                <br><br>

                <label>Status Perkawinan</label><br>
                <select name="status_perkawinan" required>
                    <option value="Belum Menikah" <?= $pegawai['status_perkawinan'] == 'Belum Menikah' ? 'selected' : ''; ?>>Belum Menikah</option>
                    <option value="Sudah" <?= $pegawai['status_perkawinan'] == 'Sudah' ? 'selected' : ''; ?>>Sudah Menikah</option>
                </select>
                <br><br>

                <button type="submit">Ubah</button>
            </form>
            <a href="index.php">kembali</a>
        </div>
    </body>
</html>