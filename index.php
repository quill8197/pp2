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
require_once ("functions.php");

echo '<title>Pair Program 2</title>';
echo '<h1>Pair Program 2</h1>';
echo '<p>PHP Array Practice</p>';

echo '<p>Step 2</p>';
$numbers = [7, 9, 8, 9, 8, 8, 6];
printArr($numbers);


echo '<p>Step 3</p>';
echo 'Functions are in a separate php file';

echo '<p>Step 4</p>';
echo '<p>/The largest value is ' . largest($numbers) . '</p>';

echo '<p>Step 5</p>';
printArr(removeDups($numbers));

echo '<p>Step 6</p>';


