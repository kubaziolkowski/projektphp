<?php
session_start();
if(isset ($_SESSION['uzytkownik'])){
  session_destroy();
  echo "<script> location.href='index.php'</script>";
}
else {
  echo"<script>location.href='index.php'</script>";
}

 ?>
