# Customers


### Available Operations

* [customersControllerFindAll](#customerscontrollerfindall) - find All customers of an organization.
* [customersControllerCreate](#customerscontrollercreate) - Create a new customer.
* [customersControllerRemove](#customerscontrollerremove)
* [customersControllerFindOne](#customerscontrollerfindone) - find All customers of an organization.
* [customersControllerUpdate](#customerscontrollerupdate)

## customersControllerFindAll

find All customers of an organization.

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
    $response = $sdk->customers->customersControllerFindAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\kohortpay\sdk\Models\Operations\CustomersControllerFindAllResponse](../../Models/Operations/CustomersControllerFindAllResponse.md)**


## customersControllerCreate

Create a new customer.

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

    $response = $sdk->customers->customersControllerCreate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\kohortpay\sdk\Models\Components\CreateCustomerDto](../../Models/Components/CreateCustomerDto.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\kohortpay\sdk\Models\Operations\CustomersControllerCreateResponse](../../Models/Operations/CustomersControllerCreateResponse.md)**


## customersControllerRemove

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
    

    $response = $sdk->customers->customersControllerRemove('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |


### Response

**[?\kohortpay\sdk\Models\Operations\CustomersControllerRemoveResponse](../../Models/Operations/CustomersControllerRemoveResponse.md)**


## customersControllerFindOne

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->customers->customersControllerFindOne('string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |


### Response

**[?\kohortpay\sdk\Models\Operations\CustomersControllerFindOneResponse](../../Models/Operations/CustomersControllerFindOneResponse.md)**


## customersControllerUpdate

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
        $updateCustomerDto = new Components\UpdateCustomerDto();
    $updateCustomerDto->deletedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-22T00:00:00.000Z');

    $response = $sdk->customers->customersControllerUpdate('string', $updateCustomerDto);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `updateCustomerDto`                                                                                | [\kohortpay\sdk\Models\Components\UpdateCustomerDto](../../Models/Components/UpdateCustomerDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |


### Response

**[?\kohortpay\sdk\Models\Operations\CustomersControllerUpdateResponse](../../Models/Operations/CustomersControllerUpdateResponse.md)**

