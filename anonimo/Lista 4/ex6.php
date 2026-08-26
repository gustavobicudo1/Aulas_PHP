<?php
$idade = 20;
$possuiDeficiencia = true;
$gestante = false;
if($idade >=60 || $possuiDeficiencia == true || $gestante == true){
    echo "Você tem direito a prioridade!";
}
else{
    echo "Sem direito a prioridade!";
}
?>