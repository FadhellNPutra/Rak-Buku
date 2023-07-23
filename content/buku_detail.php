<?php 
    if(!defined('INDEX')) die("");

	$query = mysqli_query($con, "SELECT * FROM buku WHERE id_buku = '$_GET[id]'");
	$data = mysqli_fetch_array($query);
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card mt-5">
				<img src="images/<?= $data['foto_cover']?>" class="card-img-top" alt="Foto Cover" />
				<div class="card-body">
					<h5 class="card-title"><?= $data['nama_buku']?></h5>
					<p class="card-text"><?= $data['sinopsis']?></p>
					<ul class="list-group">
						<li class="list-group-item">Tahun Terbit: <span class="font-weight-bold"><?= $data['tahun_terbit']?></span></li>
						<li class="list-group-item">Jumlah Buku: <span class="font-weight-bold"><?= $data['jumlah_buku']?></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
