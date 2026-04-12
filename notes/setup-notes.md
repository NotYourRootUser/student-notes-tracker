# Database Setup Notes

## DB Name
`student_notes_tracker`

## Table Name
`student_notes`

## How I ran the SQL
I used MySQL Workbench after setting up a local connection to my MySQL server.

Steps:
1. Opened MySQL Workbench
2. Created a local connection using:
   - Host: `127.0.0.1`
   - Port: `3306`
   - User: `root`
3. Opened a new SQL tab
4. Pasted my schema from `sql/schema.sql`
5. Ran the SQL using the execute button
6. Refreshed the Schemas panel
7. Confirmed that:
   - database `student_notes_tracker` was created
   - table `student_notes` was created

## SQL Used
```sql
CREATE DATABASE IF NOT EXISTS student_notes_tracker;
USE student_notes_tracker;

CREATE TABLE student_notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    note_text TEXT NOT NULL,
    status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); 
```


## Setup Issue / Fix

### Issue
I could not connect in MySQL Workbench at first because I had forgotten the MySQL `root` password.

### Fix
I opened MySQL from the terminal using `sudo mysql`, reset the `root` password, and then used the new password in MySQL Workbench.

After that, the connection worked and I was able to run the schema successfully.

## Verification
I confirmed the setup by checking MySQL Workbench and seeing:
- database: `student_notes_tracker`
- table: `student_notes`