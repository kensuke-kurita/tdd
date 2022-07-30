<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Franc extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $manipulator): Money
    {
        return new self($this->amount * $manipulator, 'CHF');
    }

    public function amount(): int
    {
        return $this->amount;
    }
}