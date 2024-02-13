# CheckoutSessions


### Available Operations

* [create](#create) - Create a new checkout session.
* [findAll](#findall) - Retrieve all checkout sessions for the current organization and livemode.
* [findOne](#findone) - Retrieve a checkout session by ID for the current organization and livemode.
* [expire](#expire) - Expire a checkout session by ID for the current organization and livemode.

## create

Create a new checkout session.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \kohortpay\sdk;
use \kohortpay\sdk\Models\Components;

$security = new Components\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
        $request = new Components\CreateCheckoutSessionDto();
    $request->successUrl = 'https://success.example.com';
    $request->cancelUrl = 'https://cancel.example.com';
    $request->customerEmail = 'customer@example.com';
    $request->customerFirstName = 'John';
    $request->customerLastName = 'Doe';
    $request->customerId = 'user_xxxxxxxxxxxxxxxx';
    $request->expiresAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-02T14:30:00.000Z');
    $request->lineItems = [
        new Components\CreateLineItemDto(),
    ];
    $request->metadata = new Components\CreateCheckoutSessionDtoMetadata();
    $request->amountTotal = 35000;
    $request->locale = 'en-US';;

    $response = $sdk->checkoutSessions->create($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\kohortpay\sdk\Models\Components\CreateCheckoutSessionDto](../../Models/Components/CreateCheckoutSessionDto.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\kohortpay\sdk\Models\Operations\CreateCheckoutResponse](../../Models/Operations/CreateCheckoutResponse.md)**


## findAll

Retrieve all checkout sessions for the current organization and livemode.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \kohortpay\sdk;
use \kohortpay\sdk\Models\Components;

$security = new Components\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    $response = $sdk->checkoutSessions->findAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\kohortpay\sdk\Models\Operations\FindAllCheckoutSessionsResponse](../../Models/Operations/FindAllCheckoutSessionsResponse.md)**


## findOne

Retrieve a checkout session by ID for the current organization and livemode.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \kohortpay\sdk;
use \kohortpay\sdk\Models\Components;
use \kohortpay\sdk\Models\Operations;

$security = new Components\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->checkoutSessions->findOne('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `id`                                    | *string*                                | :heavy_check_mark:                      | ID of the checkout session to retrieve. |


### Response

**[?\kohortpay\sdk\Models\Operations\FindOneCheckoutSessionResponse](../../Models/Operations/FindOneCheckoutSessionResponse.md)**


## expire

Expire a checkout session by ID for the current organization and livemode.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \kohortpay\sdk;
use \kohortpay\sdk\Models\Components;
use \kohortpay\sdk\Models\Operations;

$security = new Components\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->checkoutSessions->expire('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                             | Type                                  | Required                              | Description                           |
| ------------------------------------- | ------------------------------------- | ------------------------------------- | ------------------------------------- |
| `id`                                  | *string*                              | :heavy_check_mark:                    | ID of the checkout session to expire. |


### Response

**[?\kohortpay\sdk\Models\Operations\ExpireCheckoutSessionResponse](../../Models/Operations/ExpireCheckoutSessionResponse.md)**

