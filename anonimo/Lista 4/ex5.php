<?php
echo "bem vindo ao GustavãoBET <br>";
echo "acerte o numero de 0 a 20 e ganhe o trplo<br>";
$aposta = 10;
$numero_escolhido = 5;
if($numero_escolhido == $aposta) {
    echo "parabens você ganhou ";
} else {
    echo "infelizmente você perdeu o numero era ", $numero_escolhido + 1;
}
?>