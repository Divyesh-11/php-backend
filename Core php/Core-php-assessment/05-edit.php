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
    <?php
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE serial_number = '$id' ";
    $run = mysqli_query($con, $sql);

    $fetch = mysqli_fetch_array($run);
    ?>
    <form method="post">
        <table>
            <tr>
                <td>serial Number : </td>
                <td><input type="text" value="<?php echo $fetch['serial_number'] ?>" readonly></td>
            </tr>

            <tr>
                <td>Firsh Name : </td>
                <td><input type="text" value="<?php echo $fetch['first_name']  ?>" name="fname"></td>
            </tr>

            <tr>
                <td>Last Name : </td>
                <td><input type="text" value="<?php echo $fetch['last_name'] ?>" name="lname"></td>
            </tr>

            <tr>
                <td>Contact Number : </td>
                <td><input type="text" value="<?php echo $fetch['mobile_number'] ?>" name="phone"></td>
            </tr>

            <tr>
                <td>Subject : </td>
                <td><input type="text" value="<?php echo $fetch['subject'] ?>" name="subjec"></td>
            </tr>

            <tr>
                <td>Mark : </td>
                <td><input type="text" value="<?php echo $fetch['marks'] ?>" name="mark"></td>
            </tr>

            <tr>
                <td>Fees : </td>
                <td><input type="text" value="<?php echo $fetch['fees'] ?>" name="fee"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Edit" name="editbtn"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['editbtn'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $subject = $_POST['subjec'];
        $mark = $_POST['mark'];
        $fee = $_POST['fee'];

        $sql = mysqli_query($con, "UPDATE users SET first_name='$fname',last_name='$lname',mobile_number='$phone',subject='$subject',marks='$mark',fees='$fee' WHERE serial_number = '$id' ");

        if ($sql) {
            header("location:/03-03-2025-php/assessment/02-showdata.php");
        }
    }

    ?>

</body>

</html>