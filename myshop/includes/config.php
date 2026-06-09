<?php
try {
    $connexion = new PDO("msql:host=localhost; dbname=SHOP; charset=utf8", "root", "");
} catch (PDOException $e) {
    echo "Erreur de connnexion :" . $e->getMessage();
}