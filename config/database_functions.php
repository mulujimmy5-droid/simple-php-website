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

/**
 * Create a new user in the database.
 *
 * @param PDO $pdo Active PDO database connection.
 * @param string $fullName User's full name.
 * @param string $email User's email address.
 * @param string $phone User's phone number.
 * @param int $age User's age.
 * @param string $gender User's gender.
 * @return bool True when the user is successfully created.
 */
function createUser(
    PDO $pdo,
    string $fullName,
    string $email,
    string $phone,
    int $age,
    string $gender
): bool {
    // Use a prepared statement so user input is safely handled.
    $stmt = $pdo->prepare(
        'INSERT INTO users (full_name, email, phone, age, gender)
         VALUES (:full_name, :email, :phone, :age, :gender)'
    );

    // Execute the query with the supplied user values.
    return $stmt->execute([
        ':full_name' => $fullName,
        ':email' => $email,
        ':phone' => $phone,
        ':age' => $age,
        ':gender' => $gender,
    ]);
}
