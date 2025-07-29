<?php
include('connection.php');

$keyword = $_GET['search'];

$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE nama LIKE '%$keyword%'");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>

<html>
    <head>
        <title>Search Output</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>List Data Pegawai</h1>

            <form method="GET" action="search.php">
                <input type="text" name="search" placeholder="Cari pegawai...">
                <button type="submit">Cari</button>
            </form>
           
            <a href="add.php">Tambah Data</a> 
            <a href="index.php">kembali</a>
            <br><br>
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
                    <?php foreach ($result as $index => $pegawai): ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><a href="profile.php?id=<?= $pegawai['id']; ?>"><?= $pegawai['nama']; ?></a></td>
                            <td><?= $pegawai['jenis_kelamin']; ?></td>
                            <td><?= $pegawai['alamat']; ?></td>
                            <td>
                                <a href="edit.php?id=<?=$pegawai['id']?>">Edit</a>
                                |
                                <a href="delete.php?id=<?=$pegawai['id']?>">Hapus</a>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>