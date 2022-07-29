<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Money
{
    protected int $amount;

    public function equals(self $that): bool
    {
        return $this->amount === $that->amount();
    }

    public function dollar(int $amount):Dollar
    {
        return New Dollar($amount);
    }
}