<?php
$nota1 = 5;
$nota2 = 5;
if($nota1+$nota2/2>= 7){
    echo "Aprovado";
} elseif($nota1+$nota2/2 >= 5 && $nota1+$nota2/2 <7){
    echo"Em recuperação";
} else{
    echo"Reprovado";
}
?>