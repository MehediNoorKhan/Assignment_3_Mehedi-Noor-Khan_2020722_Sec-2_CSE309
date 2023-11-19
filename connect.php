<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'assignment3');
if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into ContactUs(name,email,contact,message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $contact, $message);
    $stmt->execute();
    echo "Information providing has been successful";
    $stmt->close();
    $conn->close();
}
?>