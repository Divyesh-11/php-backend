<?php include "connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        thead tr:first-child th {
            background-color: #343a40;
            font-size: 20px;
            letter-spacing: 1px;
            padding: 15px;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th colspan="7">List of Employees</th>
            </tr>
            <tr>
                <th>EMPID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM `employee`";
            $run = $conn->query($sql);
            $sno = 0;
            while ($fetch = $run->fetch_object()) {
                $sno++; ?>
                <tr>
                    <td><?php echo $sno ?></td>
                    <td><?php echo $fetch->fname ?></td>
                    <td><?php echo $fetch->lname ?></td>
                    <td><?php echo $fetch->email ?></td>
                    <td><?php echo $fetch->mobile ?></td>
                    <td><a href="editdata.php?id=<?php echo $fetch->id ?>">EDIT</a></td>
                    <td><a href="deletedata.php?id=<?php echo $fetch->id ?>">DELETE</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
