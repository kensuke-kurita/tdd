<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\Tests\Unit;

use KensukeKurita\Tdd\Money\src\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = New Dollar(5);
        $product = $five->times(2);
        self::assertEquals(10, $product->amount());
        $product->times(3);
        self::assertEquals(15, $product->amount());
    }
}