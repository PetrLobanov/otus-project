<?php

class Str
{
    public string $str;
    public function create(string $str) 
    {
        $this->str = $str;
    }

    public function addHello() 
    {
        return $this->str . 'Hello';
    }
}