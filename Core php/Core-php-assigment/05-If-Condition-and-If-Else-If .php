<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even/Odd Checker</title>
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
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            padding: 10px;
            font-size: 16px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
        }

        .even {
            background-color: #e0ffe0;
            color: #006400;
        }

        .odd {
            background-color: #ffe0e0;
            color: #8b0000;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <table>
                <tr>
                    <td colspan="2">Enter a number to check if it's Even or Odd:</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="number" placeholder="Enter Only integer value...."></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Check"></td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num = $_POST["number"];

            if (is_numeric($num)) {
                if ($num % 2 == 0) {
                    echo "<div class='result even'>$num is an Even number.</div>";
                } else {
                    echo "<div class='result odd'>$num is an Odd number.</div>";
                }
            } else {
                echo "<div class='result odd'>Please enter a valid number!</div>";
            }
        }
        ?>
    </div>
</body>

</html>