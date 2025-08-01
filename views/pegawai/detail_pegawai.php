<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/detail-pegawai.css">
    <title>Detail Data Pegawai</title>
</head>
    <body>
        <div class="container">
            <a href="/DATA_PEGAWAI_APP/public">← Kembali</a>

            <div class="profile-header">
                <img 
                    src="/DATA_PEGAWAI_APP/public/assets/detail-pegawai/<?= 
                        strtolower(trim($pegawai['jenis_kelamin'])) === 'laki-laki' 
                            ? 'avatar-pria' 
                            : 'avatar-wanita' 
                    ?>.webp" 
                    alt="Foto Profil Pegawai" 
                    class="profile-img"
                />
                <div class="profile-name">
                    <h3><?= htmlspecialchars($pegawai['nama']) ?></h3>
                </div>
            </div>

            <div class="detail-item">
                <label>Jenis Kelamin:</label>
                <span><?= htmlspecialchars($pegawai['jenis_kelamin']) ?></span>
            </div>

            <div class="detail-item">
                <label>Alamat:</label>
                <span><?= htmlspecialchars($pegawai['alamat']) ?></span>
            </div>

            <div class="detail-item">
                <label>Tempat Lahir:</label>
                <span><?= htmlspecialchars($pegawai['tempat_lahir']) ?></span>
            </div>

            <div class="detail-item">
                <label>Tanggal Lahir:</label>
                <?php
                    $tanggal = date('d', strtotime($pegawai['tanggal_lahir']));
                    $bulanAngka = date('n', strtotime($pegawai['tanggal_lahir']));
                    $tahun = date('Y', strtotime($pegawai['tanggal_lahir']));

                    $namaBulan = [
                        1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
                        4 => 'April', 5 => 'Mei', 6 => 'Juni',
                        7 => 'Juli', 8 => 'Agustus', 9 => 'September',
                        10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                    ];

                    $formattedDate = $tanggal . ' ' . $namaBulan[$bulanAngka] . ' ' . $tahun;
                    ?>
                    <span><?= $formattedDate ?></span>
            </div>

            <div class="detail-item">
                <label>Nomor Seluler:</label>
                <span><?= htmlspecialchars($pegawai['nomor_seluler']) ?></span>
            </div>

            <div class="detail-item">
                <label>Status Perkawinan:</label>
                <span><?= htmlspecialchars($pegawai['status_perkawinan']) ?></span>
            </div>
        </div>
    </body>
</html>

