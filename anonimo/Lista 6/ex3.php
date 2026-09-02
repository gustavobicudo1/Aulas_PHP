<?php
echo "-------caixa eletronico---------";
echo"<br>";
echo"1-consulta saldo, 2- fazer saque, 3-deposito, 4-sair";
echo"<br>";
$opcao = 3;
switch($opcao){
    case 1;
    echo"seu saldo é 600";
    break;
    case 2;
    echo"qual valor do saque";
    break;
    case 3;
    echo"Digite o valor do deposito:";
    break;
    case 4;
    echo"Saida";
    break;
    default:
    echo"opção invalida";
    break;
}