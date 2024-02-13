# PaymentGroups


### Available Operations

* [create](#create) - Create a new payment group
* [findAll](#findall) - Retrieve all payment groups
* [findOne](#findone) - Retrieve a payment group by id
* [update](#update) - Update a payment group by id
* [getParticipants](#getparticipants) - Retrieve participants of a payment group by id
* [cancel](#cancel) - Cancel a payment group by id
* [expire](#expire) - Expire a payment group by id
* [validatePaymentGroup](#validatepaymentgroup) - Validate a payment group by id

## create

Create a new payment group

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
        $request = new Components\CreatePaymentGroupDto();
    $request->customerId = 'cus_IzkjlvAhdjzjht3';
    $request->paymentIntentId = 'pi_1JYLo8KerLxWZaQtys6ZQ1xR';
    $request->metadata = new Components\CreatePaymentGroupDtoMetadata();
    $request->expiresAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-05T23:49:12.816Z');;

    $response = $sdk->paymentGroups->create($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\kohortpay\sdk\Models\Components\CreatePaymentGroupDto](../../Models/Components/CreatePaymentGroupDto.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\kohortpay\sdk\Models\Operations\CreatePaymentGroupResponse](../../Models/Operations/CreatePaymentGroupResponse.md)**


## findAll

Retrieve all payment groups

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
    $response = $sdk->paymentGroups->findAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\kohortpay\sdk\Models\Operations\FindAllPaymentGroupsResponse](../../Models/Operations/FindAllPaymentGroupsResponse.md)**


## findOne

Retrieve a payment group by id

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
    

    $response = $sdk->paymentGroups->findOne('string');

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

**[?\kohortpay\sdk\Models\Operations\FindOnePaymentGroupResponse](../../Models/Operations/FindOnePaymentGroupResponse.md)**


## update

Update a payment group by id

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
        $updatePaymentGroupDto = new Components\UpdatePaymentGroupDto();
    $updatePaymentGroupDto->metadata = new Components\UpdatePaymentGroupDtoMetadata();

    $response = $sdk->paymentGroups->update('string', $updatePaymentGroupDto);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                       | *string*                                                                                                   | :heavy_check_mark:                                                                                         | N/A                                                                                                        |
| `updatePaymentGroupDto`                                                                                    | [\kohortpay\sdk\Models\Components\UpdatePaymentGroupDto](../../Models/Components/UpdatePaymentGroupDto.md) | :heavy_check_mark:                                                                                         | N/A                                                                                                        |


### Response

**[?\kohortpay\sdk\Models\Operations\UpdateResponse](../../Models/Operations/UpdateResponse.md)**


## getParticipants

Retrieve participants of a payment group by id

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
    

    $response = $sdk->paymentGroups->getParticipants('string');

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

**[?\kohortpay\sdk\Models\Operations\GetParticipantsResponse](../../Models/Operations/GetParticipantsResponse.md)**


## cancel

Cancel a payment group by id

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
    

    $response = $sdk->paymentGroups->cancel('string');

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

**[?\kohortpay\sdk\Models\Operations\CancelPaymentGroupResponse](../../Models/Operations/CancelPaymentGroupResponse.md)**


## expire

Expire a payment group by id

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
    

    $response = $sdk->paymentGroups->expire('string');

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

**[?\kohortpay\sdk\Models\Operations\ExpirePaymentGroupResponse](../../Models/Operations/ExpirePaymentGroupResponse.md)**


## validatePaymentGroup

Validate a payment group by id

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
        $validatePaymentGroupDto = new Components\ValidatePaymentGroupDto();
    $validatePaymentGroupDto->customerEmail = 'customer@gmail.com';

    $response = $sdk->paymentGroups->validatePaymentGroup('string', $validatePaymentGroupDto);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                           | *string*                                                                                                       | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `validatePaymentGroupDto`                                                                                      | [\kohortpay\sdk\Models\Components\ValidatePaymentGroupDto](../../Models/Components/ValidatePaymentGroupDto.md) | :heavy_check_mark:                                                                                             | N/A                                                                                                            |


### Response

**[?\kohortpay\sdk\Models\Operations\ValidatePaymentGroupResponse](../../Models/Operations/ValidatePaymentGroupResponse.md)**

