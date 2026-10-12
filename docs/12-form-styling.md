# M12 - Form Styling

## Purpose

This milestone adds basic visual styling to the user creation form.

The goal is to make the existing functional form easier to read and use while keeping the PHP processing, database submission, and JavaScript validation unchanged.

## What Was Added

A new `style.css` stylesheet was created for the project.

The stylesheet provides:

- A light page background.
- Basic typography.
- A centered page heading.
- A centered form layout.
- A white form container.
- Form spacing and padding.
- Styled labels.
- Styled input fields.
- A styled Save User button.
- A styled View Users link.
- Basic mobile-friendly sizing.

## Form Styling

The form is displayed as a simple card with a maximum width.

Input fields use:

- Consistent padding.
- Consistent font size.
- Borders.
- Rounded corners.
- Full available width.

The Save User button also uses the available form width to make it easier to use.

## Responsive Design

The form was tested at a mobile-sized browser viewport.

The following were verified:

- The form fits within the screen.
- Input fields do not extend outside the page.
- The Save User button fits correctly.
- The heading remains visible.
- The form remains usable.

## Functional Testing

Styling was tested without changing the existing form processing.

### Valid Submission

The following test data was submitted:

- Full Name: M12 Style Test
- Email: m12style@example.com
- Phone: +256700000001
- Age: 25
- Gender: Male

Result:

```text
User saved successfully. 