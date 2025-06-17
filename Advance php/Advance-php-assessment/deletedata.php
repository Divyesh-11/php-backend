<?php

include "connection.php";

$id = $_GET['id'];

$sql = "SELECT * FROM employee where id = '$id'";

$run = $conn->query($sql);

$fetch = $run->fetch_object();


$sql = "DELETE FROM employee WHERE id = '$id'";

$run = $conn->query($sql);

if ($run) {
    header("location:index.php");
}
