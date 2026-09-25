<?php
include "koneksi.php";


$id = $_POST['id'] ?? $_GET['id'] ?? null;

if ($id) {
    $stmt = $conn->prepare("DELETE FROM film WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>
