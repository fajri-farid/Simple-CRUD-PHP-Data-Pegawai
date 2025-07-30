<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
        <div class="container">
            <h1>Data Pegawai</h1>

            <form method="GET" action="search.php">
                <input type="text" name="search" placeholder="Cari pegawai...">
                <button type="submit">Cari</button>
            </form>

            <br><a href="tambah-pegawai">Tambah Data</a><br><br>

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
                            <td>
                                <a href="edit-pegawai&id=<?= $pegawai['id'];?>">Edit</a> |
                                <a href="proses-delete-pegawai&id=<?= $pegawai['id']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>