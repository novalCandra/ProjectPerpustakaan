<?php
    require_once '../koneksi.php';

    if(isset($_GET['id_details_peminjaman'])){

         $id_details_peminjamann =  $_GET['id_details_peminjaman'];

        //  penghapusan query 
        $query = "DELETE FROM detail_peminjaman WHERE id_details_peminjaman='$id_details_peminjamann'";   
        $sql = mysqli_query($db_perpustakaan, $query);

        // kondisi jika data berhasil di hapus
        if($sql){
            header('location: ../views/components/details_peminjaman.php');
            // echo "Data Berhasil Di remove";
        }else{
            echo "Data Gagal  Di remove";
        }
    }
?>