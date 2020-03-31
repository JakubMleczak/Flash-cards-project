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

<body class="max">
  <section id="fiszka">

    <div id="wyloguj" class="icon">
      <a href="index.php"><img src="img/log.png" alt="wyloguj"></a>
    </div>
    <div id="back" class="icon">
      <a href="jezyk.php"><img src="img/cofnij.png" alt="back"></a>
    </div>


  <main>
    <?php
    require_once("skrypty/conn.php");
    $id = $_GET['nazwa'];

      $sql4= "SELECT * FROM `fiszki` WHERE id_zestawu='$id'";
      $result3 = mysqli_query($conn,$sql4);
$tablica1= [];
$tablica2= [];

    while ($opt = mysqli_fetch_assoc($result3)) {

  array_push($tablica1,$opt['tekst']);
  array_push($tablica2,$opt['tlumaczenie']);
}
echo '<br>';


print "<script type=\"text/javascript\">";
print "var zmienna=new Array()\n";
print "var zmienna2=new Array()\n";
foreach($tablica1 as $tym) print "zmienna.push('$tym')\n";
foreach($tablica2 as $tym) print "zmienna2.push('$tym')\n";

//print "alert(zmienna)";
print "</script>";





     ?>
    <div id="nastepne">

<img src="img/lewo.png" alt="">
    </div>
    <div id="poprzednie">
<img src="img/prawo.png" alt="">

    </div>
    <div id="tlumaczenie" onclick="zmianab()">
      <p>tlumaczenie </p>
     </div>
    <div id="nazwa" onclick="zmiana()">
      <p>fiszka</p>
    </div>


  </main>

  </section>
  <script>
var nazwa = document.getElementById("tlumaczenie");
var nazwa2 = document.getElementById("nazwa");
var nastepne = document.getElementById("poprzednie");
var poprzednie = document.getElementById("nastepne");
nazwa.textContent =  zmienna[0];
nazwa2.textContent = zmienna2[0];
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
var licznik = 0;
poprzednie.addEventListener("click", ()=>
{
if(licznik>0 )
{
  licznik--;
  nazwa.textContent =  zmienna[licznik];
  nazwa2.textContent = zmienna2[licznik];
  zmiana();

}
else   alert("Musisz isc w prawo");

})
nastepne.addEventListener("click", ()=>
{
if(licznik<zmienna.length-1)
{

  licznik++;
  nazwa.textContent =  zmienna[licznik];
  nazwa2.textContent = zmienna2[licznik];
  zmiana();
}else   alert("To koniec zestawu");

})
  </script>
</body>
</html>
