<?php
$n1 = 10;
$n2= 5;
$operacao = "+";
if($operacao == "+"){
    echo "A some é",$n1 +$n2;
}
elseif($operacao== "-"){
    echo"A subtração é",$n1-$n2;
}
elseif($operacao == "*"){
    echo"O produto é:",$n1*$n2;
}
else{
    echo "O quociente é",$n1/$n2;
}


