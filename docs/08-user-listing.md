# 08 - User Listing

## Overview

The application now displays users from the MySQL database through a PHP web page.

## User Listing Page

The user listing is implemented in:

index.php

The page loads the reusable database functions from:

config/database_functions.php

The `getUsers()` function is used to retrieve users from the database.

## Displayed Fields

The user listing displays:

- ID
- Full Name
- Email
- Phone
- Age
- Gender
- Created At

## Security

Database values are escaped with PHP's `htmlspecialchars()` function before being displayed in HTML.

This helps prevent database values from being interpreted as HTML or JavaScript when rendered on the page.

## Architecture

The page does not contain SQL queries directly.

The application flow is:

Browser
 |
Apache / PHP
 |
index.php
 |
database_functions.php
 |
getUsers()
 |
PDO
 |
MySQL
 |
users

## Verification

The PHP syntax was checked successfully.

Test result:

No syntax errors detected in index.php

The page was also tested through Apache at:

http://localhost/simple_php_website/

The existing test user was successfully displayed in the users table.

## Status

M8 - User Listing: Complete
