<?php
require_once '../koneksi.php';

$id_siswa = $_POST['nama'];
$tanggal_pinjam = $_POST['pinjam'];
$tanggal_kembali = $_POST['kembali'];

// $query = "INSERT INTO buku (id_siswa, pinjam, kembali) VALUES ('$id_siswa', '$tanggal_pinjam', '$tanggal_kembali')";
$query = "INSERT INTO peminjaman (id_siswa, tanggal_pinjam, tanggal_kembali) VALUES ('$id_siswa', '$tanggal_pinjam', '$tanggal_kembali')";
mysqli_query($db_perpustakaan, $query);

header('location: ../views/components/details_peminjaman.php');

?>