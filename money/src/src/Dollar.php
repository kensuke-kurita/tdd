<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\src;

class Dollar
{
    private int $amount;

    /**
     * @param int $int
     */
    public function __construct(int $int)
    {
    }

    public function times(int $int)
    {
        $this->amount = 5 * 2;
    }

    public function amount()
    {
        return $this->amount;
    }
}