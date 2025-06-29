<?php
require_once '../../koneksi.php';

$data = "SELECT * FROM buku";
$sql = mysqli_query($db_perpustakaan, $data);

$bukuDipilih = $_GET['judul'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page | Pinjam</title>
    <!-- CSS Bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- END Boostrap -->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Peminjaman</a>
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


    <!-- FORM Peminjaman -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <!-- Judul Form -->
                <figure>
                    <blockquote class="blockquote">
                        <h4>Peminjaman Page</h4>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Masukan Akun Kamu</cite>
                    </figcaption>
                </figure>

                <form role="form" action="../../controller/prosess_form_peminjaman.php" method="post">
                    <!-- Inputan name -->
                    <div class="mb-3">
                        <label for="form_name" class="form-label">Nama</label>
                        <!-- <input type="text" class="form-control" name="nama"> -->
                        <select name="id_siswa" class="form-control">
                            <?php
                            require_once '../../koneksi.php';
                            // Menampilkan Query
                            $result = mysqli_query($db_perpustakaan, "SELECT * FROM siswa");

                            while ($siswa = mysqli_fetch_assoc($result)) {
                                echo "<option value='{$siswa['id_siswa']}'>{$siswa['nama']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <!-- end Inputan name -->


                    <!-- Inputan buku -->
                     <div class="mb-3">
                        <label for="buku" class="form-label">Buku</label>
                        <select class="form-control" name="id_buku">
                            <?php while($buku = mysqli_fetch_assoc($sql)) : ?>
                                <option value="<?= $buku['judul']?>" <?= $buku['judul'] == $bukuDipilih ? 'selected' : '' ?>>
                                    <?php echo $buku['judul']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                     </div>
                    <!-- End Inputan Buku -->

                    <!-- Inputan date starh -->
                    <div class="mb-3">
                        <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="tanggal_pinjam">
                    </div>
                    <!-- END Inputan date starh -->

                    <!-- Inputan date end -->
                    <div class="mb-3">
                        <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tanggal_kembali">
                    </div>
                    <!-- END Inputan date end -->

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- END FORM Peminjaman -->


    <!-- JS Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- END Bootrap -->
</body>

</html>