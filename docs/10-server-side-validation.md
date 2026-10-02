# Server-Side Validation

## Purpose

This milestone adds simple server-side validation to the user form before data is saved to MySQL.

The flow is now:

```text
Web form
    ↓
PHP receives input
    ↓
PHP validates input
    ↓
Database
```

## Validation Rules

The PHP form checks that:

* Full Name is not empty.
* Email is not empty.
* Email has a valid email format.
* Phone is not empty.
* Age is greater than zero.
* Gender is not empty.

## PHP Validation

Validation is performed in `create_user.php`.

If the submitted data is invalid, PHP displays an error message and does not call `createUser()`.

For example, an invalid email produces:

```text
Please enter a valid email address.
```

Valid data is passed to the existing `createUser()` database function.

## Verification

The validation was tested through the browser.

### Invalid Input

An invalid email was submitted:

```text
test@example
```

PHP rejected the email and displayed:

```text
Please enter a valid email address.
```

The invalid data was not saved.

### Valid Input

A valid email was then submitted:

```text
test@example.com
```

PHP accepted the data and displayed:

```text
User saved successfully.
```

The user was successfully stored in the database.

## Files Added or Updated

* `create_user.php`
* `docs/10-server-side-validation.md`

## Status

M10 — Server-Side Validation: Complete
