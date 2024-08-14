<?php

namespace App\Services;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

class PayPalClient
{
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    public static function environment()
    {
        $clientId = config('paypal.client_id');
        $clientSecret = config('paypal.secret');
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}
