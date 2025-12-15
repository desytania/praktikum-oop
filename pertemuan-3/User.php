<?php

class User {

    public function __construct(
        public string $name = "Guest",
        public int $age = 0
    ) {}
}

$u1 = new User();
$u2 = new User("Rani", 22);
$u3 = new User("Budi");

echo $u1->name . "\n"; // Guest
echo $u2->name . "\n"; // Rani
echo $u3->name . "\n"; // Budi