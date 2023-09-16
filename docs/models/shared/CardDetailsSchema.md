# CardDetailsSchema

The Customer's provided Card Details.


## Fields

| Field                                                                            | Type                                                                             | Required                                                                         | Description                                                                      | Example                                                                          |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `brand`                                                                          | [?CardDetailsSchemaBrand](../../models/shared/CardDetailsSchemaBrand.md)         | :heavy_minus_sign:                                                               | The brand name of the credit card. It must be in lowercase.                      | visa                                                                             |
| `checks`                                                                         | [?CardDetailsSchemaChecks](../../models/shared/CardDetailsSchemaChecks.md)       | :heavy_minus_sign:                                                               | N/A                                                                              |                                                                                  |
| `expiry`                                                                         | [?CardDetailsSchemaExpiry](../../models/shared/CardDetailsSchemaExpiry.md)       | :heavy_minus_sign:                                                               | N/A                                                                              |                                                                                  |
| `lastFour`                                                                       | *?string*                                                                        | :heavy_minus_sign:                                                               | The last 4 digits of the supplied credit card.                                   | 0861                                                                             |
| `tokenType`                                                                      | [?CardDetailsSchemaTokenType](../../models/shared/CardDetailsSchemaTokenType.md) | :heavy_minus_sign:                                                               | Indicates whether this card token is a `platform token` or a `network token`.    | platform                                                                         |