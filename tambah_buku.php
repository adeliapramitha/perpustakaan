<?php
    include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Data Buku</h3>
    <form action="proses_tambah_buku.php" method="post">

        Nama Buku :
        <input type="text" name="nama_buku" value="" class="form-control">
        Pengarang :
        <input type="text" name="pengarang" value="" class="form-control">
        Deskripsi :
        <textarea name="deskripsi" class="form-control" rows="4"></textarea><br>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"><!-- punya adel -->
    </form>

   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>