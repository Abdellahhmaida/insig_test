<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insig_db";

// Crée la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}
echo "✅ Connexion réussie à la base de données insig_db";

$conn->close();
?>
