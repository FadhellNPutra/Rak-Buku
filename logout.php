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
    session_destroy();

    echo "<p>Anda Sudah Keluar! Silahkan Login Kembali</p>";
    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
?>