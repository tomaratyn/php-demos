<?php

class Money {

    public $amount;
    public $currency;

    public function __construct($amount, $currency = "") {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Money $other) {
        return $this->amount === $other->amount && $this->currency === $other->currency;
    }

    public function times($multiplier) {
        return new Money((int)floor($this->amount * $multiplier), $this->currency);
    }

}