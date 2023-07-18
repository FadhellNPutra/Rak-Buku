<?php 
    if(!defined('INDEX')) die("");
?>
<hr class="sidebar-divider my-0">
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
    <h3 class="h3 mb-0 text-gray-800">Tambah Genre</h3>
</div>
<form action="?hal=genre_insert" method="post">
    <div class="form-group">
        <label for="genre">Masukkan Genre</label>
        <input type="text" class="form-control" id="genre" placeholder="Masukan Genre" name="jenis_genre">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>