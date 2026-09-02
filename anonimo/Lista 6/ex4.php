<?php
echo"----menu----";
echo"<br>";
echo "1-pizza";
echo"<br>";
echo "2-hamburger";
echo"<br>";
echo "3-refrigerante";
echo"<br>";
echo "4-sobremesa";
echo"<br>";
echo "5-sair";
echo"<br>";
$opcao = 2;
switch($opcao){
    case 1;
    echo"Calabresa|4 queijos|Frango e catupiry";
    break;
    case 2;
    echo"X burger| X salada| X tudo";
    break;
    case 3;
    echo"Coca|Fanta|Pepsi";
    break;
    case 4;
    echo"Sorvete|açai|Bolo";
    break;
    case 5;
    echo"Sair";
    break;
}
#EX 5- o switch é uma função mais compactada do if else, geralmente sendo usado em casos onde o programa mostra opções diversas, enquanto os laços de repetição são mais usados em operações matematicas