<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.2 & 7.3
 * @ Decoder version: 1.0.6
 * @ Release: 10/08/2022
 */

namespace App\Http\Controllers\PaymentGateways;

class PayPal implements PaymentGatewayInterface
{
    private $apiContext = NULL;
    public function __construct()
    {
        $gatewayData = \App\PaymentGateway::where("internal_name", "paypal")->first();
        $this->config = json_decode($gatewayData->settings);
        $this->apiContext = new \PayPal\Rest\ApiContext(new \PayPal\Auth\OAuthTokenCredential($this->config->client_id, $this->config->secret));
        if ($this->config->mode === "test") {
            $this->apiContext->setConfig(["mode" => "sandbox"]);
        } else {
            $this->apiContext->setConfig(["mode" => "live"]);
        }
    }
    public function normalizeCurrency($currency)
    {
        $new_currency = "";
        switch ($currency) {
            case "\$":
                $new_currency = "USD";
                break;
            default:
                return $new_currency;
        }
    }
    public function process(stdClass $request)
    {
        $response = new \stdClass();
        $user = \Auth::User();
        $payment = \PayPal\Api\Payment::get($request->paymentId, $this->apiContext

// This is the demo version. This version only decode 30 lines.