<?php 
    if(!defined('INDEX')) die("");
?>

<div class="jumbotron mt-3">
    <div class="container">
        <h1>Selamat Datang di </h1>
        <h1 class="display-4"> Sistem Pengelolaan Rak Buku</h1>
        <p class="lead">Anda login Sebagai Administrator</p>
    </div>
</div>

<?php
    $buku = mysqli_query($con, "SELECT * FROM buku");
    $genre = mysqli_query($con, "SELECT * FROM genre");
    $jml_buku = mysqli_num_rows($buku);
    $jml_genre = mysqli_num_rows($genre);
?>

<div class="container">
    <div class="row mb-3 pb-3">
        <div class="col-sm-6 mb-3">
            <ul class="list-group">
                <li class="list-group-item text-danger">
                    <i class="oi oi-book display-3"></i>
                    <span class="display-3 float-right">
                        <?= $jml_buku; ?>
                    </span>
                </li>
                <li class="list-group-item bg-danger">
                    <a href="?hal=buku" class="nav-link text-white">Data Buku</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row mb-3 pb-3">
        <div class="col-sm-6 mb-3">
            <ul class="list-group">
                <li class="list-group-item text-success">
                    <i class="oi oi-sort-descending display-3"></i>
                    <span class="display-3 float-right">
                        <?= $jml_genre; ?>
                    </span>
                </li>
                <li class="list-group-item bg-success">
                    <a href="?hal=buku" class="nav-link text-white">Data Genre</a>
                </li>
            </ul>
        </div>
    </div>
</div>

