<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Dollar extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }


}