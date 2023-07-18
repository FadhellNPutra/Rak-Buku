<?php 
    if(!defined('INDEX')) die("");
?>
<hr class="sidebar-divider my-0">
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
    <h3 class="h3 mb-0 text-gray-800">Buku</h3>
</div>
<a href="?hal=buku_tambah" class="btn btn-primary">Tambah Buku</a>

<?php 
    $query = mysqli_query($con, "SELECT * FROM buku LEFT JOIN genre ON buku.id_genre = genre.id_genre ORDER BY buku.id_buku DESC");
    while($data = mysqli_fetch_array($query)){
?>
<div class='card' style='width: 18rem;'>
            <img class='card-img-top' src='<?=$data['foto']?>' alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'><?=$data['nama_buku']?></h5>
                <p class='card-text'><?=$data['sinopsis']?></p>
                <a href='?hal=buku_detail&?id_buku=<?=$data['id_buku']?>' class='btn btn-info'>Detail</a>
                <a href='?hal=buku_hapus&?id_buku=<?=$data['id_buku']?>' class='btn btn-danger'>Hapus</a>
                <a href='?hal=buku_edit&?id_buku=<?=$data['id_buku']?>' class='btn btn-warning'>Edit</a>
            </div>
        </div>

<?php
    };
?>