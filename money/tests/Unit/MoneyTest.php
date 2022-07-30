<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\Tests\Unit;

use KensukeKurita\Tdd\Money\src\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = Money::dollar(5,"USD");
        $this->assertObjectEquals(Money::dollar(10, "USD"), $five->times(2));
        $this->assertObjectEquals(Money::dollar(15, "USD"), $five->times(3));
    }

    public function testEquality(){
        $this->assertTrue(Money::dollar(5, "USD")->equals(Money::dollar(5, "USD")));
        $this->assertFalse(Money::dollar(5, "USD")->equals(Money::dollar(6, "USD")));
        $this->assertTrue((Money::franc(5))->equals(Money::franc(5)));
        $this->assertFalse((Money::franc(5))->equals(Money::franc(6)));
        $this->assertFalse((Money::dollar(5, "USD"))->equals(Money::franc(5)));
    }

    public function testFrancMultiplication(){
        $five = Money::franc(5);
        $this->assertObjectEquals(Money::franc(10), $five->times(2));
        $this->assertObjectEquals(Money::franc(15), $five->times(3));
    }

    public function testCurrency(){
        $this->assertEquals('USD', Money::dollar(1, "USD")->currency());
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }
}