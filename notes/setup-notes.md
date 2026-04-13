# Database Setup Notes

## DB Name
`student_notes_tracker`

## Table Name
`student_notes`

## Database Setup Process
I used MySQL Workbench after setting up a local connection to my local MySQL server.

### Steps
1. Opened MySQL Workbench
2. Created a local connection using:
   - Host: `127.0.0.1`
   - Port: `3306`
   - User: `root`
3. Opened a new SQL tab
4. Ran the schema from `sql/schema.sql`
5. Refreshed the Schemas panel
6. Confirmed that:
   - database `student_notes_tracker` was created
   - table `student_notes` was created

## Setup Issues and Fixes

### Issue 1
I could not connect in MySQL Workbench at first because I had forgotten the MySQL `root` password.

### Fix 1
I opened MySQL from the terminal using `sudo mysql`, reset the `root` password, and then used the new password in MySQL Workbench.

After that, the connection worked and I was able to run the schema successfully.

### Issue 2
When I first tried to load the PHP test page through Apache, I got a `403 Forbidden` error.

### Fix 2
The project path and Apache access setup caused permission issues. I adjusted the project location and Apache serving setup so the app could be loaded correctly through `http://localhost/...`.

## Verification

### Database Verification
I confirmed the database setup in MySQL Workbench by seeing:
- database: `student_notes_tracker`
- table: `student_notes`

### Apache and PHP Verification
I confirmed the Apache + PHP layer by loading the project through `http://localhost/...` and seeing the PHP test page render successfully.