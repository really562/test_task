<?php

$servername = "localhost";
$username = "";
$password = "";
            try {
                $pdo = new PDO("mysql:host=$servername; dbname=u1325633_default; charset=utf8mb4", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch (PDOException $e) {
                echo "Connection failed: ".$e->getMessage();
            }

?>