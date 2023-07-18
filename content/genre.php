<?php 
    if(!defined('INDEX')) die("");
?>
<hr class="sidebar-divider my-0">
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
    <h3 class="h3 mb-0 text-gray-800">Genre</h3>
</div>
<a href="?hal=genre_tambah" class="btn btn-primary mb-3">Tambah Genre</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Genre</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = mysqli_query($con, "SELECT * FROM genre ORDER BY id_genre DESC");
            $no = 0;
            while($data = mysqli_fetch_array($query)){
                $no++;
        ?>
        <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $data['jenis_genre']?></td>
            <td>
                <a href="?hal=genre_edit&id_genre=<?= $data['id_genre']?>" class="btn btn-warning">Edit</a>
                <a href="?hal=genre_hapus&id_genre=<?= $data['id_genre']?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php 
            };
        ?>
    </tbody>
</table>