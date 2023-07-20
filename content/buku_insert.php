<?php 
    if(!defined('INDEX')) die("");

    $cover = $_FILES['foto_cover']['name'];
    $lokasi = $_FILES['foto_cover']['tmp_name'];
    $tipe = $_FILES['foto_cover']['type'];
    $ukuran = $_FILES['foto_cover']['size'];

    $error = "";
    if($cover == ""){
        $query = mysqli_query($con, "INSERT INTO buku SET nama_buku = '$_POST[nama_buku]',
        sinopsis = '$_POST[sinopsis]', tahun_terbit = '$_POST[tahun_terbit]', jumlah_buku = '$_POST[jumlah_buku]', id_genre = '$_POST[genre]'");
    }else{
        if($tipe != "image/jpeg" && $tipe != "image/jpg" && $tipe != "image/png"){
            $error = "File tidak mendukung!";
        }else if($ukuran > 1000000){
            echo $ukuran;
            echo "File terlalu Besar!";
        }else {
            move_uploaded_file($lokasi, "images/".$cover);
            $query = mysqli_query($con, "INSERT INTO buku SET nama_buku = '$_POST[nama_buku]', sinopsis = '$_POST[sinopsis]', tahun_terbit = '$_POST[tahun_terbit]', jumlah_buku = '$_POST[jumlah_buku]', foto_cover = '$cover', id_genre = '$_POST[genre]'");
        }
    }

    if($error != ""){
        echo $error;
        echo "<meta http-equiv='refresh' content='2; url=?hal=buku_tambah'>";
    }else if($query){
        echo "Buku berhasil disimpan";
        echo "<meta http-equiv='refresh' content='1; url=?hal=buku'>";
    }else{
        echo "Tidak dapat menyimpan data!";
        echo mysqli_error($con);
    };
?>