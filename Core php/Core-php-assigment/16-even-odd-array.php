<!-- Find and display the number of odd and even elements in an array.  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Odd & Even Elements</title>
    <style>
        body {
            background-color: #f3f4f6;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .box {
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            color: #333;
        }

        .even {
            color: #0d6efd;
        }

        .odd {
            color: #dc3545;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .item {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>Odd & Even Elements</h2>
        <?php
        $arr = array(11, 12, 13, 14, 15, 16);

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 == 0) {
                echo "<div class='item even'>This is an even element : " . $arr[$i] . "</div>";
            } else {
                echo "<div class='item odd'>This is an odd element : " . $arr[$i] . "</div>";
            }
        }
        ?>
    </div>

</body>

</html>