<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_perpustakaan";


$db_perpustakaan =  mysqli_connect($server, $user, $password, $database);


if(!$db_perpustakaan){
    echo "Database No Connent";
}
?>