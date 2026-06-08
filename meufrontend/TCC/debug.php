<?php

$host = "aws-0-us-east-1.pooler.supabase.com";
$port = "6543";
$dbname = "postgres";

$usuarios = [
    "postgres",
    "postgres.glvdrydonrsmguxvtuoh"
];

$senha = "SUA_SENHA";

foreach ($usuarios as $user) {

    echo "<h2>Testando: $user</h2>";

    try {

        $pdo = new PDO(
            "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require",
            $user,
            $senha
        );

        echo "CONECTOU";

    } catch (PDOException $e) {

        echo $e->getMessage();
    }

    echo "<hr>";
}