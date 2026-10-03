<?php

// Load the database connection and reusable database functions.
require_once __DIR__ . '/config/database_functions.php';

// Store a success message after a user is saved.
$message = '';

// Store an error message when validation fails.
$error = '';

// Check whether the form was submitted using POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Collect and clean the full name submitted by the user.
    $fullName = trim($_POST['full_name'] ?? '');

    // Collect and clean the email submitted by the user.
    $email = trim($_POST['email'] ?? '');

    // Collect and clean the phone number submitted by the user.
    $phone = trim($_POST['phone'] ?? '');

    // Collect the age and convert it from text to an integer.
    $age = (int) ($_POST['age'] ?? 0);

    // Collect and clean the gender submitted by the user.
    $gender = trim($_POST['gender'] ?? '');

    // Check that all required fields contain valid basic values.
    if ($fullName === '' || $email === '' || $phone === '' || $age <= 0 || $gender === '') {

        // Display an error when required values are missing or invalid.
        $error = 'Please complete all fields with valid values.';

    // Check whether the email has a valid email format.
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Display an error when the email format is invalid.
        $error = 'Please enter a valid email address.';

    } else {

        // Send the validated data to the database function.
        createUser($pdo, $fullName, $email, $phone, $age, $gender);

        // Display a success message after the user is saved.
        $message = 'User saved successfully.';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Define the character encoding used by the page. -->
    <meta charset="UTF-8">

    <!-- Make the page display correctly on different screen sizes. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Set the title displayed in the browser tab. -->
    <title>Create User</title>

</head>
<body>

    <!-- Display the page heading. -->
    <h1>Enter User Information</h1>

    <?php if ($message !== ''): ?>

        <!-- Display the success message when a user was saved. -->
        <p><?= htmlspecialchars($message) ?></p>

    <?php endif; ?>

    <?php if ($error !== ''): ?>

        <!-- Display the validation error when validation fails. -->
        <p><?= htmlspecialchars($error) ?></p>

    <?php endif; ?>

    <!-- Create the form used to collect user information. -->
    <form method="POST" id="userForm">

        <p>

            <!-- Label and input for the user's full name. -->
            <label for="full_name">Full Name:</label><br>
            <input type="text" id="full_name" name="full_name" required>

        </p>

        <p>

            <!-- Label and input for the user's email address. -->
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>

        </p>

        <p>

            <!-- Label and input for the user's phone number. -->
            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone" required>

        </p>

        <p>

            <!-- Label and input for the user's age. -->
            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" required>

        </p>

        <p>

            <!-- Label and input for the user's gender. -->
            <label for="gender">Gender:</label><br>
            <input type="text" id="gender" name="gender" required>

        </p>

        <!-- Submit the form to PHP. -->
        <button type="submit">Save User</button>

    </form>

    <!-- Provide a link to the page that displays saved users. -->
    <p>
        <a href="index.php">View Users</a>
    </p>

    <script>

        // Find the user form by its HTML ID.
        document.getElementById('userForm').addEventListener('submit', function (event) {

            // Get and clean the full name entered in the form.
            const fullName = document.getElementById('full_name').value.trim();

            // Get and clean the email entered in the form.
            const email = document.getElementById('email').value.trim();

            // Get and clean the phone number entered in the form.
            const phone = document.getElementById('phone').value.trim();

            // Get the age and convert it from text to an integer.
            const age = parseInt(document.getElementById('age').value, 10);

            // Get and clean the gender entered in the form.
            const gender = document.getElementById('gender').value.trim();

            // Check whether any required field contains an invalid value.
            if (
                fullName === '' ||
                email === '' ||
                phone === '' ||
                Number.isNaN(age) ||
                age <= 0 ||
                gender === ''
            ) {

                // Stop the form from being submitted to PHP.
                event.preventDefault();

                // Tell the user that the form contains invalid information.
                alert('Please complete all fields with valid values.');
            }
        });

    </script>

</body>
</html>