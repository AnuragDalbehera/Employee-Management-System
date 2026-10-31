<?php

include "database.php";

$sql = "SELECT * FROM employees";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>View Employees</title>

    <link rel="stylesheet" href="../CSS/view-employee.css">

</head>

<body>

    <div class="sidebar">

        <div class="logo">

            <h2>EMS</h2>

            <p>Employee Management</p>

        </div>


        <div class="menu">

            <a href="../HTML/dashboard.html">
                Dashboard
            </a>

            <a href="../HTML/add-employee.html">
                Add Employee
            </a>

            <a href="view-employee.php" class="active">
                View Employees
            </a>

        </div>


        <div class="logout">

            <a href="logout.php">
                Logout
            </a>

        </div>

    </div>


    <div class="main">

        <div class="header">

            <h1>View Employees</h1>

        </div>


        <div class="content">

            <div class="table-box">

                <h2>Employee Records</h2>

                <p>All employees registered in the system.</p>


                <table>

                    <tr>

                        <th>ID</th>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Status</th>

                    </tr>


                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                    <tr>

                        <td>
                            <?php echo $row["id"]; ?>
                        </td>

                        <td>
                            <?php echo $row["employee_id"]; ?>
                        </td>

                        <td>
                            <?php echo $row["name"]; ?>
                        </td>

                        <td>
                            <?php echo $row["email"]; ?>
                        </td>

                        <td>
                            <?php echo $row["phone"]; ?>
                        </td>

                        <td>
                            <?php echo $row["department"]; ?>
                        </td>

                        <td>
                            <?php echo $row["position"]; ?>
                        </td>

                        <td>
                            <?php echo $row["status"]; ?>
                        </td>

                    </tr>

                    <?php

                    }

                    ?>

                </table>

            </div>

        </div>

    </div>

</body>

</html>