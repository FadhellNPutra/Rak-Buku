<?php 
    if(!defined('INDEX')) die("");

    $cover = $_FILES['foto_cover']['name'];
    $lokasi = $_FILES['foto_cover']['tmp_name'];
    $tipe = $_FILES['foto_cover']['type'];
    $ukuran = $_FILES['foto_cover']['size'];

    $error = "";
    if($foto == ""){
        $query = mysqli_query($con, "UPDATE buku SET nama_buku = '$_POST[nama_buku]',
        sinopsis = '$_POST[sinopsis]', tahun_terbit = '$_POST[tahun_terbit]', jumlah_buku = '$_POST[jumlah_buku]', id_genre = '$_POST[genre]' WHERE id_buku = '$_GET[id_buku]'");
    }else{
        if($tipe != "image/jpeg" && $tipe != "image/jpg" && $tipe != "image/png"){
            $error = "File tidak mendukung!";
        }else if($ukuran > 3000000){
            echo $ukuran;
            echo "File terlalu Besar!";
        }else {
            $query = mysqli_query($con, "SELECT * FROM buku WHERE id_buku = '$_POST[id_buku]'");
            $data = mysqli_fetch_array($query);
            if(file_exists("images/$data[foto_cover]"))
            unlink("images/$data[foto_cover]");

            move_uploaded_file($lokasi, "images/".$foto);
            $query = mysqli_query($con, "INSERT INTO buku SET nama_buku = '$_POST[nama_buku]',
            sinopsis = '$_POST[sinopsis]', tahun_terbit = '$_POST[tahun_terbit]', jumlah_buku = '$_POST[jumlah_buku]', id_genre = '$_POST[genre]', foto_cover = '$cover' WHERE id_buku = '$_GET[id_buku]'");
        }
    }

    if($error != ""){
        echo $error;
        echo "<meta http-equiv='refresh' content='1; url=?hal=buku'>";
    }else{
        echo "Tidak dapat menyimpan data!";
        echo mysqli_error($con);
    };
?>