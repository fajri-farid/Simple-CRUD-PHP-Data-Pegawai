<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/index.css">
    <title>Data Pegawai</title>
</head>
<body>
        <div class="container">
            <h1>Data Pegawai</h1>

            <form method="GET">
                <input type="text" name="search" placeholder="Cari pegawai...">
                <button type="submit">Cari</button>
            </form>

            <div class="tambah-data">
                <a href="tambah-pegawai">
                    <button id="tambah-pegawai-button">
                        Tambah Data
                    </button>
                </a>
            </div>
            

            <table border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pegawaiList as $index => $pegawai): ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td>
                                <a href="detail-pegawai&id=<?= htmlspecialchars($pegawai['id']) ?>">
                                    <?= htmlspecialchars($pegawai['nama']) ?>
                                </a>
                            </td>
                            <td><?= $pegawai['jenis_kelamin']; ?></td>
                            <td><?= $pegawai['alamat']; ?></td>
                            <td id="aksi">
                                <div class="aksi-wrapper">
                                    <a href="edit-pegawai&id=<?= $pegawai['id'];?>" class="btn">Edit</a>
                                    <a href="proses-delete-pegawai&id=<?= $pegawai['id']; ?>" class="btn btn-danger">Hapus</a>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>