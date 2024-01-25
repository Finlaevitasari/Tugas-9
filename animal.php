<?php
class animal
{
    public $name; // "shaun"
    public $legs = 4; // 4
    public $cold_blooded = "no"; // "no"

    public function __construct($string)
    {
        $this->name = $string;
    }
}

