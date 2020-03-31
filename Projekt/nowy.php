<?php
  require_once("skrypty/check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fisznet</title>
    <link rel="stylesheet" href="style2.css">

</head>

<body id="bdod">
  <section id="dod">

    <div id="wyloguj" class="icon">
      <a href="index.php"><img src="img/log.png" alt="wyloguj"></a>
    </div>
    <div id="back" class="icon">
      <a href="uzytkownik.php"><img src="img/cofnij.png" alt="back"></a>
    </div>





  <main id="user">

    <form method="post" action="skrypty/add.php">
    <p class="maly">Login</p>
    <input type="text" name="login" placeholder="Login">
    <p>Haslo</p>
    <input type="text" name="haslo" placeholder="Haslo">
    <p>Imie</p>
    <input type="text" name="nazwisko" placeholder="Imie">
    <p>Nazwisko</p>
    <input type="text" name="imie" placeholder="Nazwisko">


</br></br>
<div id="rola">
  <p >Rola</p>
  <select name="nauczyciel">
    <option value="1">Nauczyciel</option>
    <option value="0">Uczen</option>
  </select>


</div>
<div id="klasa">

  <p >Klasa</p>

  <?php
  require_once("skrypty/conn.php");
  $sql4= "SELECT * FROM `klasy`";
  $result7 = mysqli_query($conn,$sql4);
echo<<<SEL
<select name="klasa">

SEL;
  while ($opt = mysqli_fetch_assoc($result7)) {
$val = $opt['id_klasy'];
$in = $opt['symbol_klasy'];


echo<<<HTML
<option value="$val">$in</option>
HTML;


}
echo<<<ZAMEK
</select>
<br>
<br>
ZAMEK;
 ?>
</div>




</br>
      </br>

    <input id="srodek" type="submit" name="submit" value="Zapis">

    </form>

  </main>

  </section>

</body>
</html>

<!-- -wyswietlanie fiszek
-wyloguj
- dodawanie zestawu(nauczyciel)
-edytowanie zestawu(nauczyciel)
-dodawanie i usuwanie userow
-->
