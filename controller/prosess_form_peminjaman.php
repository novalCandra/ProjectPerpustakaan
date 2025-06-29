<?php
require_once '../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];


$query = "INSERT INTO peminjaman (id_siswa, tanggal_pinjam, tanggal_kembali) VALUES ('$id_siswa', '$tanggal_pinjam', '$tanggal_kembali')";
mysqli_query($db_perpustakaan, $query);

$id_peminjaman = mysqli_insert_id($db_perpustakaan);

$query_detail_peminjaman = "INSERT INTO detail_peminjaman (id_peminjaman, id_siswa) VALUES
('$id_peminjaman', '$id_siswa')";

mysqli_query($db_perpustakaan, $query_detail_peminjaman);

header('location: ../views/components/details_peminjaman.php');
?>