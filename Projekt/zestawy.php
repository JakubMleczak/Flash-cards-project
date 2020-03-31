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

<body>
  <section>
  </section>
    <div id="wyloguj" class="icon">
      <a href="index.php"><img src="img/log.png" alt="wyloguj"></a>

    </div>
    <div id="back" class="icon">
      <a href="jezyk.php"><img src="img/cofnij.png" alt="back"></a>
    </div>

   <main id="zestawy">
    <?php
  $jezyk = $_GET['jezyk'];
    $sql4= "SELECT * FROM zestawy where id_jezyk='$jezyk'";
    $result3 = mysqli_query($conn,$sql4);

    while ($opt = mysqli_fetch_assoc($result3)) {
  echo<<<HTML
  <div>
  <a href="fiszka.php?nazwa=$opt[id_zestawu]">  <p>$opt[nazwa]</p></a>
  </div>
  HTML;

    }

     ?>




   </main>

</body>
</html>
