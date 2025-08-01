<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/tambah-edit-pegawai.css">
    <title>Edit Data Pegawai</title>
</head>
    <body>
        <div class="container">
            <a href="/DATA_PEGAWAI_APP/public" class="btn-back">← Kembali</a>        
            <h1>Edit Data Pegawai</h1>

            <form method="POST" action="proses-update-pegawai" class="form-pegawai">
                <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">

                <div>
                    <label>Nama</label>
                    <input type="text" name="nama" required value="<?= $pegawai['nama']; ?>">
                </div>

                <div>
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" required>
                        <option value="Laki-laki" <?= $pegawai['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="Perempuan" <?= $pegawai['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>

                <div>
                    <label>Alamat</label>
                    <textarea name="alamat" required><?= $pegawai['alamat']; ?></textarea>
                </div>

                <div>
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" required value="<?= $pegawai['tempat_lahir']; ?>">
                </div>

                <div>
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" required value="<?= $pegawai['tanggal_lahir']; ?>">
                </div>

                <div>
                    <label>Nomor Seluler</label>
                    <input type="text" name="nomor_seluler" required value="<?= $pegawai['nomor_seluler']; ?>">
                </div>

                <div>
                    <label>Status Perkawinan</label>
                    <select name="status_perkawinan" required>
                        <option value="Belum Menikah" <?= $pegawai['status_perkawinan'] == 'Belum Menikah' ? 'selected' : ''; ?>>Belum Menikah</option>
                        <option value="Sudah" <?= $pegawai['status_perkawinan'] == 'Sudah' ? 'selected' : ''; ?>>Sudah Menikah</option>
                    </select>
                </div>

                <button type="submit">Ubah</button>
            </form>
        </div>
    </body>
</html>

