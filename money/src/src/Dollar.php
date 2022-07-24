<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Dollar
{
    public int $amount;

    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $manipulator): void
    {
        $this->amount *= $manipulator;
    }

    public function amount(): int
    {
        return $this->amount;
    }
}