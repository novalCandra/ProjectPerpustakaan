<?php
require_once '../../koneksi.php';

$query = "SELECT * FROM detail_peminjaman";
$sql = mysqli_query($db_perpustakaan, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detaitls Peminjaman</title>
    <!-- CSS Bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- END Boostrap -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Details Peminjaman</a>
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
                        <a class="nav-link" href="#">Details Peminjaman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end Navbar -->


    <!-- TABLE Details Peminjaman -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                        <th>#</th>
                        <th>ID Details</th>
                        <th>ID Peminjaman</th>
                        <th>ID Siswa</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['id_details_peminjaman']; ?></td>
                            <td><?= $data['id_peminjaman']; ?></td>
                            <td><?= $data['id_siswa']; ?></td>


                            <td>
                                <a href="../../controller/proses_delete_peminjaman.php?id_details_peminjaman=<?php echo $data['id_details_peminjaman']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-pencil">Delete</span></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Table Details -->



    <!-- JS Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- END Bootrap -->
</body>

</html>