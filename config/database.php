<?php
$env = parse_ini_file(__DIR__ . '/../.env');

if(!$env) {
    die("Gagal membaca file .env. Pastikan file tersebut ada dan formatnya benar.");
}

$host = $env['DB_HOST'];
$dbname = $env['DB_NAME'];
$user = $env['DB_USER'];
$pass = $env['DB_PASS'];

$connection = mysqli_connect($host, $user, $pass, $dbname);

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
