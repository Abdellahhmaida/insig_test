
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Connexion
$conn = new mysqli('localhost', 'root', '', 'insig_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

// Requête préparée
$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, phone, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $subject, $phone, $message);

if ($stmt->execute()) {
    echo "Message envoyé avec succès.";
} else {
    echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
