<?php
$numero = $_POST["valor"];
$dinheiro = $_POST["dim"];
if($dinheiro<$numero){
    echo"Falta dinheiro";
}
else{
echo"O troco é de: ",$dinheiro-$numero;
}
?>