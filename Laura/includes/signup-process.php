<?php
session_start();
include 'config.php'; // Database Connection

if (isset($_POST['signup'])) {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (`username`, `password`, `full_name`, `email`, `reg_date`) 
            VALUES ('$username', '$password', '$fullName', '$email', NOW())";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
            <script>
                alert('Registration successful! Please sign in with your credentials.');
                window.location.href = '../signin.php'; // Redirect to the login page
            </script>
        ";
        // header("Location: ../signin.php");
        exit(); // Terminate the script after the redirect
    } else {
        echo "
            <script>
                alert('Registration Failed.');
                window.location.href = '../signup.php'; // Redirect back to the signup page
            </script>
        ";
        // header("Location: ../signup.php");
        exit(); // Terminate the script after the redirect
    }
}
?>
