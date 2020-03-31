<?php
  require_once("skrypty/check.php");
  require_once("skrypty/conn.php");
  $sql= "SELECT `login`, `haslo`, `imie`, `nazwisko`, `nauczyciel`, `id_klasa`, `status` FROM `uzytkownicy` LEFT Join statusy ON statusy.ID_statusu=uzytkownicy.ID_statusu";
$wynik = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fisznet</title>
    <link rel="stylesheet" href="style2.css">

</head>

<body id="bdod2">
  <section id="dod" class="big" >

    <div id="wyloguj" class="icon">
      <a href="index.php"><img src="img/log.png" alt="wyloguj"></a>
    </div>
    <div id="back" class="icon">
      <a href="uzytkownik.php"><img src="img/cofnij.png" alt="back"></a>
    </div>



<?php
echo<<<TAB
      <main id="usertab">

      <p class="maly">Użytkownicy</p>
      <table>
      <tr>
        <th>Login</th>
        <th>Nauczyciel</th>
        <th>Status</th>
        <th>Usun</th>
        <th>Modyfikuj</th>
      </tr>
TAB;
  while($row=mysqli_fetch_assoc($wynik))
  {
if($row['nauczyciel']==1)
{
  $nauczyciel="TAK";
}
else $nauczyciel="NIE";

  echo<<<DANE
            <tr>
            <td>$row[login]</td>
            <td>$nauczyciel</td>

            <td>$row[status]</td>
            <td><a href="./skrypty/delete.php?id=$row[login]"><img src="img/kosz.png"></a></td>
          <td><a href="./edycja.php?update_id=$row[login]"><img src="img/zab.png"></a></td>
        </tr>

DANE;
  }
echo<<<ZAMEK
</table>
</main>
ZAMEK;
if(isset($_GET['update_id']))
{
  $id = $_GET['update_id'];
  $sql = "SELECT * FROM `uzytkownicy` WHERE `login`='$id'";
  $result = mysqli_query($conn,$sql);
  $user = mysqli_fetch_assoc($result);
  $age = $user['login'];
  $name = $user['imie'];
  $surname = $user['nazwisko'];
  $nauczyciel=$user['nauczyciel'];
  $id_klasa=$user['id_klasa'];



  echo <<<FORMUPDATE
  <br>
  <br>
  <main id="user">
  <hr><h3>Aktualizuj użytkownika</h3>

  <form action="./skrypty/update.php" method="post">
    <input type="text" name="imie" value="$name"><br><br>
    <input type="text" name="surname" value="$surname"><br><br>


    <input type="hidden" name="id" value="$id">
  Podaj klase
    <select name="klasa">

FORMUPDATE;
$sql3 = "SELECT * FROM klasy";
$result2 = mysqli_query($conn,$sql3);

while ($opt = mysqli_fetch_assoc($result2)) {

echo "<option value=",$opt['id_klasy'],">",$opt['symbol_klasy'],"</option>";

}
echo<<<OPTION2
</select>
<br> <br> <br>Czy nauczyciel
<select name="nauczyciel">

OPTION2;
echo "<option value=1>TAK</option>";
echo "<option value='0'>NIE</option>";


echo<<<OPTION
</select>
<br>
  <input type="submit" name="przycisk" value="Przycisk" >
</form>
</main>
<hr>
OPTION;
}




 ?>



  </section>

</body>
</html>

<!-- -wyswietlanie fiszek
-wyloguj
- dodawanie zestawu(nauczyciel)
-edytowanie zestawu(nauczyciel)
-dodawanie i usuwanie userow
-->
