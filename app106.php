<?php
//6.PHP closures
$anony = function () {
    return 'Lambda';
};
//Closure
echo get_class($anony) . "<br />";
echo gettype($anony) . "<br />";