<?php

class Product {

    public function __construct() {
        echo "Objek Product dibuat\n";
    }
}

$p = new Product();

// Versi dengan parameter
class Product2 {

    public function __construct(string $name) {
        echo "Produk $name dibuat\n";
    }
}

$p2 = new Product2("Laptop");