<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use kohortpay\sdk;
use kohortpay\sdk\Models\Components;

$security = new Components\Security();
$security->bearer = '';

$sdk = sdk\KohortPay::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->paymentIntents->findAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->