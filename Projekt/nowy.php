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
      <a href="main.html"><img src="img/log.png" alt="wyloguj"></a>
    </div>
    <div id="back" class="icon">
      <a href="uzytkownik.html"><img src="img/cofnij.png" alt="back"></a>
    </div>





  <main id="user">

    <form method="post" action="reg.php">
    <p class="maly">Login</p>
    <input type="text" name="login" placeholder="Login">
    <p>Haslo</p>
    <input type="password" name="haslo" placeholder="Haslo">
    <p>Status</p>
    <input type="text" name="status" placeholder="Status">

</br></br>
<div id="rola">
  <p >Rola</p>
  <input type="radio"  name="Rola">Admin <br/>
  <input type="radio"  name="Rola">Uczen <br/>


</div>
<div id="klasa">
  <p >Klasa</p>
  <input type="radio" name="1D" >1D <br/>
  <input type="radio" name="2D" >2D <br/>
  <input type="radio" name="3D" >3D <br/>
  <input type="radio" name="4D" >4D <br/>

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
