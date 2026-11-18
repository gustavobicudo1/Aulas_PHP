<?php
include "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha=password_hash($senha, PASSWORD_DEFAULT);
$sql= "SELECT * FROM tb_usuarios WHERE email = '$email'";
$resultado =  $conexao->query($sql);
if($resultado->rowCount()>0){
    echo "Email já existente";
}else{
    $sql="INSERT INTO tb_usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')";
    if($conexao->query($sql)){
        echo "Usuario cadastrado<br>";
        echo "<a href='login.html'>IR para o login</a>";
    }
}
?>