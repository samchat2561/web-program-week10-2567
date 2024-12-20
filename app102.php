<?php
//2.Anonymous functions
$sayHi = function ($name): string {
    return "$name:Anonymous functions<br>";
};

echo $sayHi('2.1 Mark');
echo $sayHi('2.2 John');
echo $sayHi('2.3 Elon');
