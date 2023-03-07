<?php

include("db.php");

$id = $_GET['id'];
$sql = "DELETE FROM akun WHERE id = $id";

if ($db->query($sql)){
    header("location:admin-dashboard.php");
}else

?>