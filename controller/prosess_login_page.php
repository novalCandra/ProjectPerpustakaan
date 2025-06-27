<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$password = $_POST['password'];


$query = "SELECT * FROM admin WHERE nama='$nama'AND password='$password'";

$sql = mysqli_query($db_perpustakaan, $query);
// kondisi
// masih ada beberapa yang harus di pebaiki lagi
if(mysqli_num_rows($sql) > 0){
    header('location: ../views/components/home_page.php');
    exit();
}else{
    header('location: ../views/components/login_page.php');
}

?>