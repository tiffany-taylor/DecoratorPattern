<?php
namespace application\Beverages;

use Beverages\Beverage;

abstract class CondimentDecorator extends Beverage
{
    abstract public function getDescription();
}

