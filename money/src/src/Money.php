<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

abstract class Money
{
    protected int $amount;

    abstract public function times(int $multiplier): self;

    public function equals(self $that): bool
    {
        return $this->amount === $that->amount()
            && $this::class === $that::class;
    }

    public static function dollar(int $amount):Money
    {
        return New Dollar($amount);
    }

    public static function franc(int $amount):Money
    {
        return New Franc($amount);
    }
}