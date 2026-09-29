<?php

// Load the database connection and reusable database functions.
require_once __DIR__ . '/config/database_functions.php';

$message = '';

// Process the form when it is submitted.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Collect the values submitted by the form.
    $fullName = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $age = (int) ($_POST['age'] ?? 0);
    $gender = trim($_POST['gender'] ?? '');

    // Send the form data to the database.
    createUser($pdo, $fullName, $email, $phone, $age, $gender);

    $message = 'User saved successfully.';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>

    <h1>Enter User Information</h1>

    <?php if ($message !== ''): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form method="POST">

        <p>
            <label for="full_name">Full Name:</label><br>
            <input type="text" id="full_name" name="full_name" required>
        </p>

        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone" required>
        </p>

        <p>
            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" required>
        </p>

        <p>
            <label for="gender">Gender:</label><br>
            <input type="text" id="gender" name="gender" required>
        </p>

        <button type="submit">Save User</button>

    </form>

    <p>
        <a href="index.php">View Users</a>
    </p>

</body>
</html>