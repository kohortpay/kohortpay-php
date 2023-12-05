# PaymentGroups


### Available Operations

* [paymentGroupsControllerFindAll](#paymentgroupscontrollerfindall) - Retrieve all payment groups
* [paymentGroupsControllerCreate](#paymentgroupscontrollercreate) - Create a new payment group
* [paymentGroupsControllerFindOne](#paymentgroupscontrollerfindone) - Retrieve a payment group by id
* [paymentGroupsControllerUpdate](#paymentgroupscontrollerupdate) - Update a payment group by id
* [paymentGroupsControllerParticipants](#paymentgroupscontrollerparticipants) - Retrieve participants of a payment group by id
* [paymentGroupsControllerCancel](#paymentgroupscontrollercancel) - Cancel a payment group by id
* [paymentGroupsControllerExpire](#paymentgroupscontrollerexpire) - Expire a payment group by id
* [paymentGroupsControllerValidate](#paymentgroupscontrollervalidate) - Validate a payment group by id

## paymentGroupsControllerFindAll

Retrieve all payment groups

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
    $response = $sdk->paymentGroups->paymentGroupsControllerFindAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindAllResponse](../../Models/Operations/PaymentGroupsControllerFindAllResponse.md)**


## paymentGroupsControllerCreate

Create a new payment group

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
        $request = new Components\CreatePaymentGroupDto();
    $request->customerId = 'cus_IzkjlvAhdjzjht3';
    $request->paymentIntentId = 'pi_1JYLo8KerLxWZaQtys6ZQ1xR';
    $request->metadata = new Components\CreatePaymentGroupDtoMetadata();
    $request->expiresAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-30T14:37:09.963Z');;

    $response = $sdk->paymentGroups->paymentGroupsControllerCreate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\kohortpay\sdk\Models\Components\CreatePaymentGroupDto](../../Models/Components/CreatePaymentGroupDto.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\kohortpay\sdk\Models\Operations\PaymentGroupsControllerCreateResponse](../../Models/Operations/PaymentGroupsControllerCreateResponse.md)**


## paymentGroupsControllerFindOne

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->paymentGroups->paymentGroupsControllerFindOne('string');

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

**[?\kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindOneResponse](../../Models/Operations/PaymentGroupsControllerFindOneResponse.md)**


## paymentGroupsControllerUpdate

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
        $updatePaymentGroupDto = new Components\UpdatePaymentGroupDto();
    $updatePaymentGroupDto->metadata = new Components\UpdatePaymentGroupDtoMetadata();

    $response = $sdk->paymentGroups->paymentGroupsControllerUpdate('string', $updatePaymentGroupDto);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                       | *string*                                                                                                   | :heavy_check_mark:                                                                                         | N/A                                                                                                        |
| `updatePaymentGroupDto`                                                                                    | [\kohortpay\sdk\Models\Components\UpdatePaymentGroupDto](../../Models/Components/UpdatePaymentGroupDto.md) | :heavy_check_mark:                                                                                         | N/A                                                                                                        |


### Response

**[?\kohortpay\sdk\Models\Operations\PaymentGroupsControllerUpdateResponse](../../Models/Operations/PaymentGroupsControllerUpdateResponse.md)**


## paymentGroupsControllerParticipants

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->paymentGroups->paymentGroupsControllerParticipants('string');

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

**[?\kohortpay\sdk\Models\Operations\PaymentGroupsControllerParticipantsResponse](../../Models/Operations/PaymentGroupsControllerParticipantsResponse.md)**


## paymentGroupsControllerCancel

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->paymentGroups->paymentGroupsControllerCancel('string');

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

**[?\kohortpay\sdk\Models\Operations\PaymentGroupsControllerCancelResponse](../../Models/Operations/PaymentGroupsControllerCancelResponse.md)**


## paymentGroupsControllerExpire

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->paymentGroups->paymentGroupsControllerExpire('string');

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

**[?\kohortpay\sdk\Models\Operations\PaymentGroupsControllerExpireResponse](../../Models/Operations/PaymentGroupsControllerExpireResponse.md)**


## paymentGroupsControllerValidate

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()->setSecurity($security)->build();

try {
        $validatePaymentGroupDto = new Components\ValidatePaymentGroupDto();
    $validatePaymentGroupDto->customerEmail = 'customer@gmail.com';

    $response = $sdk->paymentGroups->paymentGroupsControllerValidate('string', $validatePaymentGroupDto);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                           | *string*                                                                                                       | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `validatePaymentGroupDto`                                                                                      | [\kohortpay\sdk\Models\Components\ValidatePaymentGroupDto](../../Models/Components/ValidatePaymentGroupDto.md) | :heavy_check_mark:                                                                                             | N/A                                                                                                            |


### Response

**[?\kohortpay\sdk\Models\Operations\PaymentGroupsControllerValidateResponse](../../Models/Operations/PaymentGroupsControllerValidateResponse.md)**

