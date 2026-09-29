# 07 - Database Functions

## Overview

The application uses reusable PHP functions to keep database queries separate from page-level application code.

## Database Function File

Database functions are stored in:

config/database_functions.php

The file loads the PDO connection from:

config/database.php

## getUsers()

The `getUsers()` function retrieves users from the `users` table.

The function returns:

- id
- full_name
- email
- phone
- age
- gender
- created_at

Users are ordered by ID in descending order so that newer records are returned first.

## Verification

The database function was tested from the command line.

Test result:

Users found: 1

The returned test user contained the expected user information from the database.

## Design

Database queries are kept in reusable functions rather than being placed directly in application pages.

This separation will make the application easier to maintain as additional database operations are added.

## Status

M7 - Database Functions: In Progress
