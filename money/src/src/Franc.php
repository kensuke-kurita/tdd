<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Franc extends Money
{
    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'CHF';
    }

    public function times(int $manipulator): Money
    {
        return new self($this->amount * $manipulator);
    }

    public function amount(): int
    {
        return $this->amount;
    }
}