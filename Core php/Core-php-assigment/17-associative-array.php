<!-- Create an associative array for user details (name, email, age) and display them. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            background-color: #f0f4f8;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 700px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px 20px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eef;
        }

        caption {
            font-size: 1.5em;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>

    <table>
        <caption>User Details</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $arr = array(
                array("Name" => "Kuldeep", "Email" => "kuldeepahir@gmail.com", "Age" => 22),
                array("Name" => "Ashish", "Email" => "ashishramnoty1212@gmail.com", "Age" => 19),
                array("Name" => "Sagar", "Email" => "sagarahir@gmail.com", "Age" => 23),
                array("Name" => "Divyesh", "Email" => "dk15@gamil.com", "Age" => 21)
            );

            foreach ($arr as $user) {
                echo "<tr>";
                echo "<td>" . $user["Name"] . "</td>";
                echo "<td>" . $user["Email"] . "</td>";
                echo "<td>" . $user["Age"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>