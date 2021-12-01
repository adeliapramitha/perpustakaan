<?php
	include "header.php"
?>
<h2 align="center">Daftar Buku</h2>
<a href="tambah_buku.php" class="btn btn-primary">Tambah Buku</a>

<div class="row">
	<?php
		include "koneksi.php";
		$qry_buku=mysqli_query($conn, "select * from buku");
		while ($dt_buku=mysqli_fetch_array($qry_buku)) {
	?>
	<div class="col-md-3">
		<div class="card">
			<img src="foto/3.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
				<p class="card-text"><?=substr($dt_buku['pengarang'], 0,20)?></p
				<p class="card-text"><?=substr($dt_buku['deskripsi'], 0,60)?></p> <!--0,20 panjang deskripsi -->
				<a href="pinjam_buku.php?id_buku=<?$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
			</div>
		</div>
	</div>
		<?php
	}
		?>
</div>
<?php
	include "footer.php";
?>