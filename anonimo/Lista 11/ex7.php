<?php
$nome =$_POST["nome"];
$numero =$_POST["num"];
$servico =$_POST["service"];
echo"$nome<br>";
echo"$numero<br>";
if($servico == "corte"){
    echo"$servico<br>";
}
elseif($servico =="barba"){
    echo"$servico<br>";
}
else{
    echo"serviço não encontrado";
}