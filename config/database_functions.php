<?php

// Load the PDO database connection.
require_once __DIR__ . '/database.php';

/**
 * Retrieve all users from the database.
 *
 * @param PDO $pdo Active PDO database connection.
 * @return array List of users.
 */
function getUsers(PDO $pdo): array
{
    // Select the columns that exist in the users table.
    // Results are returned with the newest user first.
    $stmt = $pdo->query(
        'SELECT id, full_name, email, phone, age, gender, created_at
         FROM users
         ORDER BY id DESC'
    );

    // Return all matching users as an array.
    return $stmt->fetchAll();
}
