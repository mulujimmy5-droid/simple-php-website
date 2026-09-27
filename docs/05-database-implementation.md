05 - Database Implementation

1. Introduction

The database designed in 04-database-design.md has now been implemented in the MySQL 8.0 server.

The project uses the existing MySQL Windows service MySQL80, running locally on port 3306.

MySQL Workbench is used to manage and inspect the database.

2. Database Created

The project database is:

simple_php_website

It was created using:

CREATE DATABASE simple_php_website;

The database was verified using:

SHOW DATABASES;

The database appeared successfully in the list of available databases.

3. Users Table Created

The users table was created inside the simple_php_website database.

The SQL used was:

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    age TINYINT UNSIGNED NOT NULL,
    gender VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

## 4. Table Verification

The table was verified using:

SHOW TABLES;

The users table appeared successfully.

The table structure was then inspected using:

DESCRIBE users;

The expected columns were confirmed:

|Column       |Type             |Purpose                  |

|id           |INT UNSIGNED     |Unique record identifier |
|full_name    |VARCHAR(100)     |User's full name         |
|email        |VARCHAR(150)     |User's email address     |
|phone        |VARCHAR(30)      |User's phone number      |
|age          |TINYINT UNSIGNED |User's age               |
|gender       |VARCHAR(20)      |User's gender            |
|created_at   |TIMESTAMP        |Record creation time     |

## 5. Test Record

A test record was inserted into the database using:

INSERT INTO users (full_name, email, phone, age, gender)
VALUES (
    'Test User',
    'test@example.com',
    '+256700000000',
    25,
    'Other'
);

The insert operation completed successfully.

6. Data Retrieval Test

The stored data was retrieved using:

SELECT * FROM users;

The test record appeared successfully.

This confirmed that the database can:

Accept a new record.

Store the record.

Retrieve the stored record.

## 7. Current Database Structure

The current database structure is:

simple_php_website
│
└── users
    ├── id
    ├── full_name
    ├── email
    ├── phone
    ├── age
    ├── gender
    └── created_at

## 8. Database Environment

The application will connect to:

Host: localhost
Port: 3306
Database: simple_php_website
Server: MySQL 8.0
Windows Service: MySQL80

MySQL Workbench is used for database administration and verification.

## 9. Database Implementation Status

The database implementation is complete.

The following have been successfully completed:

MySQL database created.

users table created.

Table structure verified.

Test data inserted.

Test data retrieved.

Database connection environment identified.

The next development stage is connecting PHP to the MySQL database.