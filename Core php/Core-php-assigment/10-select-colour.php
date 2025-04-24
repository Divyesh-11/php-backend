<!-- Color Selector: Write a program to display the name of a color based on user input 
(red, green, blue). -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Selector</title>
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
            text-align: center;
            width: 350px;
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

        .result-box {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form method="post">
            <table>
                <tr>
                    <td>Enter your color choice (red, green, blue):</td>
                </tr>
                <tr>
                    <td><input type="text" name="colour" placeholder="red, green, blue"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Show Color"></td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $colour = strtolower(trim($_POST["colour"]));

            switch ($colour) {
                case "red":
                    $colorCode = "#EA0B0B";
                    break;
                case "green":
                    $colorCode = "#0BEA2E";
                    break;
                case "blue":
                    $colorCode = "#0B5BEA";
                    break;
                default:
                    $colorCode = null;
            }

            if ($colorCode) {
                echo "<div class='result-box' style='background-color: $colorCode;'>You selected: <b>$colour</b></div>";
            } else {
                echo "<div class='result-box' style='background-color: #f8d7da; color: #721c24;'>Invalid color! Please enter red, green, or blue.</div>";
            }
        }
        ?>
    </div>
</body>

</html>