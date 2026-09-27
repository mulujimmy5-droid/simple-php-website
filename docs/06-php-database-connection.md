# 06 - PHP Database Connection

## Overview

The application uses PHP with PDO to connect to the MySQL database.

## Connection Architecture

Browser
 |
Apache / PHP
 |
phpdotenv
 |
.env configuration
 |
PDO
 |
MySQL Server (127.0.0.1:3306)
 |
simple_php_website
 |
users

## Environment Configuration

Database connection settings are stored in the local `.env` file.

The `.env` file contains the database host, port, name, username, and password.

The `.env` file is excluded from Git.

Database credentials must never be committed to the repository or placed directly in PHP source code.

## Composer

Composer manages the project's PHP dependencies.

The project uses:

- vlucas/phpdotenv
- PDO with the MySQL driver

The dependency files are:

- composer.json
- composer.lock

The vendor directory is excluded from Git.

## Database Connection

The PDO connection is implemented in:

config/database.php

The connection uses:

- MySQL
- UTF-8 / utf8mb4
- PDO exception handling
- Associative-array fetch mode

## Verification

The connection was successfully tested from the command line.

PHP successfully:

1. Loaded the Composer autoloader.
2. Loaded environment variables using phpdotenv.
3. Connected to MySQL.
4. Connected to the simple_php_website database.
5. Queried the users table.

Test result:

Database connection successful
Users in database: 1

## Database Environment

Apache and PHP are provided by XAMPP.

The application connects to the existing MySQL server at:

127.0.0.1:3306

XAMPP's bundled MySQL server is not used.

## Security

- Database credentials are stored in `.env`.
- `.env` is ignored by Git.
- `vendor/` is ignored by Git.
- Database passwords are not stored in PHP source code.
- PDO is used for database access.

## Status

M6 - PHP to MySQL Connection: Complete