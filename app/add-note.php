<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Note</title>
</head>
<body>
    <h1>Add Student Note</h1>

    <p><a href="index.php">Back to Notes</a></p>

    <form action="save-note.php" method="POST">
        <div>
            <label for="student_name">Student Name</label><br>
            <input type="text" id="student_name" name="student_name" required>
        </div>

        <br>

        <div>
            <label for="note_text">Note Text</label><br>
            <textarea id="note_text" name="note_text" rows="5" cols="40" required></textarea>
        </div>

        <br>

        <div>
            <label for="status">Status</label><br>
            <select id="status" name="status" required>
                <option value="">Select status</option>
                <option value="Active">Active</option>
                <option value="Pending">Pending</option>
                <option value="Reviewed">Reviewed</option>
            </select>
        </div>

        <br>

        <button type="submit">Save Note</button>
    </form>
</body>
</html>