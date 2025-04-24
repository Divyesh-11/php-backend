<!-- Ternary Operator Example: Write a script using the ternary operator to display a 
message if the age is greater than 18.  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        table {
            margin: 0 auto;
            width: 100%;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result-message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .eligible {
            background-color: #d4edda;
            color: #155724;
        }

        .not-eligible {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form method="post">
            <table>
                <tr>
                    <td>Enter your age :</td>
                </tr>
                <tr>
                    <td><input type="text" name="age" placeholder="Enter only integer value...."></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Check"></td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $age = $_POST["age"];

            if (is_numeric($age)) {
                $result = ($age > 18) ?
                    "<div class='result-message eligible'>You are eligible for voting.</div>" :
                    "<div class='result-message not-eligible'>You are not eligible for voting.</div>";
                echo $result;
            } else {
                echo "<div class='result-message not-eligible'>Please enter a valid number.</div>";
            }
        }
        ?>
    </div>
</body>

</html>