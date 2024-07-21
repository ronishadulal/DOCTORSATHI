<?php
session_start();
header("Content-Type: application/json");
include("connection.php");

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!$data) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid JSON"]);
        exit;
    }

    $fullName = htmlspecialchars($data["fullName"]);
    $phoneNumber = htmlspecialchars($data["phoneNumber"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $confirmPassword = htmlspecialchars($data["confirmPassword"]);

    $errors = [];

    if (empty($fullName)) {
        $errors[] = "Full name is required";
    }

    if (empty($phoneNumber)) {
        $errors[] = "Phone number is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }

    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode(["errors" => $errors]);
        exit;
    }

    try {
        $sql = "INSERT INTO Users (username, password, email, phoneNumber, role) VALUES (?, ?, ?, ?, 'Patient')";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("ssss", $fullName, $password, $email, $phoneNumber);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            http_response_code(201);
            echo json_encode(["message" => "User registered successfully"]);
        } else {
            throw new Exception("Failed to register user");
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["error" => $e->getMessage()]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "No data submitted"]);
}
?>
