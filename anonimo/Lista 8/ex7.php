<?php
$senhacorreta = "1234";
$senha = "1111";
$tentativa = 0;
while($tentativa < 3){
    echo "tentativa ",$tentativa+1," senha incorreta<br>";
    $tentativa = $tentativa + 1; 
}
echo"acesso bloqueado";