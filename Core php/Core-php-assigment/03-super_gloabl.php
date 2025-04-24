<!--  Create a form that takes a user's name and email. Use the $_POST super global to 
display the entered data. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global variables</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f4f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        padding: 30px;
    }

    table {
        margin: 0 auto;
    }

    td {
        padding: 15px;
        font-size: 16px;
    }

    input[type="text"] {
        width: 200px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    input[type="email"] {
        width: 200px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    input[type="submit"] {
        width: 100px;
        border: none;
        border-radius: 5px;
        padding: 10px;
        color: white;
        background-color: #007bff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        padding: 10px;
        background-color: #e0ffe0;
        border: 1px solid #00a000;
        border-radius: 5px;
        text-align: center;
    }
</style>

<body>

    <div class="container">

        <form method="post">
            <table>
                <tr>
                    <td>Enter user your name : </td>
                    <td><input type="text" name="name" placeholder="Enter user name...!"></td>
                </tr>
                <tr>
                    <td>Entert user your email address : </td>
                    <td><input type="email" placeholder="abc@gmail.com" name="email"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit"></td>
                </tr>
            </table>

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $u_name = $_POST["name"];

                $u_email = $_POST["email"];


                echo "<div class='result'>$u_name <br> $u_email</div>" . "<br>";
            }
            ?>
        </form>
    </div>
</body>

</html>