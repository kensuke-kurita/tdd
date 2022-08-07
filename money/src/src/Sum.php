<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Sum implements Expression
{
    public Money $augend;
    public Money $addend;

    /**
     * @param Money $augend
     * @param Money $addend
     */
    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }
}