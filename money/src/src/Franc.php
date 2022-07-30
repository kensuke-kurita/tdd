<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Franc extends Money
{
    public function times(int $manipulator): Money
    {
        return new self($this->amount * $manipulator, $this->currency);
    }

    public function amount(): int
    {
        return $this->amount;
    }
}