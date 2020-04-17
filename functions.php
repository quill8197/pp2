<?php
function printArr(array $array)
{
    foreach ($array as $value)
    {
        echo '<p>' . $value . '</p>';
    }
}

function largest(array $array)
{
    echo '<p>The largest number is ' , max($array) . '</p>';
}