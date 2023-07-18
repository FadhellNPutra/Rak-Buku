<script src="js\jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('html').append('<head></head>');
        $('head').append("<link rel='stylesheet' href='template/css/sb-admin-2.min.css'>");
        $('p').addClass('h3 mb-0 text-gray-800')
    });
</script>
<?php 
    session_start();
    include "library/config.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_array($query);
    $jml = mysqli_num_rows($query);

    if($jml > 0){
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header('Location: index.php');
    }else{
        echo "<p>Gagal Login!</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }
?>