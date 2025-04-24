<!-- For Loop (Addition): Add all integers from 0 to 30 and display the total. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label>Enter number:</label>
        <input type="text" name="num">
        <input type="submit">
    </form>

</body>

</html>
<?php
$number = $_POST["num"];
for ($i = 1; $i <= $number; $i++) {
    for ($a = 1; $a <= 10; $a++) {
        echo $number . " x " . $a . " = " . $number * $a . "<br>";
    }
    echo "<br>";
}




// for ($x = 0; $x <= 30; $x++) {
//     $pluse +=  $x;

//     echo $x . " ";
// }
// echo "<br>" . "Sum = " . $pluse;



?>