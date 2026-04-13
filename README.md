# Student Notes Tracker

A small LAMP stack practice project built with PHP, MySQL, and Apache.

This app allows a user to:
- add a student note
- save the note to a MySQL database
- view saved notes on the main page

The project was built as a pre-placement practice app to strengthen backend fundamentals and understand the full flow from form input to database storage and browser output.

---

## Project Purpose

The goal of this project is to practice the core LAMP flow:

- Apache serves the PHP files
- PHP handles form input and server-side logic
- MySQL stores the student notes
- the app fetches saved notes and displays them in the browser

This project is intentionally small so the full system can be understood end to end.

---

## Features

- Add a student note using a form
- Save note data to MySQL
- View all saved notes on the index page
- Store note timestamps automatically
- Reuse database connection logic through a config file

---

## Tech Stack

- PHP
- MySQL
- Apache
- HTML
- Linux

---

## Project Structure

```text
student-notes-tracker/
├── README.md
├── notes/
│   ├── project-notes.md
│   └── setup-notes.md
├── screenshots/
├── sql/
│   └── schema.sql
└── app/
    ├── index.php
    ├── add-note.php
    ├── save-note.php
    └── config.php
```

---

## Database

### Database Name
student_notes_tracker

### Table Name
student_notes

### Columns
- `id`
- `student_name`
- `note_text`
- `status`
- `created_at`

---

## Main App Flow

1. Open add-note.php
2. Fill in the form
3. Submit the form to save-note.php
4. save-note.php receives the POST data
5. save-note.php uses config.php to connect to MySQL
6. The note is inserted into the student_notes table
7. The user is redirected to index.php
8. index.php fetches all saved notes
9. The notes are displayed in the browser

---

## Setup Overview

### 1. Create the database schema
Run the SQL in sql/schema.sql using MySQL Workbench or the MySQL CLI.

### 2. Configure the database connection
Update app/config.php with your MySQL connection details.

### 3. Serve the project through Apache
Make sure Apache is running and the project is being served through http://localhost/...

### 4. Open the app in the browser
Example local path:

http://localhost/student-notes-tracker/app/index.php

---

## Pages

### app/index.php
Main list page that displays all saved notes.

### app/add-note.php
Form page for adding a new note.

### app/save-note.php
Processes the form submission and saves the note to MySQL.

### app/config.php
Contains the MySQL connection logic.

---

## Current Scope

This version includes:
- one database
- one table
- one form page
- one save flow
- one list page

This version does not include:
- authentication
- edit/delete functionality
- advanced styling
- multiple tables
- framework use

---

## Learning Focus

This project was used to practice:
- PHP basics
- HTML forms
- POST request handling
- MySQL schema design
- PHP to MySQL connection
- insert queries
- select queries
- displaying database data
- understanding full request flow in a small LAMP app

---

## Evidence

Screenshots captured for this project:
- `01-mysql-workbench-local-connection.png` - local MySQL Workbench connection
- `02-schema-sql-script.png` - schema SQL prepared for execution
- `03-student-notes-table-view.png` - `student_notes` table visible in MySQL Workbench
- `04-add-note-form-page.png` - add note form rendered in the browser
- `05-note-visible-on-index-page.png` - saved note displayed on the index page
- `06-student-notes-table-view.png` - inserted note visible in the database table

---

## Next Improvements

Possible future upgrades:
- make status a dropdown
- add filtering by student name or status
- add edit/delete features
- improve styling
- move DB credentials into .env
- use a dedicated DB user instead of root

---

## Status

Current status: core version complete

Completed:
- database schema created
- MySQL connection configured
- PHP served through Apache
- add note form built
- save note flow working
- notes displayed on the index page

The project can now:
- add a note through the form
- save the note to MySQL
- display the saved note on the list page

That confirms the main student notes tracker flow is working end to end.

---

## What I Practiced

This project was used to practice:
- PHP form handling
- Apache-served local development
- MySQL schema creation
- PHP to MySQL connection
- end-to-end request -> app -> database -> browser flow