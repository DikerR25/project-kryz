<?php

include("db.php");

if(isset($_POST['simpan'])){

   
    $id         = $_POST['id'];
    $name       = $_POST['name'];
    $password   = $_POST['password'];
    $level      = $_POST['level'];

    $sql = "UPDATE akun SET id ='$id', name='$name', password='$password', level='$level' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
       
        header('Location: admin-dashboard.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>