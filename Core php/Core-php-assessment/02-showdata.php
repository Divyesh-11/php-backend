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
    <table border="3px" align="center" cellpadding="10px">
        <thead>
            <tr>
                <td colspan="8" align="center">
                    Students Data
                </td>
            </tr>
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Mobile Number</td>
                <td>Subject</td>
                <td>Marks</td>
                <td>Cource Fees</td>
                <td>Oprations</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $run = mysqli_query($con, $sql);
            $sno = 0;
            while ($fetch = mysqli_fetch_assoc($run)) {
                $sno += 1;
            ?>
                <tr>
                    <td><?php echo $sno ?></td>
                    <td><?php echo $fetch['first_name'] ?></td>
                    <td><?php echo $fetch['last_name'] ?></td>
                    <td><?php echo $fetch['mobile_number'] ?></td>
                    <td><?php echo $fetch['subject'] ?></td>
                    <td><?php echo $fetch['marks'] ?></td>
                    <td><?php echo $fetch['fees'] ?></td>
                    <td>
                        <a href="03-view.php/?id=<?php echo $fetch['serial_number'] ?>">view</a>
                        <a href="04-delete.php/?id=<?php echo $fetch['serial_number'] ?>">delete</a>
                        <a href="05-edit.php/?id=<?php echo $fetch['serial_number'] ?>">Edit</a>
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="8" align="center">

                    <a href="01-submit.php">clicke to submit page</a>
            </tr>
            </td>
        </tbody>
    </table>



</body>

</html>