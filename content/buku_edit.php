<?php 
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "SELECT * FROM buku WHERE id_buku = '$_GET[id_buku]'");
    $data = mysqli_fetch_array($query);
?>
<hr class="sidebar-divider my-0">
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
    <h3 class="h3 mb-0 text-gray-800">Edit Buku</h3>
</div>

<form action="?hal=buku_insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="namaBuku">Nama Buku</label>
        <input type="text" class="form-control" id="namaBuku" placeholder="Nama Buku" name="nama_buku" value="<?= $data['nama_buku'] ?>">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <select class="custom-select">
            <option selected>-- Pilih Genre --</option>
            <?php 
                $queryGenre = mysqli_query($con, "SELECT * FROM genre");
                while($j = mysqli_fetch_array($queryGenre)){
                echo "<option value='$j[jenis_genre]'";
                    if($j['jenis_genre'] == $data['jenis_genre']){
                        echo "selected";
                    };
                    echo ">$j[jenis_genre]</option>";
                };
            ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="sinopsis">Sinopsis</label>
        <textarea class="form-control" id="sinopsis" rows="3" placeholder="Sinopsis" name="sinopsis"><?= $data['sinopsis'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="terbitan">Terbitan</label>
        <input type="date" class="form-control" id="terbitan" placeholder="Tahun Terbit" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>">
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah Buku</label>
        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Buku" name="jumlah_buku" value="<?= $data['jumlah_buku'] ?>">
    </div>
    <div class="form-group">
        <label for="cover">Cover</label>
        <input type="file" class="form-control" id="cover" name="foto_cover">
        <img src="images/<?= $data['foto_cover'] ?>" alt="cover">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
</form>
