# 02 - Project Requirements

## 1. Project Goal

The goal of this project is to build a simple web application that collects user information through a web form and stores the submitted information in a MySQL database.

The application will demonstrate the basic flow of a web application:

Browser → HTML/CSS/JavaScript → PHP → MySQL → PHP → Browser

---

## 2. Functional Requirements

The application must provide the following functionality.

### FR-01 - Display Registration Form

The website must display a form that allows a user to enter their personal information.

### FR-02 - Collect User Information

The form must collect the following information:

- Full Name
- Email Address
- Phone Number
- Age
- Gender

### FR-03 - Client-Side Validation

JavaScript must validate the form before it is submitted.
The browser should check that:
- Required fields are not empty.
- The email address has a valid format.
- The age is within the accepted range.
- The selected gender is valid.
- The phone number follows the expected format.

### FR-04 - Submit Form Data

After successful client-side validation, the form must send the information to the PHP backend.

### FR-05 - Server-Side Validation
PHP must validate all submitted information again.
Server-side validation is required even when JavaScript validation has already been performed.

### FR-06 - Store Data in MySQL
Valid information must be stored in the MySQL database.
PHP must use prepared statements when inserting data into the database.

### FR-07 - Provide User Feedback
After form submission, the application must inform the user whether the submission was successful or whether an error occurred.

### FR-08 - Display Submitted Records
The application must provide a page that allows the form owner to retrieve and view records submitted through the form.
The records page should display information such as:
- Full Name
- Email Address
- Phone Number
- Age
- Gender

The submitted records must be retrieved from MySQL.
User-submitted records should not be publicly exposed to other users.

---

## 3. Form Fields

The registration form will contain the following fields.

| Field        | Required | Description            |
| Full Name    | Yes      | User's full name       |
| Email        | Yes      | User's email address   |
| Phone Number | Yes      | User's contact number  |
| Age          | Yes      | User's age             |
| Gender       | Yes      | User's selected gender |

---

## 4. Validation Requirements

### Full Name

The full name:

- Must not be empty.
- Must be trimmed of unnecessary whitespace.
- Must have a reasonable maximum length.

### Email

The email:

- Must not be empty.
- Must have a valid email format.
- Must have a reasonable maximum length.

### Phone Number

The phone number:

- Must not be empty.
- Must contain an acceptable number of characters.
- Should allow commonly used phone number formats.

The application should avoid unnecessarily restricting valid
international phone numbers.

### Age

The age:

- Must not be empty.
- Must be a number.
- Must be within a reasonable range.
- The initial accepted range will be 1 to 120.

### Gender

The gender:

- Must not be empty.
- Must contain one of the values provided by the form.

---

## 5. Database Requirements

The application must use MySQL for persistent data storage.

The database must contain a table for the submitted user information.

Each record should have a unique identifier.

The database structure will be documented separately in:

`docs/04-database-design.md`

The database implementation will be created after the requirements
and application design have been completed.

---

## 6. Security Requirements

The application must follow basic security practices.

### Input Validation

All user input must be validated on the server.

### Prepared Statements

PHP must use prepared statements when communicating with MySQL.

This helps protect the application from SQL injection.

### Output Escaping

Data retrieved from the database must be safely escaped before being
displayed as HTML.

This helps reduce the risk of cross-site scripting (XSS).

### Database Credentials

Database credentials must not be committed to GitHub.

Sensitive configuration should be stored outside publicly committed
source code.

### Git Security

Files containing passwords, API keys, database credentials, or other secrets must not be committed to the repository.

---

## 7. Usability Requirements

The website should:

- Have a clear and simple layout.
- Use understandable labels.
- Provide useful validation messages.
- Clearly indicate successful submissions.
- Clearly indicate errors.
- Work on common desktop and mobile screen sizes.

---

## 8. Documentation Requirements

Important parts of the project must be documented.

The documentation will cover:

- Project overview.
- Requirements.
- System architecture.
- Database design.
- Application flow.
- Security.
- Testing.
- Deployment.

Documentation should be updated as the project develops.

---

## 9. Version Control Requirements

Git must be used to track changes to the project.

Meaningful milestones should be committed separately.

The GitHub repository should contain the project source code and
documentation.

Sensitive information must not be pushed to GitHub.

---

## 10. Expected Application Flow

The expected flow is:

1. User opens the website.
2. Website displays the registration form.
3. User enters their information.
4. JavaScript validates the information.
5. Form data is sent to PHP.
6. PHP validates the information again.
7. PHP connects to MySQL.
8. PHP inserts valid data using a prepared statement.
9. PHP returns a success or error response.
10. The browser displays the result.
11. Stored records can later be retrieved and displayed.

---

## 11. Acceptance Criteria

The initial version of the application will be considered functional
when:

- The registration form is displayed correctly.
- All required fields are available.
- JavaScript validation works.
- Invalid input is rejected by the browser.
- PHP receives submitted form data.
- PHP validates submitted data.
- Valid data is stored in MySQL.
- Invalid data is not stored.
- SQL queries use prepared statements.
- Stored records can be retrieved.
- Records are safely displayed in the browser.
- The application provides clear success/error messages.
- The project documentation is maintained.
- The project is tracked using Git and GitHub.

---

## 12. Out of Scope

The initial version will not include:

- User login.
- User passwords.
- User authentication.
- Email verification.
- Password recovery.
- Complex user roles.
- Online payment.
- Production deployment.

These features could be added in a future version.

---

## 13. Current Status

The project requirements have been defined.