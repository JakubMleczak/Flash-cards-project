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

<body>
  <section>
  </section>
    <div id="wyloguj" class="icon">
      <a href="index.php"><img src="img\log.png" alt="wyloguj"></a>

    </div>
    <div id="back" class="icon">
      <a href="admin.php"><img src="img/cofnij.png" alt="back"></a>
    </div>

   <main id="zestawy">
     <!--
dodawanie div przez php
     -->

     <div>
       <a href="nowy.php"> <p>nowy użytkownik</p></a>

     </div>
     <div>
      <a href="edycja.php"> <p>modyfikuj użytkowników</p></a>
     </div>


   </main>

</body>
</html>

<!-- -wyswietlanie fiszek
-wyloguj
- dodawanie zestawu(nauczyciel)
-edytowanie zestawu(nauczyciel)
-dodawanie i usuwanie userow
-->
