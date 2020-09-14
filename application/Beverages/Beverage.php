<?php
namespace Beverages;

abstract class Beverage
{
    public string $description;
    
    public function __construct(string $description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function cost()
    {
        
    }
}

