<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fisznet</title>
    <link rel="stylesheet" href="style2.css">

</head>

<body class="max">
  <section id="fiszka">

    <div id="wyloguj" class="icon">
      <a href="main.html"><img src="img/log.png" alt="wyloguj"></a>
    </div>
    <div id="back" class="icon">
      <a href="zestawy.html"><img src="img/cofnij.png" alt="back"></a>
    </div>




     <!--
dodawanie div przez php
     -->
  <main>

    <div id="nastepne">

<img src="img/lewo.png" alt="">
    </div>
    <div id="poprzednie">
<img src="img/prawo.png" alt="">
    </div>
    <div id="nazwa" onclick="zmiana()">
      <p>fiszka</p>
    </div>
    <div id="tlumaczenie" onclick="zmianab()">
      <p>tlumaczenie </p>
     </div>

  </main>

  </section>
  <script>
function zmiana()
{
  document.getElementById('nazwa').style.zIndex= "1";
  document.getElementById('tlumaczenie').style.zIndex= "2";

}
function zmianab()
{
  document.getElementById('nazwa').style.zIndex= "2";
  document.getElementById('tlumaczenie').style.zIndex = "1";

}
  </script>
</body>
</html>

<!-- -wyswietlanie fiszek
-wyloguj
- dodawanie zestawu(nauczyciel)
-edytowanie zestawu(nauczyciel)
-dodawanie i usuwanie userow
-->
