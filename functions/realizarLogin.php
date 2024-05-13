<?php

require_once('../functions/connect.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT `usuario_id`, `usuario_senha` FROM `usuarios` WHERE `usuario_login` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $senha_hash = $row['usuario_senha'];

        if (password_verify($senha, $senha_hash)) {
            $_SESSION['usuario_id'] = $row['usuario_id'];
            echo 0; // BEM SUCEDIDO
        } else {
            echo 2; // SENHA INCORRETA
        }
    } else {
        echo 1; // LOGIN NAO EXISTE
    }
}
