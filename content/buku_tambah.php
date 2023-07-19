<?php 
    if(!defined('INDEX')) die("");
?>
<hr class="sidebar-divider my-0">
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
    <h3 class="h3 mb-0 text-gray-800">Tambah Buku</h3>
</div>

<form action="?hal=buku_insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="namaBuku">Nama Buku</label>
        <input type="text" class="form-control" id="namaBuku" placeholder="Nama Buku" name="nama_buku">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <select class="custom-select">
            <option selected>-- Pilih Genre --</option>
            <?php 
                $query = mysqli_query($con, "SELECT * FROM genre");
                while($j = mysqli_fetch_array($query)){
                echo "<option value='$j[jenis_genre]'>$j[jenis_genre]</option>";
                };
            ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="sinopsis">Sinopsis</label>
        <textarea class="form-control" id="sinopsis" rows="3" placeholder="Sinopsis" name="sinopsis"></textarea>
    </div>
    <div class="form-group">
        <label for="terbitan">Terbitan</label>
        <input type="date" class="form-control" id="terbitan" placeholder="Tahun Terbit" name="tahun_terbit">
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah Buku</label>
        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Buku" name="jumlah_buku">
    </div>
    <div class="form-group">
        <label for="cover">Cover</label>
        <input type="file" class="form-control" id="cover" name="foto_cover">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
</form>
