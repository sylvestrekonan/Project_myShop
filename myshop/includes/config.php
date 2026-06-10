<?php
try {
    $connexion = new PDO("mysql:host=localhost; dbname=SHOP; charset=utf8", "root", "SKY");
    echo "connexion reussie";
} catch (PDOException $e) {
    echo "Erreur de connnexion :" . $e->getMessage();
}