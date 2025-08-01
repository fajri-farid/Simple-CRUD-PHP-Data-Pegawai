<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/tambah-pegawai.css">
    <title>Tambah Data Pegawai</title>
</head>
<body>
    <div class="container">
        <a href="/DATA_PEGAWAI_APP/public" class="btn-back">← Kembali</a>        
        <h1 id="heading">Tambah Data Pegawai</h1>

        <form method="POST" action="proses-insert-pegawai" class="form-pegawai">
            <div>
                <label>Nama</label>
                <input type="text" name="nama" required>
            </div>

            <div>
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div>
                <label>Alamat</label>
                <textarea name="alamat" required></textarea>
            </div>

            <div>
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" required>
            </div>

            <div>
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" required>
            </div>

            <div>
                <label>Nomor Seluler</label>
                <input type="text" name="nomor_seluler" required>
            </div>

            <div>
                <label>Status Perkawinan</label>
                <select name="status_perkawinan" required>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Sudah">Sudah Menikah</option>
                </select>
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>