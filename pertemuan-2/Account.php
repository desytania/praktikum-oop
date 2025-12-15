<?php

class Account {
    public string $owner;
    protected float $balance;
    private string $pin;

    public function __construct(string $owner, float $balance, string $pin) {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->pin = $pin;
    }

    public function getBalance(string $pin): float {
        if ($pin === $this->pin) {
            return $this->balance;
        }
        throw new Exception("PIN salah");
    }
}

$acc = new Account("Rani", 5000, "1234");
echo $acc->owner . PHP_EOL;
echo $acc->getBalance("1234") . PHP_EOL;
echo $acc->balance; // ERROR
echo $acc->pin;     // ERROR

class PremiumAccount extends Account {
    public function debugBalance(): float {
        return $this->balance;
    }
}