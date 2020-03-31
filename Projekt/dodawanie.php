<?php
  require_once("skrypty/check.php");
    require_once("skrypty/conn.php");
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
      <a href="skrypty/logout.php"><img src="img/log.png" alt="wyloguj"></a>
    </div>
    <div id="back" class="icon">
      <a href="admin.php"><img src="img/cofnij.png" alt="back"></a>
    </div>




  <main id="dodawanie">

    <form method="post" action="skrypty/addfiszka.php">
    <p class="maly">Nazwa zestawu</p>
    <input type="text" name="nazwazestawu" placeholder="Nazwa zestawu">
    <p>Jezyk</p>

    <?php
    $sql4= "SELECT * FROM jezyki";
    $result3 = mysqli_query($conn,$sql4);
echo<<<SEL
<select name="jezykopt">

SEL;
    while ($opt = mysqli_fetch_assoc($result3)) {
$val = $opt['id_jezyk'];
$in = $opt['jezyk'];


echo<<<HTML
<option value="$val">$in</option>
HTML;


}
echo<<<ZAMEK
</select>
ZAMEK;
?>
</br></br>
<div class="add" id="dodawanie2">
  <div class="linia">
    <span class="nazwa">Pojecie</span>
      <input class="pojecie" type="text" name="jezyk3[]" placeholder="Pojecie">
      <span class="nazwa">Tłumaczenie</span>
      <input class="pojecie" type="text" name="jezyk2[]" placeholder="Tłumaczenie">
  </div>
  <div class="linia">
    <span class="nazwa">Pojecie</span>
      <input class="pojecie" type="text" name="jezyk3[]" placeholder="Pojecie">
      <span class="nazwa">Tłumaczenie</span>
      <input class="pojecie" type="text" name="jezyk2[]" placeholder="Tłumaczenie">
  </div>  <div class="linia">
      <span class="nazwa">Pojecie</span>
        <input class="pojecie" type="text" name="jezyk3[]" placeholder="Pojecie">
        <span class="nazwa">Tłumaczenie</span>
        <input class="pojecie" type="text" name="jezyk2[]" placeholder="Tłumaczenie">
    </div>  <div class="linia">
        <span class="nazwa">Pojecie</span>
          <input class="pojecie" type="text" name="jezyk3[]" placeholder="Pojecie">
          <span class="nazwa">Tłumaczenie</span>
          <input class="pojecie" type="text" name="jezyk2[]" placeholder="Tłumaczenie">
      </div>  <div class="linia">
          <span class="nazwa">Pojecie</span>
            <input class="pojecie" type="text" name="jezyk3[]" placeholder="Pojecie">
            <span class="nazwa">Tłumaczenie</span>
            <input class="pojecie" type="text" name="jezyk2[]" placeholder="Tłumaczenie">
        </div>


</div>
<button type="button" id="butt" name="Dodaj">Więcej</button>
</br>
      </br>

    <input type="submit" name="submit" value="Zapis" id="dodawanko">

    </form>

  </main>

  </section>

<script type="text/javascript">
var przycisk = document.getElementById("butt");
var div = document.getElementById("dodawanie2")
przycisk.addEventListener("click", ()=>
{
div.innerHTML += `<div class='linia'>
    <span class='nazwa'>Pojecie</span>
      <input class="pojecie" type="text" name="jezyk3[]" placeholder="Pojecie">
      <span class="nazwa">Tłumaczenie</span>
      <input class="pojecie" type="text" name="jezyk2[]" placeholder="Tłumaczenie">
  </div>`;



})
</script>
</body>
</html>

<!-- -wyswietlanie fiszek
-wyloguj
- dodawanie zestawu(nauczyciel)
-edytowanie zestawu(nauczyciel)
-dodawanie i usuwanie userow
-->
