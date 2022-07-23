<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Dollar
{
    private int $amount;

    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $int)
    {
        $this->amount = $this->amount * 2;
    }

    public function amount()
    {
        return $this->amount;
    }
}