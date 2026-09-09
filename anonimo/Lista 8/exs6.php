<?php
$a=0;
for($i = 1; $i<=50;$i++){
    if($i%3==0){
        echo"multiplo de 3: $i <br>";
        $a=$a+1;
    }
}
echo "O total de multiplos de 3 de 1 até ",$i-1," é de $a";