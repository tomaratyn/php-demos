<?php

require_once "Money.php";

class MoneyTest extends PHPUnit_Framework_TestCase {

    public function testEquals() {
        $oneDollar = new Money(1, "CAD");
        $oneFranc = new Money(1, "CHF");
        $twoDollars = new Money(2, "CAD");
        $alsoTwoDollars = new Money(2, "CAD");
        $this->assertTrue($twoDollars->equals($alsoTwoDollars));
        $this->assertTrue($alsoTwoDollars->equals($twoDollars));
        $this->assertFalse($oneDollar->equals($oneFranc));
        $this->assertFalse($oneDollar->equals($twoDollars));
    }

    public function testTimes() {
        $dollar = new Money(10);
        $tenDollars = new Money(20);
        $fiveDollars = new Money(5);
        $this->assertTrue($tenDollars->equals($dollar->times(2)));
        $this->assertTrue($fiveDollars->equals($dollar->times(.5)));
    }

    public function testConstructor() {
        $dollar = new Money(1, "CAD");
        $swissFranc = new Money(1, "CHF");
        $this->assertNotEquals($dollar, $swissFranc);
    }

}
