<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<style>
    body {
        background-color: #f0f4f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        margin: auto;
    }

    td {
        padding: 10px;
        font-size: 16px;
    }

    input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 200px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
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
                <tr p="2">
                    <td>User Enter First Number :</td>
                    <td><input type="text" placeholder="Enter Only Integer value....." name="fnum"></td>
                </tr>
                <tr>
                    <td>User Enter Second Number :</td>
                    <td><input type="text" placeholder="Enter Only Integer value....." name="snum"></td>
                </tr>
                <tr>
                    <td>User Enter your choice :</td>
                    <td><input type="text" placeholder="+,-,%,/,*" name="choice"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Calculate"></td>
                </tr>
            </table>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num1 = $_POST["fnum"];
            $num2 = $_POST["snum"];
            $cal = $_POST["choice"];
            $result = "";

            if ($cal == "+") {
                $result = "Sum = " . $num1 + $num2;
            } elseif ($cal == "-") {
                $result = "Subtraction = " . $num1 - $num2;
            } elseif ($cal == "%") {
                $result = "Reminder = " . $num1 % $num2;
            } elseif ($cal == "/") {
                if ($num2 != 0) {
                    $result = "Division = " . $num1 / $num2;
                } else {
                    echo "Division by zero is not allowed!";
                }
            } else {
                $result = "Multiplication = " . $num1 * $num2;
            }

            echo "<div class='result'>$result</div>";
        }
        ?>
    </div>
</body>

</html>