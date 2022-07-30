<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Dollar extends Money
{
    private string $currency;

    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'USD';
    }

    public function times(int $manipulator): Money
    {
        return new self($this->amount * $manipulator);
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function currency(): string
    {
        return $this->currency;
    }
}