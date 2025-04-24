<!-- Restaurant Food Category Program: Use a switch case to display the category 
(Starter/Main Course/Dessert) and dish based on user selection.  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
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

        table {
            width: 60%;
            margin-top: 20px;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <form method="post">
        <label for="choice">Enter your choice (starter/main course/Desert) :</label>
        <input type="text" placeholder="starter/main course/Desert" name="choice" id="choice">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strtolower(trim($_POST["choice"]));

        switch ($name) {
            case "starter":
    ?>
                <table>
                    <tr>
                        <th>Dish</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Paneer Chilly</td>
                        <td>250/-</td>
                    </tr>
                    <tr>
                        <td>Dry Manchurian</td>
                        <td>230/-</td>
                    </tr>
                    <tr>
                        <td>Hariyali Kabab</td>
                        <td>270/-</td>
                    </tr>
                </table>
            <?php
                break;
            case "main course":
            ?>
                <table>
                    <tr>
                        <th>Dish</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Paneer Butter Masala</td>
                        <td>350/-</td>
                    </tr>
                    <tr>
                        <td>Palak Paneer</td>
                        <td>270/-</td>
                    </tr>
                    <tr>
                        <td>Veg Handi</td>
                        <td>250/-</td>
                    </tr>
                </table>
            <?php
                break;
            case "desert":
            ?>
                <table>
                    <tr>
                        <th>Dish</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Vanilla</td>
                        <td>50/-</td>
                    </tr>
                    <tr>
                        <td>Strawberry</td>
                        <td>60/-</td>
                    </tr>
                    <tr>
                        <td>Chocolate</td>
                        <td>70/-</td>
                    </tr>
                </table>
    <?php
                break;
            default:
                echo "<div style='color:red;'>Invalid choice. Please enter starter, main course, or desert.</div>";
        }
    }
    ?>
</body>

</html>