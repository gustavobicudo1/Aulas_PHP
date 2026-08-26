<?php
$nome = "Gustavo";
$nivel_acesso = 1;

if($nivel_acesso == 1){
    echo "Usuário comum";
} elseif($nivel_acesso == 2){
    echo "Intermediario";
}
    elseif($nivel_acesso == 3 ){
    echo "ADMIN";
}
    else{
    echo "inválido";
}
?>