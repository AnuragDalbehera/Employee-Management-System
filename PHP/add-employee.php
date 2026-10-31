<?php

include "database.php";

$employee_id = $_POST["employee_id"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$department = $_POST["department"];
$position = $_POST["position"];
$status = $_POST["status"];


$sql = "INSERT INTO employees
        (employee_id, name, email, phone, department, position, status)
        VALUES
        ('$employee_id', '$name', '$email', '$phone', '$department', '$position', '$status')";


if (mysqli_query($conn, $sql)) {

    echo "<script>";
    echo "alert('Employee added successfully');";
    echo "window.location.href='../PHP/view-employee.php';";
    echo "</script>";

} else {

    echo "Error: " . mysqli_error($conn);

}

?>