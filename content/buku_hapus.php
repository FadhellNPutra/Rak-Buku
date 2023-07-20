<?php 
    if(!defined('INDEX')) die("");

    if(file_exists("images/$_GET[foto_cover]")){
        unlink("images/$_GET[foto_cover]");
    }
    $query = mysqli_query($con, "DELETE FROM buku WHERE id_buku = $_GET[id_buku]");
    if($query){
        echo "Data Berhasil Dihapus!";
        echo "<meta http-equiv='refresh' content='1; url=?hal=buku'>";
    }else{
        echo "Gagal Menghapus Data";
        echo mysqli_error($con);
    }
?>