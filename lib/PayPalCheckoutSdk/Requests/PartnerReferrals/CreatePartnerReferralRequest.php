<?php

namespace PayPalCheckoutSdk\Requests\PartnerReferrals;

use PayPalHttp\HttpRequest;

class CreatePartnerReferralRequest extends HttpRequest
{
    const PRODUCT_TYPE_EXPRESS_CHECKOUT = "EXPRESS_CHECKOUT";
    const PRODUCT_TYPE_PPPLUS = "PPPLUS";
    const PRODUCT_TYPE_WEBSITE_PAYMENT_PRO = "WEBSITE_PAYMENT_PRO";
    const PRODUCT_TYPE_PPCP = "PPCP";

    /**
     * @param $businessInformation, https://developer.paypal.com/docs/api/partner-referrals/v2/#definition-business_entity
     * @param $accountEmail
     * @param $operations, https://developer.paypal.com/docs/api/partner-referrals/v2/#definition-operation
     * @param $products, https://developer.paypal.com/docs/api/partner-referrals/v2/#definition-product_name
     * @param $dataConsent, https://developer.paypal.com/docs/api/partner-referrals/v2/#definition-legal_consent
     * @param $configOverride, https://developer.paypal.com/docs/api/partner-referrals/v2/#definition-partner_configuration_override
     */
    function __construct(
        $businessInformation,
        $accountEmail,
        $operations,
        $products = [self::PRODUCT_TYPE_EXPRESS_CHECKOUT],
        $dataConsent = [],
        $configOverride = []
    ) {
        parent::__construct("/v2/customer/partner-referrals", "POST");

        $this->body = [
            'business_entity' => $businessInformation,
            'email' => $accountEmail,
            'operations' => $operations,
            'products' => $products,
            'legal_consents' => $dataConsent,
            'partner_config_override' => $configOverride
        ];
        $this->headers["Content-Type"] = "application/json";
    }
}