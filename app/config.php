<?php

$host = "127.0.0.1";
$dbname = "student_notes_tracker";
$username = "root";
$password = "NewStrongPassword123!";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}