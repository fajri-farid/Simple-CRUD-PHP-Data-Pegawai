<?php
require_once __DIR__ . '/../config/database.php';

/**
 * Mengambil semua data pegawai dari database.
 *
 * Fungsi ini membaca seluruh entri dari tabel `pegawai`.
 * Karena tidak menerima input eksternal (seperti ID), maka relatif aman
 * dari serangan SQL Injection.
 *
 * @return array Daftar seluruh pegawai dalam bentuk array asosiatif.
 */
function getAllPegawai() {
    global $connection;

    // Jalankan query untuk mengambil semua data dari tabel pegawai
    $query = mysqli_query($connection, "SELECT * FROM pegawai");

    // Kembalikan hasil sebagai array asosiatif
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}


/**
 * Mengambil data pegawai berdasarkan ID.
 *
 * Fungsi ini menggunakan prepared statement untuk mencegah SQL injection.
 *
 * @param int $id ID pegawai yang ingin diambil datanya.
 * @return array|null Data pegawai dalam bentuk associative array jika ditemukan, atau null jika tidak ada.
 */
function getPegawaiById($id) {
    global $connection;

    // Siapkan query SQL dengan placeholder untuk parameter
    $stmt = mysqli_prepare($connection, "SELECT * FROM pegawai WHERE id = ?");

    // Bind parameter ke statement (i berarti integer)
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Eksekusi statement
    mysqli_stmt_execute($stmt);

    // Ambil hasil query
    $result = mysqli_stmt_get_result($stmt);

    // Kembalikan hasil sebagai associative array
    return mysqli_fetch_assoc($result);
}

/**
 * Menyisipkan data pegawai baru ke dalam database.
 *
 * Fungsi ini menerima array data pegawai, lalu menyisipkannya
 * ke dalam tabel `pegawai` menggunakan prepared statement
 * untuk meningkatkan keamanan dari serangan SQL Injection.
 *
 * @param array $data Data pegawai yang akan disimpan. Contoh:
 *  [
 *    'nama' => 'Andi',
 *    'jenis_kelamin' => 'Laki-laki',
 *    'alamat' => 'Jl. Merpati No. 10',
 *    'tempat_lahir' => 'Makassar',
 *    'tanggal_lahir' => '2000-01-01',
 *    'nomor_seluler' => '08123456789',
 *    'status_perkawinan' => 'Belum Menikah'
 *  ]
 *
 */
function insertPegawai($data) {
    global $connection;

    $stmt = mysqli_prepare($connection, 
        "INSERT INTO pegawai (nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, nomor_seluler, status_perkawinan)
         VALUES (?, ?, ?, ?, ?, ?, ?)");

    mysqli_stmt_bind_param($stmt, "sssssss",
        $data['nama'],
        $data['jenis_kelamin'],
        $data['alamat'],
        $data['tempat_lahir'],
        $data['tanggal_lahir'],
        $data['nomor_seluler'],
        $data['status_perkawinan']
    );

    return mysqli_stmt_execute($stmt);
}

function getPegawaiByAndWithId($id) {
    global $connection;

    $stmt = mysqli_prepare($connection, "SELECT * FROM pegawai WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}

function updatePegawai($data) {
    global $connection;

    $stmt = mysqli_prepare($connection,
        "UPDATE pegawai SET 
         nama = ?, 
         jenis_kelamin = ?, 
         alamat = ?, 
         tempat_lahir = ?, 
         tanggal_lahir = ?, 
         nomor_seluler = ?, 
         status_perkawinan = ? 
         WHERE id = ?"
    );

    mysqli_stmt_bind_param($stmt, "sssssssi",
        $data['nama'],
        $data['jenis_kelamin'],
        $data['alamat'],
        $data['tempat_lahir'],
        $data['tanggal_lahir'],
        $data['nomor_seluler'],
        $data['status_perkawinan'],
        $data['id']
    );

    return mysqli_stmt_execute($stmt);
}

function deletePegawai($id) {
    global $connection;

    $stmt = mysqli_prepare($connection, "DELETE FROM pegawai WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    return mysqli_stmt_execute($stmt);
}