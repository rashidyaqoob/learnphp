<?php
declare(strict_types=1);

namespace App;

new \DateTime();

class Account
{
    public Socialmedia $socialMedia;
    public string $name;
    public float $balance;

    public function __construct(string $newName, float $newBalance)
    {
        $this->name = $newName;
        $this->balance = $newBalance;
        $this->socialMedia = new Socialmedia();
    }
}