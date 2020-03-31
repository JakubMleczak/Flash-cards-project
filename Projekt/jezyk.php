<?php
  require_once("skrypty/check.php");
  require_once("skrypty/conn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fisznet</title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
  <section id="jezyk2">

    <div id="wyloguj" class="icon">
      <a href="skrypty/logout.php"><img src="img/log.png" alt="wyloguj"></a>

    </div>

   <main id="jezyk">
    <?php
    $sql4= "SELECT * FROM jezyki";
    $result3 = mysqli_query($conn,$sql4);

    while ($opt = mysqli_fetch_assoc($result3)) {
echo<<<HTML
<div>
  <a href="zestawy.php?jezyk=$opt[id_jezyk]">  <p>$opt[jezyk]</p></a>
</div>
HTML;

    }
     ?>



   <img src="img/ludkolo.png" alt="kolo" id="obrazek">
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
