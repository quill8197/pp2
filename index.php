<?php
/**
 * Quill McConnell
 * 4/17/20
 * index.php
 * Pair Program 2
 */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo '<title>Pair Program 2</title>';
echo '<h1>Pair Program 2</h1>';
echo '<p>PHP Array Practice</p>';

echo '<p>Step 1</p>';
$numbers = [7, 9, 8, 9, 8, 8, 6];
printArr($numbers);














//functions
function printArr(array $array)
{
    foreach ($array as $value)
    {
        echo '<p>' . $value . '</p>';
    }
}