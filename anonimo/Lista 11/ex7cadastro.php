<?php
$email= $_POST["email"];
$senha= $_POST["senha"];
if($email == "gustavao@gmail.com" && $senha=="1234"){
    echo"Acesso permitido";
}else{
    echo"Credenciais incorretas";
}
?>