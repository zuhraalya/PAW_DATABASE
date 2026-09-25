<?php
include "koneksi.php";

$id = $_GET['id'] ?? null;
if (!$id) { header("Location: index.php"); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    $stmt = $conn->prepare("UPDATE film SET judul=?, genre=?, rating=?, review=? WHERE id=?");
    $stmt->bind_param("ssisi", $judul, $genre, $rating, $review, $id);
    $stmt->execute();

    header("Location: index.php");
    exit;
}

$stmt = $conn->prepare("SELECT * FROM film WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

if (!$data) { header("Location: index.php"); exit; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Review Film</title>
</head>
<body>
    <h2>Edit Review Film</h2>

    <form method="POST">
        <label>Judul Film:</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']) ?>" required><br><br>

        <label>Genre:</label><br>
        <input type="text" name="genre" value="<?= htmlspecialchars($data['genre']) ?>" required><br><br>

        <label>Rating (1-10):</label><br>
        <input type="number" name="rating" min="1" max="10" value="<?= htmlspecialchars($data['rating']) ?>" required><br><br>

        <label>Review:</label><br>
        <textarea name="review" required><?= htmlspecialchars($data['review']) ?></textarea><br><br>

        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
