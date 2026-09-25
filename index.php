<?php
include "koneksi.php";

// proses tambah data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    $stmt = $conn->prepare("INSERT INTO film (judul, genre, rating, review) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $judul, $genre, $rating, $review);
    $stmt->execute();

    header("Location: index.php");
    exit;
}

$result = $conn->query("SELECT * FROM film ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Review Film</title>
</head>
<body>
    <h2>Daftar Review Film</h2>

    <h3>Tambah Film</h3>
    <form method="POST">
        <label>Judul Film:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Genre:</label><br>
        <input type="text" name="genre" required><br><br>

        <label>Rating (1-10):</label><br>
        <input type="number" name="rating" min="1" max="10" required><br><br>

        <label>Review:</label><br>
        <textarea name="review" required></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <hr>

    <h3>Daftar Film</h3>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul Film</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Review</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['judul']) ?></td>
            <td><?= htmlspecialchars($row['genre']) ?></td>
            <td><?= htmlspecialchars($row['rating']) ?></td>
            <td><?= htmlspecialchars($row['review']) ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
        <?php if ($result->num_rows === 0): ?>
        <tr><td colspan="6">Belum ada data</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
