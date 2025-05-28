<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Daftar Buku</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Buku</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM buku");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['penulis'] ?></td>
            <td><?= $row['penerbit'] ?></td>
            <td><?= $row['tahun_terbit'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>