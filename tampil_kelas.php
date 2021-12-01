<?php
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Data Jurusan</h3>
    <a href="tambah_kelas.php" class="btn btn-success">Tambah Data</a>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>JURUSAN</th><th>ANGKATAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $qry_jurusan=mysqli_query($conn,"select * from jurusan");
                $no=0;
                while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
                    $no++;?>
                    <tr>
                    <td><?=$no?></td> <td><?=$data_jurusan['nama_jurusan']?></td> <td><?=$data_jurusan['angkatan']?></td>

                    <td><a href="hapus_kelas.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td><!-- punya adel -->
                    </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>