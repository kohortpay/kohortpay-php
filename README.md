# kohortpay/kohortpay-php

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>




<!-- Start SDK Installation [installation] -->
## SDK Installation

### Composer

```bash
composer require "kohortpay/kohortpay-php"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

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

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [PaymentIntents](docs/sdks/paymentintents/README.md)

* [create](docs/sdks/paymentintents/README.md#create) - Create a new Payment Intent
* [findAll](docs/sdks/paymentintents/README.md#findall) - Retrieve all Payment Intents
* [findOne](docs/sdks/paymentintents/README.md#findone) - Retrieve a Payment Intent by ID
* [cancel](docs/sdks/paymentintents/README.md#cancel) - Cancel a Payment Intent by ID

### [PaymentGroups](docs/sdks/paymentgroups/README.md)

* [create](docs/sdks/paymentgroups/README.md#create) - Create a new payment group
* [findAll](docs/sdks/paymentgroups/README.md#findall) - Retrieve all payment groups
* [findOne](docs/sdks/paymentgroups/README.md#findone) - Retrieve a payment group by id
* [update](docs/sdks/paymentgroups/README.md#update) - Update a payment group by id
* [getParticipants](docs/sdks/paymentgroups/README.md#getparticipants) - Retrieve participants of a payment group by id
* [cancel](docs/sdks/paymentgroups/README.md#cancel) - Cancel a payment group by id
* [expire](docs/sdks/paymentgroups/README.md#expire) - Expire a payment group by id
* [validatePaymentGroup](docs/sdks/paymentgroups/README.md#validatepaymentgroup) - Validate a payment group by id

### [Customers](docs/sdks/customers/README.md)

* [create](docs/sdks/customers/README.md#create) - Create a new customer.
* [findAll](docs/sdks/customers/README.md#findall) - find All customers of an organization.
* [findOne](docs/sdks/customers/README.md#findone) - find All customers of an organization.
* [updateCustomer](docs/sdks/customers/README.md#updatecustomer) - Update a customer.
* [delete](docs/sdks/customers/README.md#delete) - Delete a customer.

### [CheckoutSessions](docs/sdks/checkoutsessions/README.md)

* [create](docs/sdks/checkoutsessions/README.md#create) - Create a new checkout session.
* [findAll](docs/sdks/checkoutsessions/README.md#findall) - Retrieve all checkout sessions for the current organization and livemode.
* [findOne](docs/sdks/checkoutsessions/README.md#findone) - Retrieve a checkout session by ID for the current organization and livemode.
* [expire](docs/sdks/checkoutsessions/README.md#expire) - Expire a checkout session by ID for the current organization and livemode.
<!-- End Available Resources and Operations [operations] -->

<!-- Start Server Selection [server] -->
## Server Selection

## Server Selection

### Select Server by Index

You can override the default server globally by passing a server index to the `server_idx: int` optional parameter when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| # | Server | Variables |
| - | ------ | --------- |
| 0 | `https://api.kohortpay.com` | None |




### Override Server URL Per-Client

The default server can also be overridden globally by passing a URL to the `server_url: str` optional parameter when initializing the SDK client instance. For example:
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
