<?php 
    if(!defined('INDEX')) die("");

    if(file_exists("images/$_GET[foto]")){
        unlink("images/$_GET[foto]");
    }
    $query = mysqli_query($con, "SELECT * FROM buku WHERE id_buku = $_GET[id_buku]");
    if($query){
        echo "Data Berhasil Dihapus!";
        echo "<meta http-equiv='refresh' content='1; url=?hal=buku'>";
    }else{
        echo "Gagal Menghapus Data";
        echo mysqli_error($con);
    }
?>