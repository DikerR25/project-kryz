<?php 
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>input berita</title>
</head>
<body>
<form action="koneksi-insert.php" method="post">		
		<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="sumbit" value="sumbit"></td>
			</tr>
		</table>
	</form>
</body>
</html>