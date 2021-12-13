<?php
if($_POST){
    $nama=$_POST['nama'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin']; 
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_jurusan=$_POST['id_jurusan'];

    if(empty($nama)){
        echo "<script>alert('Nama  tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

    } elseif(empty($tanggal_lahir)){
        echo "<script>alert('Tanggal Lahir tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
    } elseif(empty($jenis_kelamin)){
        echo "<script>alert('Jenis Kelamin tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
    } elseif(empty($id_jurusan)){
        echo "<script>alert('Jurusan tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into mahasiswa (nama, tanggal_lahir, jenis_kelamin, alamat, username, password, id_jurusan) value ('".$nama."','".$tanggal_lahir."','".$jenis_kelamin."','".$alamat."', '".$username."','".$password."', '".$id_jurusan."')") or die(mysqli_error($conn)); 
        if($insert){
            echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='tambah_mahasiswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data mahasiswa');location.href='tambah_mahasiswa.php';</script>";
        }
    }
}
?><!-- punya adel -->