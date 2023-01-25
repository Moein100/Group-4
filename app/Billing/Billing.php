<?php
namespace App\Billing;

class Billing
{

    private $discount;
    public function __construct(private $currency) {
        $this->discount = 0;
    }

    public function discount($amount)
    {
        $this->discount = $amount;
    }



    public function charge($amount)
    {
        return 
        [
            'amount' => $amount-$this->discount,
            'currency' => $this->currency,
            'discount' => $this->discount

        ];
    }
}