<?php

namespace App\Http\Controllers;

use App\Billing\Billing;
use App\SetDiscount\SetDiscount;
use Illuminate\Http\Request;

class PaymentContoller extends Controller
{
    public function store(Billing $payment,SetDiscount $discount)
    {
        // $payment = new Billing('usd');
        // $discount = new SetDiscount();
        $discount->setDiscountLogic();
        dd($payment->charge(2500));
    }
}

