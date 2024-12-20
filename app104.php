<?php
//4.Return anonymous function from a function
function multiplier($x)
{
    return function ($y,$z) use ($x) {
        return $x * $y + $z;
    };
}
$double = multiplier(2);
echo $double(100,10)."<br />";

$tripple = multiplier(3);
echo $tripple(100,10)."<br />";
