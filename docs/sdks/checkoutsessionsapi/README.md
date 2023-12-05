# CheckoutSessionsAPI


### Available Operations

* [checkoutSessionsControllerFindAll](#checkoutsessionscontrollerfindall) - Retrieve all checkout sessions for the current organization and livemode.
* [checkoutSessionsControllerCreate](#checkoutsessionscontrollercreate) - Create a new checkout session.
* [checkoutSessionsControllerFindOne](#checkoutsessionscontrollerfindone) - Retrieve a checkout session by ID for the current organization and livemode.
* [checkoutSessionsControllerExpire](#checkoutsessionscontrollerexpire) - Expire a checkout session by ID for the current organization and livemode.

## checkoutSessionsControllerFindAll

Retrieve all checkout sessions for the current organization and livemode.

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
    $response = $sdk->checkoutSessionsAPI->checkoutSessionsControllerFindAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindAllResponse](../../Models/Operations/CheckoutSessionsControllerFindAllResponse.md)**


## checkoutSessionsControllerCreate

Create a new checkout session.

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

    $response = $sdk->checkoutSessionsAPI->checkoutSessionsControllerCreate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\kohortpay\sdk\Models\Components\CreateCheckoutSessionDto](../../Models/Components/CreateCheckoutSessionDto.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\kohortpay\sdk\Models\Operations\CheckoutSessionsControllerCreateResponse](../../Models/Operations/CheckoutSessionsControllerCreateResponse.md)**


## checkoutSessionsControllerFindOne

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->checkoutSessionsAPI->checkoutSessionsControllerFindOne('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `id`                                    | *string*                                | :heavy_check_mark:                      | ID of the checkout session to retrieve. |


### Response

**[?\kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindOneResponse](../../Models/Operations/CheckoutSessionsControllerFindOneResponse.md)**


## checkoutSessionsControllerExpire

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->checkoutSessionsAPI->checkoutSessionsControllerExpire('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                             | Type                                  | Required                              | Description                           |
| ------------------------------------- | ------------------------------------- | ------------------------------------- | ------------------------------------- |
| `id`                                  | *string*                              | :heavy_check_mark:                    | ID of the checkout session to expire. |


### Response

**[?\kohortpay\sdk\Models\Operations\CheckoutSessionsControllerExpireResponse](../../Models/Operations/CheckoutSessionsControllerExpireResponse.md)**

