<?php
// Sample PHP code for login authentication
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate email format (you can add more validation)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Simulate authentication (replace with your actual authentication logic)
        if ($email === "yourRTECHemail@example.com" && $password === "yourRTECHpassword") {
            // Start a session (replace with your actual session management)
            session_start();
            $_SESSION["email"] = $email;
            header("Location: index_authenticated.php"); // Redirect to authenticated index page
            exit();
        } else {
            // Invalid credentials
            header("Location: login.html?error=invalid_credentials");
            exit();
        }
    } else {
        // Invalid email format
        header("Location: login.html?error=invalid_email_format");
        exit();
    }
}
?>
