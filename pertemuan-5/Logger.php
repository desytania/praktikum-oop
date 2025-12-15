<?php

interface Logger {
    public function log(string $pesan): void;
}

class FileLogger implements Logger {

    public function log(string $pesan): void {
        echo "Menulis ke file: $pesan\n";
    }
}

class ConsoleLogger implements Logger {

    public function log(string $pesan): void {
        echo "Menampilkan ke konsol: $pesan\n";
    }
}

$lg = new ConsoleLogger();
$lg->log("Test log");