<!-- Write a script to perform various string operations like concatenation, substring 
extraction, and string length determination.  -->

<?php

$mystr = "Good Morning ...!";

$firststr = "Hello ";
$secondstr = "World....! ";
$thirdstr = "How are you...!<br>";

$concatenation = $firststr . $secondstr . $thirdstr;

echo $concatenation;

$substr = substr($mystr, 2, 8);

echo "Substring : " . $substr . "<br>";

$substrlengh = strlen($mystr);

echo $substrlengh;

?>