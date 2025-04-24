<!-- Write a script to shift all zero values to the bottom of an array.  -->

<?php

function shiftZerosToBottom($arr)
{
    $nonZero = [];
    $zeros = [];

    foreach ($arr as $value) {
        if ($value == 0) {
            $zeros[] = 0;
        } else {
            $nonZero[] = $value;
        }
    }

    return array_merge($nonZero, $zeros);
}

// Example usage
$originalArray = [0, 5, 0, 3, 4, 0, 9, 0, 1];
$result = shiftZerosToBottom($originalArray);

echo "Original Array: ";
print_r($originalArray);

echo "Modified Array: ";
print_r($result);

?>