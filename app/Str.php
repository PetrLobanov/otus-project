<?php

namespace App;

class Str
{
    public function __construct(public string $str)
    {}

    public function addHello(?string $str = null) 
    {
        return $this->str . $str . 'Hello';
    }
}