<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Dollar
{
    private int $amount = 10;

    /**
     * @param int $int
     */
    public function __construct(int $int)
    {
    }

    public function times(int $int)
    {
    }

    public function amount()
    {
        return $this->amount;
    }
}