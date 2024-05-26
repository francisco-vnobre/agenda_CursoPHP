<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "agenda";

    try {
        $conn = new pdo("mysql:host=$host;dbname=$db", $user, $pass);

        // Ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        // Erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }

