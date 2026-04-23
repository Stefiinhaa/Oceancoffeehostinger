<?php
// DADOS DA HOSTINGER
// Na Hostinger, o servidor quase sempre é "localhost"
$servidor = "localhost"; 

// Coloque o Nome de Usuário que a Hostinger gerou (incluindo o prefixo u123456789_)
$usuario = "u404015900_stefani";       

// Coloque a senha que você inventou no Passo 2
$senha = "STECLEri123";      

// Coloque o Nome do Banco que a Hostinger gerou (incluindo o prefixo u123456789_)
$banco = "u404015900_oceancoffee"; 

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Definir o charset para evitar problemas com acentuação (opcional, mas recomendado)
$conexao->set_charset("utf8mb4");

if ($conexao->connect_error) {
    die("Falha na conexao: " . $conexao->connect_error);
}
?>