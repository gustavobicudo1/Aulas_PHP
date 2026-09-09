<?php
$n = [1,2,3,4,5,6,7,8,9,10];
$maior = $n[0];
foreach($n as $numeros){
    if($numeros > $maior){
        $maior = $numeros;
    }
}
echo "O maior numero é $maior";