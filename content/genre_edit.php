<?php 
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "SELECT * FROM genre WHERE id_genre = '$_GET[id_genre]'");
    $data = mysqli_fetch_array($query);
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
    <h3 class="h3 mb-0 text-gray-800">Edit Genre</h3>
</div>
<form action="?hal=genre_update" method="post">
    <div class="form-group hidden">
        <input type="hidden" class="form-control" id="genre" placeholder="Masukan Genre" name="id_genre" value="<?= $data['id_genre']?>">
    </div>
    <div class="form-group">
        <label for="genre">Masukkan Genre</label>
        <input type="text" class="form-control" id="genre" placeholder="Masukan Genre" name="jenis_genre" value="<?= $data['jenis_genre']?>">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>