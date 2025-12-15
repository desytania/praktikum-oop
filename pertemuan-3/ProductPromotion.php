<?php

class Product {

    public function __construct(
        public string $name,
        public int $price
    ) {}
}

$p = new Product("Laptop", 15000);
echo $p->name . " - " . $p->price;

// Versi tanpa property promotion
class ProductManual {
    public string $name;
    public int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$p2 = new ProductManual("Laptop", 15000);
echo "\n" . $p2->name . " - " . $p2->price;