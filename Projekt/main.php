<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fisznet</title>
    <link rel="stylesheet" href="style.css">

</head>
<?php
require 'conn.php';
 ?>
<body>
   <div id="tlo">
      <nav>


      </nav>

    <main id="obraz">

    </main>
    <section id="sekcja">
      <div id="zwiniete">
        <div id="zaloguj">
        <p>Zaloguj</p>
        </div>
      </div>
      <div id="rozwiniecie">
            <h1 id="witaj"> Witaj <br>
              w Fisznet</h1>

          </br>
            <form method="post" action="log.php" >
            <p>Login</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Hasło</p>
            <input type="password" name="password" placeholder="Enter Password">
              </br>
            <input type="submit" name="submit" value="Login">

            </form>
      </div>

    </section>

  </div>

    <script>
 document.getElementById('sekcja').addEventListener("mouseover", mouseOver);
  document.getElementById('obraz').addEventListener("mouseover", mouseover2);


  function mouseOver() {

  document.getElementById('obraz').style.width = "70%";
  document.getElementById('sekcja').style.width = "30%";
  document.getElementById('zaloguj').style.display = "none";
      document.getElementById('rozwiniecie').style.display = "block";



  }
  function mouseover2() {
  document.getElementById('obraz').style.width = "80%";
    document.getElementById('sekcja').style.width = "20%";
    document.getElementById('rozwiniecie').style.display = "none";
    document.getElementById('zaloguj').style.display = "block";
  }
  </script>
</body>
</html>
