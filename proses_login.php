<?php
	if($_POST) //tangkap inputan dii form login
	$username=$_POST['username'];
	$password=$_POST['password'];
	if (empty($username)){
		echo "<script>alert('Username tidak boleh kosong'); location.href='login.php';</script>";
	}elseif (empty($password)){
		echo "<script>alert('Password tidak boleh kosong'); location.href='login.php';</script>";
	} else {
		include "koneksi.php";
		$qry_login=mysqli_query($conn, "select * from mahasiswa where username = '".$username."' and password = '".$password."'");
		if(mysqli_num_rows($qry_login)>0){
			$dt_login=mysqli_fetch_array($qry_login);
		session_start();
		$_SESSION['id_mhs']=$dt_login['id_mhs'];//menampilkan siapa yang login
		$_SESSION['nama']=$dt_login['nama'];
		$_SESSION['status_login']=true;
		header("location:home.php");
	} else{
		echo "<script>alert('Username dan Password tidak sesuai'); location.href='login.php';</script>";
	}
}
?>