# Customers


### Available Operations

* [create](#create) - Create a new customer.
* [findAll](#findall) - find All customers of an organization.
* [findOne](#findone) - find All customers of an organization.
* [updateCustomer](#updatecustomer) - Update a customer.
* [delete](#delete) - Delete a customer.

## create

Create a new customer.

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
        $request = new Components\CreateCustomerDto();
    $request->emailAddress = 'user@example.com';
    $request->firstName = 'John';
    $request->lastName = 'Doe';
    $request->phoneNumber = '+1 555 555 5555';
    $request->address = new Components\CreateAddressDto();
    $request->address->addressLine1 = ' Avenue des Champs-Élysées';
    $request->address->addressLine2 = 'Appartement 4B';
    $request->address->city = 'Paris';
    $request->address->postalCode = '75014';
    $request->address->country = 'France';
    $request->address->state = 'Île-de-France';
    $request->shippingAddress = new Components\CreateAddressDto();
    $request->shippingAddress->addressLine1 = ' Avenue des Champs-Élysées';
    $request->shippingAddress->addressLine2 = 'Appartement 4B';
    $request->shippingAddress->city = 'Paris';
    $request->shippingAddress->postalCode = '75014';
    $request->shippingAddress->country = 'France';
    $request->shippingAddress->state = 'Île-de-France';
    $request->metadata = new Components\CreateCustomerDtoMetadata();;

    $response = $sdk->customers->create($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\kohortpay\sdk\Models\Components\CreateCustomerDto](../../Models/Components/CreateCustomerDto.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\kohortpay\sdk\Models\Operations\CreateCustomerResponse](../../Models/Operations/CreateCustomerResponse.md)**


## findAll

find All customers of an organization.

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
    $response = $sdk->customers->findAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\kohortpay\sdk\Models\Operations\FindAllCustomersResponse](../../Models/Operations/FindAllCustomersResponse.md)**


## findOne

find All customers of an organization.

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
    

    $response = $sdk->customers->findOne('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |


### Response

**[?\kohortpay\sdk\Models\Operations\FindOneCustomerResponse](../../Models/Operations/FindOneCustomerResponse.md)**


## updateCustomer

Update a customer.

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
        $updateCustomerDto = new Components\UpdateCustomerDto();
    $updateCustomerDto->deletedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-22T00:00:00.000Z');

    $response = $sdk->customers->updateCustomer('string', $updateCustomerDto);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `updateCustomerDto`                                                                                | [\kohortpay\sdk\Models\Components\UpdateCustomerDto](../../Models/Components/UpdateCustomerDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |


### Response

**[?\kohortpay\sdk\Models\Operations\UpdateCustomerResponse](../../Models/Operations/UpdateCustomerResponse.md)**


## delete

Delete a customer.

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
    

    $response = $sdk->customers->delete('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |


### Response

**[?\kohortpay\sdk\Models\Operations\DeleteCustomerResponse](../../Models/Operations/DeleteCustomerResponse.md)**

