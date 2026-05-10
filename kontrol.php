<?php

$email = $_POST["email"];
$password = $_POST["password"];

$dogruEmail = "serhaturuc80@gmail.com";
$dogruSifre = "serhaturuc";

if($email == $dogruEmail && $password == $dogruSifre) {

    echo "<h1>Hoşgeldin Serhat</h1>";

}
else {

    echo "<h1>Hatalı giriş</h1>";

}

?>

