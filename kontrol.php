<?php

$email = $_POST["email"];
$password = $_POST["password"];

$dogruEmail = "serhat.uruc@ogr.sakarya.edu.tr";
$dogruSifre = "b251210022";

if($email == $dogruEmail && $password == $dogruSifre) {

    echo "<h1>Hoşgeldin Serhat</h1>";

}
else {

    echo "<h1>Hatalı giriş</h1>";

}

?>
<a href="login.php" class="btn">Giriş Sayfası</a>
