# 03 - System Architecture

## 1. Introduction

This document describes the architecture of the Simple PHP Website and explains how the different components communicate with each other.

The application consists of:

- Web browser
- HTML
- CSS
- JavaScript
- Apache
- PHP
- MySQL
- MySQL Workbench

Git and GitHub are used for version control but are not part of then runtime application.

---

## 2. High-Level Architecture

The application follows a simple client-server architecture.

The basic flow is:

Browser
↓
Apache
↓
PHP
↓
MySQL
↓
PHP
↓
Browser

The browser is responsible for displaying the user interface.

Apache receives requests and provides the environment in which PHP runs.

PHP processes submitted information and communicates with MySQL.

MySQL stores the application data.

---

## 3. Main Components

### 3.1 Web Browser

The web browser is the client used by the user to interact with the application.

Examples include:

- Google Chrome
- Microsoft Edge
- Mozilla Firefox

The browser:

- Displays the HTML page.
- Loads CSS.
- Executes JavaScript.
- Sends requests to the PHP application.
- Displays responses from PHP.

---

### 3.2 HTML

HTML provides the structure of the website.

The registration form will be created using HTML.

It will contain fields for:

- Full Name
- Email
- Phone Number
- Age
- Gender

---

### 3.3 CSS

CSS controls the appearance of the website.

It will be responsible for:

- Layout.
- Spacing.
- Typography.
- Form styling.
- Buttons.
- Responsive design.

---

### 3.4 JavaScript

JavaScript runs in the user's browser.

It will provide client-side validation before information is sent to the PHP server.

For example, JavaScript can check whether:

- Required fields are filled.
- The email format appears valid.
- The age is within the accepted range.
- A gender has been selected.

JavaScript improves the user experience, but it is not a replacement for server-side validation.

---

### 3.5 Apache

Apache is the web server used by the local development environment.

It is provided by XAMPP.

Apache receives HTTP requests such as:

```text
http://localhost/simple_php_website/