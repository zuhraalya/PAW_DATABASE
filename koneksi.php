<?php
$host = "localhost";
$user = "root";
$pass = "Rameyza19.";       // sesuaikan dengan password MySQL kamu kalau ada
$dbname = "crud_film";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
