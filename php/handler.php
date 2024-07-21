<?php
// handler.php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize input data
    $name = $conn->real_escape_string($_POST['name'] ?? '');
    $email = $conn->real_escape_string($_POST['email'] ?? '');

    if (!empty($name) && !empty($email)) {
        $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);

        if ($stmt->execute()) {
            echo "Record successfully inserted!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Name and Email are required!";
    }
}

$conn->close();
?>
