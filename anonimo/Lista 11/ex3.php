<?php
$n1 = $_POST["nota1"];
$n2 = $_POST["nota2"];
$n3 = $_POST["nota3"];
$media = ($n1+$n2+$n3)/3;
echo "A média foi: ",$media,"<br>";
if($media<7){
    echo"Reprovado";
}
else{
    echo"Aprovado";
}