<?php
function venda($produto, $custo, $venda){
$lucro = $venda - $custo;
$mensagem = "lucro baixo";

if ($lucro<= 0){
    $mensagem="prejuizo";
}
elseif($lucro <= 20 && $lucro >0){
    $mensagem = "lucro baixo";
}
else{
    $mensagem = "lucro alto";
}
echo "produto:,$produto<br>";
echo "Lucro:, $lucro<br>";
echo "Analise:, $mensagem<br>";
}
venda("camisa",40,35);