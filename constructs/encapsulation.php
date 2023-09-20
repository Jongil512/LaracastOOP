<?php

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {

    }

    public function favoriteTeam()
    {

    }

    private function thingsThatKeepUpAtNight()
    {
        return 'We are all going to die.';
    }
}

$bob = new Person('Bob');

var_dump($bob->thingsThatKeepUpAtNight());
