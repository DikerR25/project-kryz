<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman <?php echo $_SESSION['level']; ?></h1>
 
	<p>Halo <b><?php echo $_SESSION['name']; ?></b>  Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>


    


	<a href="logout.php">LOGOUT</a>

</body>
</html>