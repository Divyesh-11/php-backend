<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 50px;
        }

        .nav {
            text-align: center;
            margin-bottom: 30px;
        }

        .nav a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            margin: 0 5px;
            font-weight: bold;
        }

        .nav a:hover {
            background-color: #0056b3;
        }

        form {
            background: #fff;
            max-width: 450px;
            margin: auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #218838;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="nav">
        <a href="index.php">Add Employee</a>
        <a href="viewdata.php">View Employee</a>
    </div>

    <form method="post">
        <div>
            <label>First Name</label>
            <input type="text" name="fname" required>
        </div>

        <div>
            <label>Last Name</label>
            <input type="text" name="lname" required>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Mobile</label>
            <input type="text" name="phone" required>
        </div>

        <div>
            <label>Address</label>
            <textarea name="address" required></textarea>
        </div>

        <div>
            <label>Gender</label>
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female"> Female
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="pass" required>
        </div>

        <div>
            <label>Confirm Password</label>
            <input type="password" name="cpass" required>
        </div>

        <div>
            <input type="submit" name="insert" value="Submit">
        </div>
    </form>

    <?php
    if (isset($_POST['insert'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $pass = $_POST['pass'];
        $confirmpass = $_POST['cpass'];

        if ($pass !== $confirmpass) {
            echo "<p class='error'>Passwords do not match!</p>";
        } else {
            $sql = "INSERT INTO employee (fname,lname,email,mobile,address,gender,password) VALUES ('$fname','$lname','$email','$phone','$address','$gender','$pass')";

            $run = $conn->query($sql);

            if ($run) {
                header("Location: index.php");
                exit();
            } else {
                echo "<p class='error'>Error: " . $conn->error . "</p>";
            }
        }
    }
    ?>

</body>

</html>