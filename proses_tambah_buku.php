<?php
if($_POST){
    $nama_buku=$_POST['nama_buku'];
    $pengarang=$_POST['pengarang'];
    $deskripsi=$_POST['deskripsi'];

    if(empty($nama_buku)){
        echo "<script>alert('Nama Buku  tidak boleh kosong');location.href='tambah_buku.php';</script>";

    } elseif(empty($pengarang)){
        echo "<script>alert('Pengarang tidak boleh kosong');location.href='tambah_buku.php';</script>"; 

    } elseif(empty($deskripsi)){
        echo "<script>alert('Deskripsi tidak boleh kosong');location.href='tambah_buku.php';</script>"; 
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (nama_buku, pengarang, deskripsi) value ('".$nama_buku."', '".$pengarang."','".$deskripsi."')") or die(mysqli_error($conn)); 
        if($insert){
            echo "<script>alert('Sukses menambahkan data buku');location.href='buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?><!-- punya adel -->