<?php 
    if(!defined('INDEX')) die("");
    $foto = mysqli_query($con, "SELECT * FROM buku");
    $data = mysqli_fetch_array($foto);
    if(file_exists("images/$data[foto_cover]"))
unlink("images/$data[foto_cover]");
    $query = mysqli_query($con, "DELETE FROM buku WHERE id_buku = '$_GET[id]'");
    if($query){
        echo "Data Berhasil Dihapus!";
        echo "<meta http-equiv='refresh' content='1; url=?hal=buku'>";
    }else{
        echo "Gagal Menghapus Data";
        echo mysqli_error($con);
    }
?>