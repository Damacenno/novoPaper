<?php

require_once('../functions/connect.php');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];


$email = $_POST['email'];

$sql = "INSERT INTO usuarios ( `usuario_login`, `usuario_senha`, `usuario_nome`, `usuario_telefone`, `usuario_email`) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Falha na preparação da declaração: " . $conn->error);
}
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

$stmt->bind_param("sssss",  $login, $senhaCriptografada, $nome, $telefone, $email);

if ($stmt->execute() === TRUE) {
    echo "Novo registro de usuário criado com sucesso!";
} else {
    echo "Erro ao criar o registro de usuário: " . $conn->error;
}

$stmt->close();
$conn->close();
