<?php

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: add-note.php");
    exit;
}

$studentName = trim($_POST["student_name"] ?? "");
$noteText = trim($_POST["note_text"] ?? "");
$status = trim($_POST["status"] ?? "");

if ($studentName === "" || $noteText === "" || $status === "") {
    die("All fields are required.");
}

$stmt = $conn->prepare(
    "INSERT INTO student_notes (student_name, note_text, status) VALUES (?, ?, ?)"
);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sss", $studentName, $noteText, $status);

if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}

$stmt->close();
$conn->close();

header("Location: index.php");
exit;