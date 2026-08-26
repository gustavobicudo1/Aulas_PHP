<?php
$usuario = "gmailaleatorio@gmail.com";
$senha = "Minhasenha";
$ativo = true;

echo "Login - Facebook<br>";

if ($senha == "Minhasenha" && $usuario == "gmailaleatorio@gmail.com" && $ativo == true) {
    echo "Login realizado com sucesso.";
} 
else {
    echo "Credenciais inválidas.";
}
?>