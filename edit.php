<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM buku WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Edit Buku</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="<?= $data['judul'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" value="<?= $data['penulis'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>" class="form-control">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun_terbit'];

        mysqli_query($conn, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun' WHERE id=$id");
        echo "<script>window.location='index.php';</script>";
    }
    ?>
</body>
</html>