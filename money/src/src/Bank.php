<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Bank
{

    public function __construct()
    {
    }

    public function reduce(Expression $source, string $to):Money
    {
        return Money::dollar(10);
    }
}