<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'tambah-pegawai':
        require_once __DIR__ . '/../views/pegawai/tambah-pegawai.php';
        break;

    case 'proses-insert-pegawai':
        require_once __DIR__ . '/../config/database.php';
        require_once __DIR__ . '/../actions/pegawai.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama' => $_POST['nama'],
                'jenis_kelamin' => $_POST['jenis_kelamin'],
                'alamat' => $_POST['alamat'],
                'tempat_lahir' => $_POST['tempat_lahir'],
                'tanggal_lahir' => $_POST['tanggal_lahir'],
                'nomor_seluler' => $_POST['nomor_seluler'],
                'status_perkawinan' => $_POST['status_perkawinan'],
            ];

            $result = insertPegawai($data);

            if ($result) {
                header("Location: index.php?page=home");
                exit;
            } else {
                echo "Gagal menyimpan data.";
            }
        }
        break;

    case 'edit-pegawai':
        require_once __DIR__ . '/../actions/pegawai.php';
        $id = $_GET['id'];
        $pegawai = getPegawaiById($id);

        require_once __DIR__ . '/../views/pegawai/edit-data-pegawai.php';
        break;

    case 'proses-update-pegawai':
        require_once __DIR__ . '/../config/database.php';
        require_once __DIR__ . '/../actions/pegawai.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $_POST['id'],
                'nama' => $_POST['nama'],
                'jenis_kelamin' => $_POST['jenis_kelamin'],
                'alamat' => $_POST['alamat'],
                'tempat_lahir' => $_POST['tempat_lahir'],
                'tanggal_lahir' => $_POST['tanggal_lahir'],
                'nomor_seluler' => $_POST['nomor_seluler'],
                'status_perkawinan' => $_POST['status_perkawinan'],
            ];

            $result = updatePegawai($data);

            if ($result) {
                header("Location: index.php?page=detail-pegawai&id=" . $data['id']);
                exit;
            } else {
                echo "Gagal memperbarui data.<br>";
                echo mysqli_error($connection);
            }
        }
        break;

    case 'detail-pegawai':
        require_once __DIR__ . '/../actions/pegawai.php';
        $pegawai = getPegawaiById($_GET['id']);
        require_once __DIR__ . '/../views/pegawai/detail_pegawai.php';
        break;

    case 'proses-delete-pegawai':
        require_once __DIR__ . '/../actions/pegawai.php';
        $id = $_GET['id'];
        $result = deletePegawai($id);
        if ($result) {
            header("Location: index.php?page=home");
            exit;
        }
        break;

    case 'home':
    default:
        require_once __DIR__ . '/../actions/pegawai.php';
        $pegawaiList = getAllPegawai();
        require_once __DIR__ . '/../views/pegawai/index.php';
        break;
}
