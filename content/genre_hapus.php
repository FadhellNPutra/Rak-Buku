<?php 
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "DELETE FROM genre WHERE id_genre = '$_GET[id_genre]'");

    if($query){
        echo 'Genre Dihapus!';
        echo "<meta http-equiv='refresh' content='1; url=?hal=genre'";
    }else{
        echo 'Gagal Menghapus Genre';
        echo mysqli_error($con);
    }
?>