<?php
include('connection.php');

$id = $_GET['id'] ?? null;

try {
    mysqli_query($connection, "DELETE FROM pegawai WHERE id = $id");
    header("Location: index.php");
} catch (Exception $e) {
    die("Gagal menghapus data di database: " . $e->getMessage());
}