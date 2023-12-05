# CreateLineItemDto


## Fields

| Field                         | Type                          | Required                      | Description                   | Example                       |
| ----------------------------- | ----------------------------- | ----------------------------- | ----------------------------- | ----------------------------- |
| `name`                        | *string*                      | :heavy_check_mark:            | The name of the item.         | Item Name                     |
| `price`                       | *float*                       | :heavy_check_mark:            | The price of the item.        | 100                           |
| `quantity`                    | *float*                       | :heavy_check_mark:            | The quantity of the item.     | 1                             |
| `imageUrl`                    | *?string*                     | :heavy_minus_sign:            | The URL of the item image.    | https://example.com/image.jpg |
| `description`                 | *?string*                     | :heavy_minus_sign:            | The description of the item.  | Item Description              |
| `type`                        | *string*                      | :heavy_check_mark:            | The type of the item.         | PRODUCT                       |