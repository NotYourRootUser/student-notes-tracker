# Student Notes Tracker - Project Notes

## Why I Kept the Scope Small
I kept the scope small on purpose so I could understand the full app flow end to end instead of only partially finishing a bigger project.

This project was meant to be practice before placement, so the goal was ownership, not complexity.

Keeping it small helped me focus on:
- how Apache serves PHP files
- how PHP handles form data
- how PHP connects to MySQL
- how data gets inserted into the database
- how saved data gets fetched and displayed in the browser

I chose a one-table project so I could learn the fundamentals clearly before adding more complexity later.

---

## Problems I Hit

### 1. MySQL Workbench connection issue
I could not log into MySQL Workbench at first because I had forgotten the MySQL `root` password.

### 2. Apache 403 Forbidden error
When I first tried to open the project through Apache, I got a `403 Forbidden` error.

### 3. File location confusion
At one point I was editing one version of the project while Apache was serving a different copy.

### 4. Blank page confusion
When testing pages like `add-note.php`, I had to work out whether the problem was PHP, file paths, or Apache.

### 5. Syntax recall gaps
I could often understand the SQL and PHP when reading it, but I could not always write it from memory cleanly.

### 6. README formatting issues
The README formatting broke at times because code blocks and markdown sections were mixed incorrectly.

---

## Fixes I Made

### 1. Reset the MySQL root password
I used `sudo mysql` in the terminal, reset the password, and then used that password in MySQL Workbench.

### 2. Fixed the Apache access problem
I found that Apache could not properly serve the project because of the way it was being accessed from my home directory through symlinks and permissions.

I fixed that by moving the project into a location Apache could serve more reliably and then testing it through `localhost`.

### 3. Matched the working files to the served files
I made sure I was editing the same project path that Apache was actually serving.

### 4. Tested each layer separately
Instead of trying to solve everything at once, I tested:
- PHP through Apache
- database schema in MySQL
- form rendering
- save flow
- list page output

### 5. Used prepared statements for inserts
In `save-note.php`, I used a prepared statement instead of building the SQL insert manually.

### 6. Simplified the README formatting
I adjusted the markdown so the project structure and later sections rendered properly.

---

## Decisions I Chose

### 1. One-table database design
I used a single table called `student_notes` because the project only needed one core record type.

### 2. Small file structure
I kept only the files needed for the main flow:
- `index.php`
- `add-note.php`
- `save-note.php`
- `config.php`
- `schema.sql`

### 3. Separate config file
I kept the database connection inside `config.php` so the connection logic stayed reusable and separate from page logic.

### 4. Basic HTML first
I kept the interface simple because the goal was backend flow, not frontend polish.

### 5. Apache-based testing
I tested the project through Apache because I wanted to practice the actual LAMP flow.

### 6. Prepared statement for insert
I used a prepared statement in `save-note.php` because it is safer than writing raw SQL with direct user input.

---

## What I Learned From Building It

### 1. Understanding is different from writing from memory
I learned that reading code and understanding it is not the same as producing it from scratch.

### 2. Small projects are useful when fully understood
A small project can still be valuable if I understand every file, every flow, and every decision.

### 3. LAMP teaches real backend fundamentals
PHP, MySQL, and Apache helped make these ideas more concrete:
- request and response flow
- form handling
- database connections
- insert and select operations
- server-side rendering

### 4. File paths and serving paths matter
It is easy to get confused if Apache is serving a different location than the one being edited.

### 5. Debugging works better when layers are isolated
It was easier to debug by testing one layer at a time instead of treating the whole app as one big problem.

### 6. Documentation helps understanding
Writing setup notes, project notes, screenshots, and the README made the project easier to understand and explain.

---

## What I Would Improve Next
- add clearer validation feedback
- add filtering by student name or status
- add edit and delete features
- improve page styling
- move credentials into `.env`
- use a dedicated database user instead of `root`
- rebuild the project from scratch from memory