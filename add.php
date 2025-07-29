<html>
    <body>
        <div class="container">
            <h1>Tambah Data Pegawai</h1>

            <form method="POST" action="insert.php">
                <label>Nama</label><br>
                <input type="text" name="nama" required>
                <br><br>

                <label>Jenis Kelamin</label><br>
                <select name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <br><br>

                <label>Alamat</label><br>
                <textarea name="alamat" required></textarea>
                <br><br>

                <label>Tempat Lahir</label><br>
                <input type="text" name="tempat_lahir" required>
                <br><br>

                <label>Tanggal Lahir</label><br>
                <input type="date" name="tanggal_lahir" required>
                <br><br>

                <label>Nomor Seluler</label><br>
                <input type="text" name="nomor_seluler" required>
                <br><br>

                <label>Status Perkawinan</label><br>
                <select name="status_perkawinan" required>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Sudah Menikah">Sudah Menikah</option>
                </select>
                <br><br>

                <button type="submit">Simpan</button>
            </form>
            <a href="index.php">kembali</a>
        </div>
    </body>
</html>