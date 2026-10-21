<?php
try{
    $conexao = new PDO(
        "mysql:host=127.0.0.1;dbname=estoque_simples;charset=utf8mb4","root","");
}
catch(PDOException $erro){
    die("erro ao conectar");
}
?>