# Web Form to Database

## Purpose

This milestone demonstrates how data entered into a web form is collected by PHP and stored in the MySQL database.

## Web Form

The file `create_user.php` contains the HTML form used to collect user information.

The form collects:

- Full Name
- Email
- Phone
- Age
- Gender

The form submits the data using the HTTP `POST` method.

## PHP Processing

When the form is submitted, `create_user.php`:

1. Checks that the request uses `POST`.
2. Reads the submitted form values.
3. Removes unnecessary whitespace from text values.
4. Passes the values to the `createUser()` database function.

## Database Insertion

The `createUser()` function is located in:

```text
config/database_functions.php