<?php
function idade($idade_us){
    if($idade_us < 16){
        return "não pode votar";
    }
    elseif($idade_us <18){
        return "voto opcional";
    }
    else{
        return "voto obrigatorio";
    }
}
echo idade(17);