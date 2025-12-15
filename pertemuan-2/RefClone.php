<?php

class User {
    public string $name;
    public int $age;
}

$a = new User();
$a->name = "Budi";
$a->age = 20;

$b = $a; // referensi
$b->name = "Sinta";

echo $a->name . PHP_EOL; // Sinta

$c = clone $a; // clone
$c->name = "Tono";

echo $a->name . PHP_EOL; // Sinta
echo $c->name . PHP_EOL; // Tono