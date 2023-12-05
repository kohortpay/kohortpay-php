# PaymentIntents


### Available Operations

* [paymentIntentsControllerFindAll](#paymentintentscontrollerfindall) - Retrieve all Payment Intents
* [paymentIntentsControllerCreate](#paymentintentscontrollercreate) - Create a new Payment Intent
* [paymentIntentsControllerFindOne](#paymentintentscontrollerfindone) - Retrieve a Payment Intent by ID
* [paymentIntentsControllerCancel](#paymentintentscontrollercancel) - Cancel a Payment Intent by ID

## paymentIntentsControllerFindAll

Retrieve all Payment Intents

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \kohortpay\sdk;
use \kohortpay\sdk\Models\Components;

$security = new Components\Security();
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    $response = $sdk->paymentIntents->paymentIntentsControllerFindAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\kohortpay\sdk\Models\Operations\PaymentIntentsControllerFindAllResponse](../../Models/Operations/PaymentIntentsControllerFindAllResponse.md)**


## paymentIntentsControllerCreate

Create a new Payment Intent

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \kohortpay\sdk;
use \kohortpay\sdk\Models\Components;

$security = new Components\Security();
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
        $request = new Components\CreatePaymentIntentDto();
    $request->amount = 5000;
    $request->checkoutSessionId = 'cs_1abc2def3ghi';
    $request->customerId = 'cus_1abc2def3ghi';
    $request->metadata = new Components\Metadata();
    $request->status = Components\Status::RequiresPaymentMethod;;

    $response = $sdk->paymentIntents->paymentIntentsControllerCreate($request);

    if ($response->createPaymentIntentDto !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\kohortpay\sdk\Models\Components\CreatePaymentIntentDto](../../Models/Components/CreatePaymentIntentDto.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\kohortpay\sdk\Models\Operations\PaymentIntentsControllerCreateResponse](../../Models/Operations/PaymentIntentsControllerCreateResponse.md)**


## paymentIntentsControllerFindOne

Retrieve a Payment Intent by ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \kohortpay\sdk;
use \kohortpay\sdk\Models\Components;
use \kohortpay\sdk\Models\Operations;

$security = new Components\Security();
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->paymentIntents->paymentIntentsControllerFindOne('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `id`                              | *string*                          | :heavy_check_mark:                | ID of the Payment Intent to fetch |


### Response

**[?\kohortpay\sdk\Models\Operations\PaymentIntentsControllerFindOneResponse](../../Models/Operations/PaymentIntentsControllerFindOneResponse.md)**


## paymentIntentsControllerCancel

Cancel a Payment Intent by ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \kohortpay\sdk;
use \kohortpay\sdk\Models\Components;
use \kohortpay\sdk\Models\Operations;

$sdk = sdk\KohortPay::builder()->build();

try {
    

    $requestSecurity = new Operations\PaymentIntentsControllerCancelSecurity();
    $requestSecurity->bearer = '';

    $response = $sdk->paymentIntents->paymentIntentsControllerCancel($requestSecurity, 'string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                    | Type                                                                                                                                         | Required                                                                                                                                     | Description                                                                                                                                  |
| -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                   | [\kohortpay\sdk\Models\Operations\PaymentIntentsControllerCancelSecurity](../../Models/Operations/PaymentIntentsControllerCancelSecurity.md) | :heavy_check_mark:                                                                                                                           | The security requirements to use for the request.                                                                                            |
| `id`                                                                                                                                         | *string*                                                                                                                                     | :heavy_check_mark:                                                                                                                           | ID of the Payment Intent to cancel                                                                                                           |


### Response

**[?\kohortpay\sdk\Models\Operations\PaymentIntentsControllerCancelResponse](../../Models/Operations/PaymentIntentsControllerCancelResponse.md)**

