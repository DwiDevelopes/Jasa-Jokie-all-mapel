<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once "/path/to/vendor/autoload.php";

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("thtyhtytjSFCEGRegrggr");
$token = getenv("TeffefDRHTRHDGERGRGERHBF");
$twilio = new Client($sid, $token);

$message = $twilio->messages->create(
    "whatsapp:+6289652969323", // to
    [
        "from" => "whatsapp:+6289652969323",
        "body" => "Hello there! my name is dwi bakti n dev",
    ]
);

print $message->body;


output_reset_rewrite_vars;
{
  "sid": "thtyhtytjSFCEGRegrggr",
  "service_sid": "effefDRHTRHDGERGRGERHBF",
  "account_sid": "ADWwfregtrWDFEwege5y56y",
  "to": "+6289652969323",
  "channel": "whatsapp",
  "status": "pending",
  "valid": false,
  "date_created": "2024-07-30T20:00:00Z",
  "date_updated": "2024-07-30T20:00:00Z",
  "lookup": {},
  "amount": null,
  "payee": null,
  "send_code_attempts": [
    {
      "time": "2024-07-30T20:00:00Z",
      "channel": "whatsapp",
      "attempt_sid": "whatsapp"
    }
  ],
  "sna": null,
  "url": "https://verify.twilio.com/v2/Services/dwibaktindev/Verifications/dwibaktindev"
}
