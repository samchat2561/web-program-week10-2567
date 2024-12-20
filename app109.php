<?php
//9.Pass an arrow function to a function
$list = [10, 20, 30];
$result = array_map(
    fn($item) => $item * 2,
    $list
);

print_r($result);
