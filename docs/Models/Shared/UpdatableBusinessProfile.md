# UpdatableBusinessProfile


## Fields

| Field                                                                                                                                                      | Type                                                                                                                                                       | Required                                                                                                                                                   | Description                                                                                                                                                | Example                                                                                                                                                    |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `acceptanceMethods`                                                                                                                                        | [?\TheLogicStudio\ExactPayments\Models\Shared\UpdatableAcceptanceMethods](../../Models/Shared/UpdatableAcceptanceMethods.md)                               | :heavy_minus_sign:                                                                                                                                         | The method by which the business accepts the payments.                                                                                                     |                                                                                                                                                            |
| `currentGateway`                                                                                                                                           | *?string*                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                         | Current gateway.                                                                                                                                           | Global Gateway                                                                                                                                             |
| `currentProcessor`                                                                                                                                         | *?string*                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                         | Current Processor.                                                                                                                                         | DynamicData                                                                                                                                                |
| `currentlyAcceptingPayments`                                                                                                                               | *?bool*                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                         | If `true`, currentProcessor, currentGateway and reasonForLeaving are required.                                                                             | true                                                                                                                                                       |
| `deliveryTimeframe`                                                                                                                                        | [?\TheLogicStudio\ExactPayments\Models\Shared\UpdatableBusinessProfileDeliveryTimeframe](../../Models/Shared/UpdatableBusinessProfileDeliveryTimeframe.md) | :heavy_minus_sign:                                                                                                                                         | The delivery time frame that the business has for its products.                                                                                            | Immediate                                                                                                                                                  |
| `paymentTime`                                                                                                                                              | [?\TheLogicStudio\ExactPayments\Models\Shared\UpdatableBusinessProfilePaymentTime](../../Models/Shared/UpdatableBusinessProfilePaymentTime.md)             | :heavy_minus_sign:                                                                                                                                         | The time at which the customer makes the payment to the business.                                                                                          | Upon Purchase                                                                                                                                              |
| `reasonForLeaving`                                                                                                                                         | *?string*                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                         | Reason for leaving current processor/gateway.                                                                                                              | Does not match expectations                                                                                                                                |
| `recurringServices`                                                                                                                                        | *?bool*                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                         | If `true`, recurringServicesDescription is required.                                                                                                       | true                                                                                                                                                       |
| `recurringServicesDescription`                                                                                                                             | *?string*                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                         | Recurring Services description.                                                                                                                            | Recurring Services description                                                                                                                             |
| `refundPolicyDescription`                                                                                                                                  | *?string*                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                         | Refund policy.                                                                                                                                             | Refund policy                                                                                                                                              |
| `servicesDescription`                                                                                                                                      | *?string*                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                         | Services description.                                                                                                                                      | Services description                                                                                                                                       |