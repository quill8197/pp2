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
    return max($array);
}

function removeDups(array $array)
{
    return array_unique($array);
}

function distribution(array $array)
{
    return array_count_values($array);
}