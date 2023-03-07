<?php 
include("db.php");

$id             =$_POST["id"];
$name           = $_POST["name"];
$password       = $_POST["password"];


$sql = 
    "INSERT INTO akun
        (id, name, password)
     VALUES
        ('$id','$name','$password');
    ";

if($db->query($sql) === TRUE){
    echo "berhasil";
}else{
    echo $db->error;
}

?>