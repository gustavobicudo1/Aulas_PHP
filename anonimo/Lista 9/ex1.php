<?php
$faturas = [200,300,250,500,600,312];
$a = 0;
echo"resumo das faturas<br>";
foreach($faturas as $i){
    echo"$i <br>";
    $a=$a+$i;
}
echo "O total das faturas é de $a Reais";
