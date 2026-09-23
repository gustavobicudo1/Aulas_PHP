<?php
$name=$_POST["nome"];
$numero=$_POST["num"];
$horas=$numero*365;
$anos=$horas/24/365;
echo"Nome: $name <br>";
echo"Você passa $horas por ano no celular<br>";
echo"Isso corresponde a $anos meses da sua vida";