<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Checker</title>
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .message-box {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: white;
        }

        .happy-sunday {
            color: #ff4500;
            font-size: 24px;
        }

        .normal-day {
            color: #2e8b57;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="message-box">
        <?php
        $currentday = date("l");

        if ($currentday === "Sunday") {
            echo "<div class='happy-sunday'>Happy Sunday!</div>";
        } else {
            echo "<div class='normal-day'>Today is " . $currentday . ".</div>";
        }
        ?>
    </div>
</body>

</html>