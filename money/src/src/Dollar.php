<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Dollar extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $manipulator): Money
    {
        return Money::dollar($this->amount * $manipulator, $this->currency);
    }

    public function amount(): int
    {
        return $this->amount;
    }
}