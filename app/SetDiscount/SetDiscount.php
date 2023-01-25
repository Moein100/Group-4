<?php
namespace App\SetDiscount;

use App\Billing\Billing;

class SetDiscount
{
    public function __construct(private Billing $payment) {
        
    }
    public function setDiscountLogic()
    {
        // logic
        $this->payment->discount(500);
    }
}