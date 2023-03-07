<?php 
session_start();

include 'db.php';
 
$name = $_POST['name'];
$password = $_POST['password'];
 
$login = mysqli_query($db,"select * from akun where name='$name' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
 
		$_SESSION['name'] = $name;
		$_SESSION['level'] = "admin";
		header("location:admin-dashboard.php");
 
	}else if($data['level']=="user"){
		$_SESSION['name'] = $name;
		$_SESSION['level'] = "user";
		header("location:user-dashboard.php");
 
    }else{
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>