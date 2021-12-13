<?php
	include "header.php";
?>
<h2 align="center">History Peminjaman Buku</h2>
<table class="table table-hover table-striped">
	<thead>
		<th>NO</th><th>Tanggal Pinjam</th><th>Tanggal harus Kembali</th><th>Nama Buku</th><th>Status</th><th>Aksi</th>
	</thead>
	<tbody>
		<?php
		include "koneksi.php";
		$qry_history=mysqli_query($conn,"select * from peminjaman_buku order by id_peminjaman_buku desc");
		$no=0;
		while ($dt_history=mysqli_fetch_array($qry_history)) {
			$no++;
			//menampilkan buku yang dipinjam
			$buku_dipinjam="<ol>";
			$qry_buku=mysqli_query($conn, "select * from detail_peminjaman_buku join buku on buku.id_buku=detail_peminjaman_buku.id_buku where id_peminjaman_buku = '".$dt_history['id_peminjaman_buku']."'");
			while ($dt_buku=mysqli_fetch_array($qry_buku)) {
				$buku_dipinjam.="<li>".$dt_buku['nama_buku']."</li>";
			}
			$buku_dipinjam.="</ol>";
			//menampilkan status sudah kembali atau belum
			$qry_cek_kembali=mysqli_query($conn,"select * from pengembalian_buku where id_peminjaman_buku = '".$dt_history['id_peminjaman_buku']."'");
			if(mysqli_num_rows($qry_cek_kembali)>0){
				$dt_kembali=mysqli_fetch_array($qry_cek_kembali);
				$denda="denda Rp. ".$dt_kembali['denda'];
				$status_kembali ="<label class='alert alert-success'>Sudah kembali<br>".$denda."</label>";
				$button_kembali="";
			} else{
				$status_kembali="<label class='alert alert-danger'>Belum Kembali</label>";				//punya adel
				$button_kembali="<a href='pengembalian.php?id=".$dt_history['id_peminjaman_buku']."' class='btn btn-warning' onclick='return confirm(\"Yakin ingin mengembalikan buku?\")'>Kembalikan</a>";
			}
			?>
				<tr>
					<td><?=$no?></td><td><?=$dt_history['tanggal_pinjam']?></td><td><?=$dt_history['tanggal_kembali']?></td><td><?=$buku_dipinjam?></td><td><?=$status_kembali?></td>
					<td><?=$button_kembali?></td>
				</tr>
				<?php
				}
				?>
	</tbody>
</table>
<?php
	include "footer.php";
?>