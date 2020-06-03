<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentProcess() {
        \Stripe\Stripe::setApiKey("sk_test_oErZs9R4GpVyiSDDnzRU9coC004SBtmQSi");

        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => 10000,
            'currency' =>'usd',
            'description'=>'test demo zakaria',
            'source' => $token

        ]);
    }
}
