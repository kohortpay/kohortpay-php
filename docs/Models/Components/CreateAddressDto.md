# CreateAddressDto


## Fields

| Field                                      | Type                                       | Required                                   | Description                                | Example                                    |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `addressLine1`                             | *string*                                   | :heavy_check_mark:                         | The first line of the address.             |  Avenue des Champs-Élysées                 |
| `addressLine2`                             | *?string*                                  | :heavy_minus_sign:                         | The second line of the address (optional). | Appartement 4B                             |
| `city`                                     | *string*                                   | :heavy_check_mark:                         | The city of the address.                   | Paris                                      |
| `postalCode`                               | *string*                                   | :heavy_check_mark:                         | The postal code of the address.            | 75014                                      |
| `country`                                  | *string*                                   | :heavy_check_mark:                         | The country of the address.                | France                                     |
| `state`                                    | *?string*                                  | :heavy_minus_sign:                         | The state of the address (optional).       | Île-de-France                              |