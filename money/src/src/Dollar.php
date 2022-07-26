<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Dollar extends Money
{

    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $manipulator): ?Money
    {
        return new self($this->amount * $manipulator);
    }

    public function amount(): int
    {
        return $this->amount;
    }
}