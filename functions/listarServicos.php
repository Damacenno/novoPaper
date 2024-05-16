<?php
require_once('connect.php');

$sql = "SELECT * FROM servicos ORDER BY `servico_data`";

    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $stmt->close();

        $output = array(); // Inicializa $output

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $output[] = array(
                    'servico_nome_criador' => $row['servico_nome_criador'],
                    'servico_descricao' => $row['servico_descricao'],
                );
            }
            echo json_encode($output);
        } else {
            echo json_encode(''); // Retorna um array vazio se não houver resultados
        }
    } else {
        echo json_encode(false); // Retorna false se a consulta falhar
    }