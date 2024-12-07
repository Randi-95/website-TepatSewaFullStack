<?php
$host = 'localhost';
$dbname = 'sewa_mobil';
$username = 'root'; 
$password = '';


$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];

   
    $sql = "INSERT INTO chat_history (name, message, created_at) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $message]);

   
    header("Location: chat.php?status=success");
    exit();
}
?>
