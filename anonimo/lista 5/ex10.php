<?php
$peso = 72;
$altura = 1.80;

if($peso/($altura^2) >= 19&&$peso/($altura^2)<=24){
    echo"Você esta no peso ideal";
}
elseif($peso/($altura^2) >= 25&&$peso/($altura^2)<=29){
    echo"Sobre peso";
}
elseif($peso/($altura^2) >= 30&&$peso/($altura^2)<=34){
    echo"Obesidade 1";
}
elseif($peso/($altura^2) >= 34&&$peso/($altura^2)<=39){
    echo"Obesidade 2";
}
else{
    echo"Obesidade 3";
}