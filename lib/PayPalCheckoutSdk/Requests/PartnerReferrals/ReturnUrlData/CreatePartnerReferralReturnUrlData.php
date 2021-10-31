<?php

namespace PayPalCheckoutSdk\Requests\PartnerReferrals\ReturnUrlData;

class CreatePartnerReferralReturnUrlData
{
    public $merchantId;
    public $merchantIdInPayPal;
    public $permissionsGranted;
    public $accountStatus;
    public $consentStatus;
    public $productIntentId;
    public $isEmailConfirmed;
    public $returnMessage;
    public $riskStatus;
/*
 * merchantId	The unique ID of the seller in your system that you specified in the Partner Referrals API call in the tracking_id field.
merchantIdInPayPal	The merchant ID of your seller's PayPal account.
permissionsGranted	A Boolean indicating whether the seller granted you the permissions you specified in the Partner Referrals API call.
accountStatus	PayPal sends BUSINESS_ACCOUNT if a business account was created; otherwise, nothing is sent.
consentStatus	A Boolean indicating whether the seller consented to share their credentials with you.
productIntentId	It is set to addipmt.
isEmailConfirmed	A Boolean indicating whether the seller has confirmed their email with PayPal.
returnMessage	A hardcoded message containing next steps for the seller to take with PayPal. PayPal only sends this message for business accounts where the email address is not confirmed. PayPal does not send this message for any account where product name is PPCP.
riskStatus	The product provisioning status. PayPal only sends this for accounts where product name is PPCP. Possible values are SUBSCRIBED, SUBSCRIBED_WITH_LIMIT, DECLINED, MANUAL_REVIEW, and NEED_MORE_DATA.
 */
}