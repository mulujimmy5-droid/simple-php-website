# 01 -Project_overview

## 1. Introduction

This project is a simple web application designed to demonstrate the complete process of collecting information from a user through a web form and storing that information in a MySQL database.

The project uses HTML, CSS, JavaScript, PHP and MySQL.

## 2. Purpose

The purpose of this project is to understand how the different parts of a web application communicate with each other.

In particular, the project demonstrates the following flow:

Browser → HTML/CSS/JavaScript → PHP → MySQL → PHP → Browser

## 3. Technologies

### HTML

HTML provides the structure of the website and the user input form.

### CSS

CSS provides the visual design and layout of the website.

### JavaScript

JavaScript provides client-side validation and browser interaction.

### PHP

PHP is responsible for server-side processing.

It will receive submitted form data, validate it, and communicate with the MySQL database.

### MySQL

MySQL is responsible for storing the information submitted by users.

### Apache

Apache acts as the local web server that allows PHP applications to run on the computer.

### Git

Git is used for local version control.

### GitHub

GitHub stores the remote Git repository and project history.

## 4. Development Environment

The project is being developed locally using:

- Visual Studio Code
- XAMPP
- Apache
- PHP
- MySQL 8.0
- MySQL Workbench
- Git
- GitHub

## 5. Database Environment

The computer already contains a MySQL 8.0 server running as the Windows service `MySQL80`.

The MySQL server is using port `3306`.

Therefore, the project will use the existing MySQL server instead
of the MySQL server included with XAMPP.

XAMPP MySQL does not need to be running for this project.

## 6. Current Architecture

The planned architecture is:

Browser
    ↓
Apache
    ↓
PHP
    ↓
MySQL

MySQL Workbench will be used to manage and inspect the MySQL database.

## 7. Development Approach

The project will be developed incrementally.

Each major feature will be:

1. Designed.
2. Implemented.
3. Tested.
4. Documented.
5. Committed to Git.
6. Pushed to GitHub.

## 8. Current Status

The development environment has been successfully established.

Completed:
- VS Code installed.
- XAMPP installed.
- Apache tested successfully.
- PHP tested successfully.
- MySQL 8.0 identified and running.
- MySQL Workbench available.
- Git installed.
- Git repository initialized.
- Initial Git commit created.
- GitHub repository created.
- Initial project pushed to GitHub.