<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use kohortpay\sdk;
use kohortpay\sdk\Models\Components;

$security = new Components\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = sdk\KohortPay::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Components\CreatePaymentIntentDto();
    $request->amount = 5000;
    $request->checkoutSessionId = 'cs_1abc2def3ghi';
    $request->customerId = 'cus_1abc2def3ghi';
    $request->metadata = new Components\Metadata();
    $request->status = Components\Status::RequiresPaymentMethod;

    $response = $sdk->paymentIntents->create($request);

    if ($response->createPaymentIntentDto !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->