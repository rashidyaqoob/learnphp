<?php
declare(strict_types=1);

namespace App;
use DateTime as DT;
new DT();

class Account {
    public string $name;
    public float $balance;
    public Socialmedia $socialMedia;

    public function __construct($name, $balance) {
        $this->name = $name;
        $this->balance = $balance;
        $this->socialMedia = new Socialmedia();
    }

    public function deposit(float $amount) {
        $this->balance += $amount;
        return $this;
    }
}
