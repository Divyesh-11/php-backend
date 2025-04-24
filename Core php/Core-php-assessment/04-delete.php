<?php

$con = mysqli_connect('localhost', 'root', '', 'notes');
if ($con) {
    echo "databse connected...!";
}

$id = $_GET['id'];
echo $id;

$sql = "SELECT * FROM users WHERE serial_number = '$id' ";
$run = mysqli_query($con, $sql);

// $fetch = mysqli_fetch_array($run);

$sql = "DELETE FROM users WHERE serial_number = '$id' ";
$run = mysqli_query($con, $sql);

if ($run) {
    echo "Recored deleted...!";
    header("location:/03-03-2025-php/assessment/02-showdata.php");
}
