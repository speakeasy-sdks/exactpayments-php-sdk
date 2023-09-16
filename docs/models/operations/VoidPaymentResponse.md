# VoidPaymentResponse


## Fields

| Field                                                                                                             | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `contentType`                                                                                                     | *string*                                                                                                          | :heavy_check_mark:                                                                                                | N/A                                                                                                               |
| `payment`                                                                                                         | *mixed*                                                                                                           | :heavy_minus_sign:                                                                                                | Payment Created                                                                                                   |
| `statusCode`                                                                                                      | *int*                                                                                                             | :heavy_check_mark:                                                                                                | N/A                                                                                                               |
| `rawResponse`                                                                                                     | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)      | :heavy_minus_sign:                                                                                                | N/A                                                                                                               |
| `voidPayment400ApplicationJSONObject`                                                                             | [?VoidPayment400ApplicationJSON](../../models/operations/VoidPayment400ApplicationJSON.md)                        | :heavy_minus_sign:                                                                                                | **Bad Request**\<br/>When there are errors in the payload.<br/>                                                   |
| `voidPayment403ApplicationJSONObject`                                                                             | [?VoidPayment403ApplicationJSON](../../models/operations/VoidPayment403ApplicationJSON.md)                        | :heavy_minus_sign:                                                                                                | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                   |
| `voidPayment404ApplicationJSONObject`                                                                             | [?VoidPayment404ApplicationJSON](../../models/operations/VoidPayment404ApplicationJSON.md)                        | :heavy_minus_sign:                                                                                                | **Not Found**\<br/>\<br/>When you'll get `401 Unauthorized` response:<br/>- When there are no Accounts/Orders/Payment found.<br/> |
| `voidPayment500ApplicationJSONObject`                                                                             | [?VoidPayment500ApplicationJSON](../../models/operations/VoidPayment500ApplicationJSON.md)                        | :heavy_minus_sign:                                                                                                | **Internal Server Error**<br/>                                                                                    |
| `voidPayment503ApplicationJSONObject`                                                                             | [?VoidPayment503ApplicationJSON](../../models/operations/VoidPayment503ApplicationJSON.md)                        | :heavy_minus_sign:                                                                                                | **Service Unavailable**<br/>                                                                                      |