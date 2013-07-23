<?php

class Money {

    public $amount;
    public $currency;

    public function __construct($amount, $currency = "") {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times($multiplier) {
        return new Money($this->amount * $multiplier, $this->currency);
    }

}