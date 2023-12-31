<?php

class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

    public function increment()
    {
        $this->age += 1;
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);
$age->increment();
var_dump($age->get());