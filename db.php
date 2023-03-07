<?php
$db = new mysqli("sql12.freesqldatabase.com","sql12603555","j8K25uEaiY","sql12603555");

if ($db->connect_errno) {
  echo "Failed to connect to MySQL: " . $db->connect_error;
  exit();
}
?>