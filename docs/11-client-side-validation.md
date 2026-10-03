# M11 - Client-Side Validation

## Purpose

This milestone adds client-side validation to the user creation form.

The goal is to give users immediate feedback in the browser before the form is submitted to PHP.

## What Was Added

JavaScript validation was added to `create_user.php`.

The JavaScript checks that:

- Full name is not empty.
- Email is not empty.
- Phone is not empty.
- Age contains a valid positive number.
- Gender is not empty.

If the validation fails, JavaScript prevents the form from being submitted and displays an error message.

## Browser Validation

The form also uses HTML form validation features such as:

- `required` fields.
- `type="email"` for the email field.
- Appropriate input types for other fields.

These provide basic validation directly in the browser.

## Server-Side Validation

Client-side validation does not replace server-side validation.

The PHP code continues to validate the submitted data after the request reaches the server.

This provides two layers of validation:

1. **Client-side validation** gives the user immediate feedback.
2. **Server-side validation** protects the application when data reaches PHP.

## Testing

The following tests were completed:

### Invalid Form Submission

A required field was left empty.

Result:

```text
Please complete all fields with valid values.