<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Money
{
    protected int $amount;
    protected string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(self $that): bool
    {
        return $this->amount === $that->amount()
            && $this->currency === $that->currency;
    }

    public static function dollar(int $amount, string $currency):Money
    {
        return New Dollar($amount, $currency);
    }

    public static function franc(int $amount, string $currency):Money
    {
        return New Franc($amount, $currency);
    }

    public function currency(): string
    {
        return $this->currency;
    }
}