<?php

$host = "db.glvdrydonrsmguxvtuoh.supabase.co";
$port = "5432";
$dbname = "postgres";

$user = "postgres";
$password = "SuperMario@202021";

try {

    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require",
        $user,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "CONECTOU";

} catch (PDOException $e) {

    die($e->getMessage());
}