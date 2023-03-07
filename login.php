<?php 
include("db.php");
$query = mysqli_query($db,"SELECT * FROM akun");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>	
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<center>Username dan Password tidak sesuai !</center>";
		}
	}
	?>
	<form action=" koneksi-login.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="reset.php">lupa akun</a></td>
			</tr>
		</table>
	</form>
</body>
</html>