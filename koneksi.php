<?php
$host = "localhost";
$user = "root";
$pass = "Rameyza19.";       
$dbname = "pemweb_film";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
