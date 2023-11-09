# OrderResponseAddress

The customer's billing address. Will be used for AVS checks so postal/zip code is the minimum data required.


## Fields

| Field                                                                                                                                                                                                   | Type                                                                                                                                                                                                    | Required                                                                                                                                                                                                | Description                                                                                                                                                                                             | Example                                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `city`                                                                                                                                                                                                  | *?string*                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                      | City of the customer.                                                                                                                                                                                   | Ontario                                                                                                                                                                                                 |
| `countryCode`                                                                                                                                                                                           | *?string*                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                      | 3-character alphabetical country code according to ISO 3166-1, eg: USA, CAN etc.                                                                                                                        | USA                                                                                                                                                                                                     |
| `line1`                                                                                                                                                                                                 | *?string*                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                      | Line 1 of the address.                                                                                                                                                                                  | Fairfield Ranch                                                                                                                                                                                         |
| `line2`                                                                                                                                                                                                 | *?string*                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                      | Line 2 of the address.                                                                                                                                                                                  | wycliffe                                                                                                                                                                                                |
| `postalCode`                                                                                                                                                                                            | *?string*                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                      | The postal code where the customer is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for the USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada. | 91710                                                                                                                                                                                                   |
| `state`                                                                                                                                                                                                 | *?string*                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                      | State of the customer.                                                                                                                                                                                  | CA                                                                                                                                                                                                      |