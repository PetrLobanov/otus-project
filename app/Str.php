<?php

namespace App;

use Stringy\Stringy;

class Str
{
    public string $str;
    public function create(string $str) 
    {
        $this->str = $str;
    }

    public function addHello(?string $str = null) 
    {
        return $this->str . $str . 'Hello';
    }

    public function testPackage()
    {
        $str = new Stringy('str');

        echo $str->count();
    }
}