<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/ProjektGraficznie.css">
  </head>
  <body>
<div class="gotowyKupon">
<h1> Gratulacje! Twój kupon jest prawie gotowy!</h1>
<hr />
<?php

$mecz1=$_POST['wislacracovia'];
if ($mecz1=='wisla'){
  $kurs1=2.16;
  echo "Dodano do kuponu Wisłę po kursie 2.16";
  }
else {
  $kurs1=3.75;
  echo"Dodano do kuponu Cracovię po kursie 3.75";
  }
echo"<br>";
$mecz2=$_POST['realbarcelona'];
if ($mecz2=='real'){
  $kurs2=2.1;
  echo "Dodano do kuponu Real po kursie 2.10";
  }
else {
  $kurs2=3.20;
  echo"Dodano do kuponu Barcelonę po kursie 3.2";
  }
echo"<br>";
$mecz3=$_POST['watfordliverpool'];
if ($mecz3=='watford'){
  $kurs3=6.5;
  echo "Dodano do kuponu Watford po kursie 6.5";
  }
else {
  $kurs3=1.45;
  echo"Dodano do kuponu Liverpool po kursie 1.45";
  }
echo"<br>";
$mecz4=$_POST['paderborndortmund'];
if ($mecz4=='paderborn'){
  $kurs4=9.2;
  echo "Dodano do kuponu Paderborn po kursie 9.2";
  }
else {
  $kurs4=1.36;
  echo"Dodano do kuponu Dortmund po kursie 1.36";
  }
echo"<br>";
$mecz5=$_POST['napolimediolan'];
if ($mecz5=='napoli'){
  $kurs5=2.6;
  echo "Dodano do kuponu Napoli po kursie 2.6";
  }
else {
  $kurs5=2.7;
  echo"Dodano do kuponu Inter po kursie 2.7";
  }
echo"<br>";
$stawka=$_POST['stawka'];
echo "<hr />";
echo "Twoja stawka: ".$stawka."  PLN";
$lacznyKurs=$kurs1*$kurs2*$kurs3*$kurs4*$kurs5;
echo "<hr />";
echo "Łączny kurs: ".$lacznyKurs;
echo "<hr />";
$wygrana=$stawka*$kurs1*$kurs2*$kurs3*$kurs4*$kurs5;
echo "Potencjalna wygrana: ".$wygrana."  PLN";
echo "<hr />";
echo "Numer kuponu: ".rand();
?>

<h4> Aby zapłacić za kupon, wyślij równowartość swojej stawki na poniższy adres bitcoin, a w tytule przelewu wpisz numer swojego kuponu.
    Nadwyżka zostanie odesłana, zbyt mała kwota również. Wygrany kupon jest odrazu wypłacany na to samo konto, z którego doszedł przelew. Powodzenia!</h4>
    <img src="mojadresbtc.png" />;
</div>
<a href='logout.php'><input type=button value=Wyloguj name =logout></a>
  </body>
</html>
