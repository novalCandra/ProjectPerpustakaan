<?php
require_once '../../koneksi.php';

$query = "SELECT * FROM buku";
$sql = mysqli_query($db_perpustakaan, $query);

// ubah database menjadi object array
$data_buku = [];
while ($row = mysqli_fetch_assoc($sql)) {
    $data_buku[] = $row;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Buku</title>
    <!-- CSS Bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- END Boostrap -->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Details Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home_page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dipinjam.php">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buku.php">Details Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="details_peminjaman.php">Details Peminjaman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end Navbar -->


    <!-- Header -->
    <figure class="text-center mt-5">
        <blockquote class="blockquote">
            <h3>Details of a Book</h3>
        </blockquote>
        <figcaption class="blockquote-footer">
            <cite title="Source Title">Jaga baik-baik Buku nya seperti menjaga dia
                <br> Meskpipun tidak sesuai dengan harapaan
            </cite>
        </figcaption>
    </figure>
    <!-- end Header -->

    <!-- MAIN -->
    <div class="container md-5 mt-5">
        <div class="d-flex justify-content-center gap-5 flex-wrap">
            <!-- Card  -->
            <?php foreach ($data_buku as $buku) : ?>
                <div class="card" style="width: 16rem;">
                    <img src="../../public/img/<?= $buku['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $buku['judul']; ?></h5>
                        <p class="card-text">Pengarang <?= $buku['pengarang']; ?><br>
                            Tahun <?= $buku['tahun'] ?> <br>
                            Stok Buku <?= $buku['stok'] ?>
                        </p>

                        <!-- button Pinjam -->
                        <a href="dipinjam.php?judul=<?= $buku['judul']?>"><button class="btn btn-primary" type="submit">Pinjam</button></a>
                        <button class="btn btn-danger">Status</button>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- end Card -->
        </div>
        <!-- end Main -->

        <!-- JS Boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <!-- END Bootrap -->
</body>

</html>