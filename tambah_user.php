<script src="js\jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('html').append('<head></head>');
        $('head').append("<link rel='stylesheet' href='template/css/sb-admin-2.min.css'>");
        $('p').addClass('h3 mb-0 text-gray-800')
    });
</script>

<?php
    include "library/config.php";

    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $query = mysqli_query($con, "INSERT INTO users SET nama = '$nama', username = '$username', email = '$email', password = '$password'");

    if($query){
        echo "<p>Anda Berhasil Mendaftar! Silahkan Login</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }else{
        echo "<p>Gagal Mendaftar! Silahkan Coba Lagi!</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }
?>