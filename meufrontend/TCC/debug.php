<?php

try {

    $pdo = new PDO(
        "pgsql:host=aws-0-us-east-1.pooler.supabase.com;port=6543;dbname=postgres;sslmode=require",
        "postgres.glvdrydonrsmguxvtuoh",
        "SUA_SENHA",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::PGSQL_ATTR_DISABLE_PREPARES => true
        ]
    );

    echo "CONECTOU";

} catch (PDOException $e) {

    die($e->getMessage());
}