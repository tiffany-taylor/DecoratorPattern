<?php

require_once __DIR__ . 'vendor/autoload.php';

class Coffee
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}