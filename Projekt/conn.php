<?php

$servername = "localhost";
$username = "root";
$password = "";
$name = "projekt";
$name = "projekt";


$conn = mysqli_connect($servername, $username, $password, $name);
mysqli_set_charset($conn, 'utf8');


if (!$conn) {
  echo "Dupa";
    die("Connection failed: " .mysqli_connect_error());
}

?>
