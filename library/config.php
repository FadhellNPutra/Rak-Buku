<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "rak-buku";

    $con = mysqli_connect($host, $user, $pass, $db);

    if(mysqli_connect_errno()){
        echo 'Gagal terhubung ke database: '. mysqli_connect_error();
    }
?>