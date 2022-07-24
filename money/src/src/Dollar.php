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

    public function times(int $manipulator): ?self
    {
        return new self($this->amount * $manipulator);
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function equals(self $that): bool
    {
        return $this->amount === $that->amount();
    }
}