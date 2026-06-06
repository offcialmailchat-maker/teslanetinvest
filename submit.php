<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "event_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$ticket_type = $_POST['ticket_type'] ?? '';

$stmt = $conn->prepare("
    INSERT INTO registrations
    (fullname, email, phone, ticket_type)
    VALUES (?, ?, ?, ?)
");

$stmt->bind_param(
    "ssss",
    $fullname,
    $email,
    $phone,
    $ticket_type
);

if ($stmt->execute()) {
    echo "Registration submitted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
