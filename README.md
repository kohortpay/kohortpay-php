# kohortpay/kohortpay-php

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>


## 🏗 **Welcome to your new SDK!** 🏗

It has been generated successfully based on your OpenAPI spec. However, it is not yet ready for production use. Here are some next steps:
- [ ] 🛠 Make your SDK feel handcrafted by [customizing it](https://www.speakeasyapi.dev/docs/customize-sdks)
- [ ] ♻️ Refine your SDK quickly by iterating locally with the [Speakeasy CLI](https://github.com/speakeasy-api/speakeasy)
- [ ] 🎁 Publish your SDK to package managers by [configuring automatic publishing](https://www.speakeasyapi.dev/docs/productionize-sdks/publish-sdks)
- [ ] ✨ When ready to productionize, delete this section from the README

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
$security->bearer = '';

$sdk = sdk\KohortPay::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->paymentIntents->paymentIntentsControllerFindAll();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [PaymentIntents](docs/sdks/paymentintents/README.md)

* [paymentIntentsControllerFindAll](docs/sdks/paymentintents/README.md#paymentintentscontrollerfindall) - Retrieve all Payment Intents
* [paymentIntentsControllerCreate](docs/sdks/paymentintents/README.md#paymentintentscontrollercreate) - Create a new Payment Intent
* [paymentIntentsControllerFindOne](docs/sdks/paymentintents/README.md#paymentintentscontrollerfindone) - Retrieve a Payment Intent by ID
* [paymentIntentsControllerCancel](docs/sdks/paymentintents/README.md#paymentintentscontrollercancel) - Cancel a Payment Intent by ID

### [PaymentGroups](docs/sdks/paymentgroups/README.md)

* [paymentGroupsControllerFindAll](docs/sdks/paymentgroups/README.md#paymentgroupscontrollerfindall) - Retrieve all payment groups
* [paymentGroupsControllerCreate](docs/sdks/paymentgroups/README.md#paymentgroupscontrollercreate) - Create a new payment group
* [paymentGroupsControllerFindOne](docs/sdks/paymentgroups/README.md#paymentgroupscontrollerfindone) - Retrieve a payment group by id
* [paymentGroupsControllerUpdate](docs/sdks/paymentgroups/README.md#paymentgroupscontrollerupdate) - Update a payment group by id
* [paymentGroupsControllerParticipants](docs/sdks/paymentgroups/README.md#paymentgroupscontrollerparticipants) - Retrieve participants of a payment group by id
* [paymentGroupsControllerCancel](docs/sdks/paymentgroups/README.md#paymentgroupscontrollercancel) - Cancel a payment group by id
* [paymentGroupsControllerExpire](docs/sdks/paymentgroups/README.md#paymentgroupscontrollerexpire) - Expire a payment group by id
* [paymentGroupsControllerValidate](docs/sdks/paymentgroups/README.md#paymentgroupscontrollervalidate) - Validate a payment group by id

### [Customers](docs/sdks/customers/README.md)

* [customersControllerFindAll](docs/sdks/customers/README.md#customerscontrollerfindall) - find All customers of an organization.
* [customersControllerCreate](docs/sdks/customers/README.md#customerscontrollercreate) - Create a new customer.
* [customersControllerRemove](docs/sdks/customers/README.md#customerscontrollerremove)
* [customersControllerFindOne](docs/sdks/customers/README.md#customerscontrollerfindone) - find All customers of an organization.
* [customersControllerUpdate](docs/sdks/customers/README.md#customerscontrollerupdate)

### [CheckoutSessions](docs/sdks/checkoutsessions/README.md)

* [checkoutSessionsControllerFindAll](docs/sdks/checkoutsessions/README.md#checkoutsessionscontrollerfindall) - Retrieve all checkout sessions for the current organization and livemode.
* [checkoutSessionsControllerCreate](docs/sdks/checkoutsessions/README.md#checkoutsessionscontrollercreate) - Create a new checkout session.
* [checkoutSessionsControllerFindOne](docs/sdks/checkoutsessions/README.md#checkoutsessionscontrollerfindone) - Retrieve a checkout session by ID for the current organization and livemode.
* [checkoutSessionsControllerExpire](docs/sdks/checkoutsessions/README.md#checkoutsessionscontrollerexpire) - Expire a checkout session by ID for the current organization and livemode.
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
