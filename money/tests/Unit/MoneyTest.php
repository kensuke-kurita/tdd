<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\Tests\Unit;

use KensukeKurita\Tdd\Money\src\Bank;
use KensukeKurita\Tdd\Money\src\Money;
use KensukeKurita\Tdd\Money\src\Sum;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = Money::dollar(5);
        $this->assertObjectEquals(Money::dollar(10), $five->times(2));
        $this->assertObjectEquals(Money::dollar(15), $five->times(3));
    }

    public function testEquality(){
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));
    }

    public function testCurrency(){
        $this->assertEquals('USD', Money::dollar(1)->currency());
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }

    public function testSimpleAddition(){
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, "USD") ;
        $this->assertObjectEquals(Money::dollar(10), $reduced);
    }

    public function testPlusReturnsSum(){
        $five = Money::dollar(5);
        $result = $five->plus($five);
        $sum = new Sum($five,  $five);
        $this->assertObjectEquals($five, $sum->augend);
        $this->assertObjectEquals($five, $sum->addend);
    }

    public function testReduceSum()
    {
        $sum = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, "USD");
        self::assertObjectEquals(Money::dollar(7), $result);

    }
}