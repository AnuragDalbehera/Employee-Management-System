<?php

include("database.php");

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirmpassword"];


if (
    empty($username) ||
    empty($email) ||
    empty($password) ||
    empty($confirm_password)
   ) {
    die("All fields are required.");
}


$usernamePattern = "/^[A-Za-z. ]+$/";

if (!preg_match($usernamePattern, $username)) {
    die("Invalid username.");
}


$emailPattern = "/^[A-Za-z0-9.]+@gmail\.com$/";

if (!preg_match($emailPattern, $email)) {
    die("Invalid Gmail address.");
}


if ($password !== $confirm_password) {
    die("Passwords do not match.");
}


$sql = "SELECT username FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    die("Username already exists.");
}


$sql = "SELECT email FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    die("Email already exists.");
}


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$hashedPassword')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../HTML/login.html?signup=success");
    exit();
}

?>
