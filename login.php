<?php
session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your password
    $password = "RMR-CO-173"; // Change this to your desired password

    // Check if the entered password matches
    if ($_POST['password'] === $password) {
        $_SESSION['loggedin'] = true; // Set session variable
        header("Location: protected_page.php"); // Redirect to the protected page
        exit();
    } else {
        $error = "Incorrect password"; // Error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Drill Testing Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Submit</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
