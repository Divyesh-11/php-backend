<?php

$con = mysqli_connect('localhost', 'root', '', 'notes');
if ($con) {
    echo "databse connected...!";
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
    <a href="/03-03-2025-php/assessment/02-showdata.php">Enter</a>

    <table border="5px" cellpadding="10px">
        <tr>
            <td>serial number :</td>
            <td><?php echo $fetch['serial_number'] ?></td>
        </tr>

        <tr>
            <td>First Name :</td>
            <td><?php echo $fetch['first_name'] ?></td>
        </tr>

        <tr>
            <td>Last Name :</td>
            <td><?php echo $fetch['last_name'] ?></td>
        </tr>

        <tr>
            <td>Subject Name :</td>
            <td><?php echo $fetch['subject'] ?></td>
        </tr>

        <tr>
            <td>Student Mark :</td>
            <td><?php echo $fetch['marks'] ?></td>
        </tr>
        <tr>
            <td>Student Fees :</td>
            <td><?php echo $fetch['fees'] ?></td>
        </tr>


        <!-- <tr>
            <td><input type="submit" value="Edit" name="editbtn"></td>
        </tr> -->

    </table>

</body>

</html>