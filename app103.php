<?php
//3.Passing an anonymous function to another function
$list = [10, 20, 30];
$result = array_map(function ($element): int {
    return $element * 2;
}, $list);

print_r($result);
