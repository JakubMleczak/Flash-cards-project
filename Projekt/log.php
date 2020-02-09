<?php

if(isset($_POST['username'])&&isset($_POST['password']))
{
  require_once('conn.php');
  $username=$_POST['username'];
  $pass=$_POST['password'];

  $username=strip_tags(mysqli_real_escape_string($conn,trim($username)));
  $pass=strip_tags(mysqli_real_escape_string($conn,trim($pass)));

  $query = "SELECT * FROM `uzytkownicy` WHERE `login`='$username'";
  $wynik= mysqli_query($conn,$query);
  if(mysqli_num_rows($wynik)>0)
  {
    $row = mysqli_fetch_array($wynik);
    $password= $row['haslo'];
echo "haslo to <br>";
echo $password;
echo "<br>haslo od usera <br>";

   //$szyfr= password_hash($pass,PASSWORD_ARGON2ID);
      $szyfr= $pass;
      echo $szyfr;
      if(password_verify($szyfr,$password))
      {
echo "Sukces";

      }else
        {
            echo " <br> Dupa";
        }
    }
}
 ?>
