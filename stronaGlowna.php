<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/ProjektGraficznie.css">
  </head>
  <body>
<div class="WitajGraczu">
<center><h1> WITAJ GRACZU! </h1></center>
</div>

<div class="naglowekkuponu">
<h2>Obstaw kupon z najgorętszych zdarzeń dzisiejszego dnia! </h2>
</div>

<div class="kupon">
  <form action="kupon.php" method="post">
<h2>Piłka nożna: </h2>
    <h3>Wisła Kraków vs KS Cracovia</h3>
    Wisła(2.16)<input type="radio" value="wisla" name="wislacracovia"/>
    Cracovia(3.75)<input type="radio" value="cracovia" name="wislacracovia"/>

    <h3>Real Madryt vs FC Barcelona</h3>
    Real(2.10)<input type="radio" value="real" name="realbarcelona"/>
    Barcelona(3.20)<input type="radio" value="barcelona" name="realbarcelona"/>

    <h3>Watford vs KS Liverpool</h3>
    Watford(6.5)<input type="radio" value="watford" name="watfordliverpool"/>
    Liverpool(1.45)<input type="radio" value="liverpool" name="watfordliverpool"/>

    <h3>Paderborn vs FC Borussia Dortmund</h3>
    Paderborn(9.2)<input type="radio" value="paderborn" name="paderborndortmund"/>
    Dortmund(1.36)<input type="radio" value="dortmund" name="paderborndortmund"/>

    <h3>Napoli vs FC Inter Mediolan</h3>
    Napoli(2.6)<input type="radio" value="napoli" name="napolimediolan"/>
    Inter(2.7)<input type="radio" value="inter" name="napolimediolan"/>
    <br />
    <h2>TWOJA STAWKA: </h2>
    <input type="number" name="stawka">
    <br/>
    <input  type="submit" name="obstaw" value="Obstaw!">
    </form>

</div>



  <?php

    $uzytkownik="kuba";
    $haslo="ziolkowski";
    session_start();

    if(isset($_SESSION['uzytkownik'])){
echo "<br><a href='logout.php'><input type=button value=Wyloguj
name =logout></a>";
}
else {
  if($_POST ['uzytkownik']==$uzytkownik && $_POST['haslo']==$haslo){
    $_SESSION ['uzytkownik']=$uzytkownik;
    echo "<script> location.href='stronaGlowna.php'</script>";
  }
  else {
    echo "<script> alert('Niepoprawne dane logowania!')</script>";
    echo "<script> location.href='index.php'</script>";
  }
  }

  ?>

</body>
</html>
