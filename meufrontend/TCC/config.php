<?php
$host = "aws-1-us-west-1.pooler.supabase.com";
$port = "6543";
$dbname = "postgres";
$user = "postgres.glvdrydonrsmguxvtuoh";
$password = "SuperMario@202021";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new PDOException("Falha na conexão: " . $e->getMessage());
}
?>