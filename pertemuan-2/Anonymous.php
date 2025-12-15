<?php

$logger = new class {
    public function log(string $message) {
        echo "[LOG] $message\n";
    }
};

$logger->log("Sistem berjalan");

$infoLogger = new class ("INFO") {
    public function __construct(public string $level) {}

    public function log(string $msg) {
        echo "[$this->level] $msg\n";
    }
};

$infoLogger->log("Aplikasi siap");