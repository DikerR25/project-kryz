<?php include("db.php"); ?>
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
    <header>
        <h3>List Tamu</h3>
    </header>

    <nav>
        <a href="insert-akun.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
 
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM akun";
        $query = mysqli_query($db, $sql);

        

        while($tamu = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$tamu['id']."</td>";
            echo "<td>".$tamu['name']."</td>";
            echo "<td>".$tamu['password']."</td>";
            echo "<td>".$tamu['level']."</td>";

            echo "<td>";
            echo "<a href='reset.php?id=".$tamu['id']."'>Edit</a> | ";
            echo "<a href='delet-akun.php?id=".$tamu['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";

            
        }
        ?>

    </tbody>
    </table>

	<a href="logout.php">LOGOUT</a>

</body>
</html>