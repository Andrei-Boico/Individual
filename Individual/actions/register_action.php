<?php
include "../config/db.php";

$username = htmlspecialchars($_POST['username']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username,email,password) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([$username,$email,$password]);
    header("Location: ../public/login.php");
} catch(PDOException $e) {
    echo "Registration failed!";
}
?>