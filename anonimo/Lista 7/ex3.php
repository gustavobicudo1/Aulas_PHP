<?php
function desconto($preco, $desc){
    $valor = $preco*$desc/100;
    return $preco - $valor;
}
echo "preço final: R$", desconto(100,10);