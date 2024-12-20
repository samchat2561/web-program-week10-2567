<?php
//7.PHP closures
$sayHi = "Hello";
$closure = function ($name) use ($sayHi) {
    return $sayHi . "-" . $name;
};
//Closure
echo get_class($closure) . "<br />";
echo gettype($closure) . "<br />";
echo $closure("World"). "<br />";

