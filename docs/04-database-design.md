# 04 - Database Design

## 1. Introduction

This document describes the database structure for the Simple PHP
Website.

The database will store information submitted through the registration
form.

The application will use MySQL 8.0.

---

## 2. Database Name

The database will be named:

`simple_php_website`

Using a dedicated database keeps the project's data separate from
other databases on the MySQL server.

---

## 3. Table Name

The main table will be named:

`users`

The `users` table will store the information submitted through the
registration form.

---

## 4. Users Table Structure

The table will contain the following columns:

| Column | Data Type | Required | Description |
|---|---|---|---|
| `id` | INT | Yes | Unique identifier for each record |
| `full_name` | VARCHAR(100) | Yes | User's full name |
| `email` | VARCHAR(150) | Yes | User's email address |
| `phone` | VARCHAR(30) | Yes | User's phone number |
| `age` | TINYINT UNSIGNED | Yes | User's age |
| `gender` | VARCHAR(20) | Yes | User's selected gender |
| `created_at` | TIMESTAMP | Yes | Date and time the record was created |

---

## 5. Primary Key

The `id` column will be the primary key.

A primary key uniquely identifies each record in the table.

The `id` column will automatically increase for new records.

Example:

| id | full_name |
|---:|---|
| 1 | John Doe |
| 2 | Jane Smith |
| 3 | Peter Brown |

Each record therefore has its own unique identifier.

---

## 6. Full Name

The `full_name` column will use:

`VARCHAR(100)`

A maximum length of 100 characters is sufficient for this simple
application.

The field is required because a record should contain a name.

---

## 7. Email

The `email` column will use:

`VARCHAR(150)`

The field is required.

PHP will validate that the submitted value has a valid email format
before inserting it into the database.

The database will store the email as text rather than using a numeric
data type.

---

## 8. Phone Number

The `phone` column will use:

`VARCHAR(30)`

Phone numbers will be stored as text.

Phone numbers should not be stored as integers because they can contain:

- Leading zeros.
- Country codes.
- Plus signs.
- Spaces.
- Other formatting characters.

For example:

`+256 700 123456`

Therefore, `VARCHAR` is more appropriate than an integer data type.

---

## 9. Age

The `age` column will use:

`TINYINT UNSIGNED`

The application requirements specify an accepted age range of:

`1 - 120`

PHP will validate the age before storing it.

The `UNSIGNED` attribute prevents negative values at the database
level.

---

## 10. Gender

The `gender` column will use:

`VARCHAR(20)`

The field is required.

The application will provide a controlled set of choices through the
HTML form.

PHP will verify that the submitted value is one of the allowed
values before storing it.

Using `VARCHAR` keeps the database structure simple and allows the
application to change its available choices later without requiring
a database schema change.

---

## 11. Created At

The `created_at` column will use:

`TIMESTAMP`

It will record when each record was created.

The database should automatically assign the current timestamp when
a new record is inserted.

This allows the records page to show when submissions were received.

---

## 12. Proposed SQL Structure

The initial table structure will be:

```sql
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    age TINYINT UNSIGNED NOT NULL,
    gender VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);