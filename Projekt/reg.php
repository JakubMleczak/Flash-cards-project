<?php

if(!empty($_POST['login'])&&!empty($_POST['haslo'])&&!empty($_POST['status']))
{
  require_once('conn.php');
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$status=$_POST['status'];


}
else
{
  echo "dupa";
 header('Location: nowy.php');
echo "dupa1";
}
 ?>
