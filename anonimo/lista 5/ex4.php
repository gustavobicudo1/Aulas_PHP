<?php
$usuario = "gustavopereira";
$idade = 16;
if($idade <13){
    echo"cadastro nao permitido'";
    
}
elseif($idade >=13 && $idade <=16){
    echo"cadastro permitido com auttorização dos pais";
}
else{
    echo"cadastro permitido";
}