<?php

include("database.php");

$email = $_POST["email"];
$password = $_POST["password"];

if (
    empty($email) ||
    empty($password)
   ) {
    die("All fields are required.");
}

$query = "SELECT * FROM users WHERE email = '$email'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user["password"])) {

        header("Location: ../HTML/dashboard.html");
        exit();

    } else {

        die("Incorrect Password");

    }

} else {

    header("Location: ../HTML/login.html?error=login");
    exit();

}

?>
