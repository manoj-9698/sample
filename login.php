<?php
// login.php

// Start session to store user login
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "project_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form inputs
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check credentials
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Check login success
if ($result->num_rows == 1) {
    $_SESSION['username'] = $username;
    header("Location: main.html"); // Redirect to main page
    exit();
} else {
    echo "<script>alert('Invalid username or password'); window.history.back();</script>";
}

$conn->close();
?>
