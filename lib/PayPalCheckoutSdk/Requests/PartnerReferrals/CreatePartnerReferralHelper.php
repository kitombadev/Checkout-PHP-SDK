<?php

namespace PayPalCheckoutSdk\Requests\PartnerReferrals;

class CreatePartnerReferralHelper
{
    public function createReturnUrlConfigOverride($returnUrl) {
        return [
            'return_url' => $returnUrl
        ];
    }

    public function createDataConsent() {
        return [
            [
                "type" => "SHARE_DATA_CONSENT",
                "granted" => true
            ]
        ];
    }

    /**
     * https://developer.paypal.com/docs/api/partner-referrals/v2/#definition-rest_endpoint_feature
     *
     * @return array[]
     */

    public function createApiOperations() {
        return [
            [
                "operation" => "API_INTEGRATION",
                "api_integration_preference" => [
                    "integration_method" => "PAYPAL",
                    "integration_type" => "THIRD_PARTY",
                    "third_party_details" => [
                        "features" => [
                            "PAYMENT",
                            "REFUND"
                        ]
                    ]
                ]
            ]
        ];
    }
}