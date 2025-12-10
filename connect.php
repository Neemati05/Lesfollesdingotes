<?php
$host = 'localhost';
$dbname = 'les_folles'; 
$username = 'root';
$password = ''; // Laragon = mot de passe vide

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>