<?php

include("db.php");


if( !isset($_GET['id']) ){
    header('Location: admin-dashboard.php');
}

$id = $_GET['id'];


$sql = "SELECT * FROM akun WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Akun</title>
</head>

<body>
    <header>
        <h3>Formulir Edit</h3>
    </header>

    <form action="koneksi-reset.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="name" placeholder="" value="<?php echo $data['name'] ?>" />
        </p>
        <p>
            <label for="password">Password : </label>
            <input type="text" name="password" placeholder="" value="<?php echo $data['password'] ?>" />
        </p>
        <p>
            <label for="level">Level : </label>
            <select name="level" value="<?php echo $data['level'] ?>">
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
            
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>