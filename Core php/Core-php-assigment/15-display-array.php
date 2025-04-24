<!-- Display the value of an array.  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array Elements</title>
    <style>
        body {
            background-color: #eef2f7;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .card {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .element {
            padding: 10px 15px;
            margin: 8px 0;
            background-color: #f8f9fa;
            border-left: 4px solid #0d6efd;
            border-radius: 6px;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>Array Elements</h2>
        <?php
        $arr = array(11, 12, 13, 14, 15, 16);

        for ($i = 0; $i < count($arr); $i++) {
            echo "<div class='element'>Element $i: " . $arr[$i] . "</div>";
        }
        ?>
    </div>

</body>

</html>
