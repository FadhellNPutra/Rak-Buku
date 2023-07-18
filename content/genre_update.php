<?php 
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "UPDATE genre SET jenis_genre = '$_POST[jenis_genre]' WHERE id_genre = '$_POST[id_genre]'");

    if($query){
        echo 'Genre berhasil disimpan!';
        echo "<meta http-equiv='refresh' content='1; url=?hal=genre'>";
    }else{
        echo 'Gagal menyimpan';
        echo mysqli_error($con);
    }
?>