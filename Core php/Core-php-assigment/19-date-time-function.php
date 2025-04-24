<!-- Write a script to display the current date and time in different formats.  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time Formats</title>
    <style>
        body {
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .datetime-box {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            line-height: 1.8;
            color: #333;
        }

        .datetime-box h2 {
            margin-top: 0;
            font-size: 1.5em;
            color: #007BFF;
        }

        .datetime-box span {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="datetime-box">
        <h2>Current Date & Time</h2>
        <span>Format 1 (mm-dd-yy h:i:s a): <strong><?php echo date("m-d-y h:i:s a"); ?></strong></span>
        <span>Format 2 (Mon-Day-Year G:i:s A): <strong><?php echo date("M-D-Y G:i:s A"); ?></strong></span>
        <span>Format 3 (Full readable): <strong><?php echo date("F j, Y, g:i a"); ?></strong></span>
        <span>Format 4 (Full readable): <strong><?php echo date(DATE_RFC2822); ?></strong></span>
    </div>
</body>

</html>