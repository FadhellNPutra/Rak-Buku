<?php 
    if(!defined('INDEX')) die("");

    $genre = $_POST['jenis_genre'];
    $query = mysqli_query($con, "INSERT INTO genre SET jenis_genre = '$genre'");

    if($query){
        echo "<script>alert('Genre berhasil ditambahkan!');window.location='?hal=genre'</script>";
    }else{
        echo 'Gagal Menyimpan Genre!';
        echo mysqli_error($con);
    }
?>
