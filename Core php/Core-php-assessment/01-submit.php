<?php

$con = mysqli_connect('localhost', 'root', '', 'notes');
if ($con) {
    echo "database connected...!<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <table>

            <tr>
                <td>Enter a First name :</td>
                <td><input type='text' name='fname'></td>
            </tr>

            <tr>
                <td>Enter a Last name :</td>
                <td><input type='text' name='lname'></td>
            </tr>

            <tr>
                <td>Enter a Contact number :</td>
                <td><input type='text' name='phone'></td>
            </tr>

            <tr>
                <td>Enter a Subject :</td>
                <td><input type='text' name='subject'></td>
            </tr>

            <tr>
                <td>Enter a Marks :</td>
                <td><input type='text' name='mark'></td>
            </tr>

            <tr>
                <td>Enter a Fees :</td>
                <td><input type='text' name='fees'></td>
            </tr>

            <tr>
                <td><input type='submit' value='Insert' name='insertbtn'></td>
            </tr>

        </table>
    </form>

    <?php
    if (isset($_POST['insertbtn'])) {

        $serialnumber = $_POST['serialnum'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $number = $_POST['phone'];
        $subject = $_POST['subject'];
        $mark = $_POST['mark'];
        $fees = $_POST['fees'];

        $sql = "INSERT INTO users (serial_number,first_name,last_name,mobile_number,subject,marks,fees) VALUES ('$serialnumber','$fname','$lname','$number','$subject','$mark','$fees')";
        $run = mysqli_query($con, $sql);

        if ($run) {
            echo "Recored inserted...!";
            header("location:02-showdata.php");
        }
    }

    ?>
</body>

</html>