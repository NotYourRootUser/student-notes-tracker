<?php
require_once "config.php";

$sql = "SELECT id, student_name, note_text, status, created_at FROM student_notes ORDER BY created_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Notes</title>
</head>
<body>
    <h1>Student Notes</h1>

    <p><a href="add-note.php">Add a New Note</a></p>

    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <hr>
            <h2><?php echo htmlspecialchars($row["student_name"]); ?></h2>
            <p><strong>Note:</strong> <?php echo nl2br(htmlspecialchars($row["note_text"])); ?></p>
            <p><strong>Status:</strong> <?php echo htmlspecialchars($row["status"]); ?></p>
            <p><strong>Created:</strong> <?php echo htmlspecialchars($row["created_at"]); ?></p>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No notes found.</p>
    <?php endif; ?>

</body>
</html>

<?php
$conn->close();
?>