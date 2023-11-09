# PutAccountAccountIdOrdersOrderIdResponse


## Fields

| Field                                                                                                                                                                                                      | Type                                                                                                                                                                                                       | Required                                                                                                                                                                                                   | Description                                                                                                                                                                                                |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `fourHundredApplicationJsonObject`                                                                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdResponseBody](../../Models/Operations/PutAccountAccountIdOrdersOrderIdResponseBody.md)                                   | :heavy_minus_sign:                                                                                                                                                                                         | **Bad Request**\<br/>When there are errors in the payload<br/>                                                                                                                                             |
| `fourHundredAndThreeApplicationJsonObject`                                                                                                                                                                 | [?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdOrdersResponseBody](../../Models/Operations/PutAccountAccountIdOrdersOrderIdOrdersResponseBody.md)                       | :heavy_minus_sign:                                                                                                                                                                                         | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                                                                                                            |
| `fourHundredAndFourApplicationJsonObject`                                                                                                                                                                  | [?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdOrdersResponseResponseBody](../../Models/Operations/PutAccountAccountIdOrdersOrderIdOrdersResponseResponseBody.md)       | :heavy_minus_sign:                                                                                                                                                                                         | **Not found**\<br/>When there are no accounts/orders/payment found<br/>                                                                                                                                    |
| `fiveHundredApplicationJsonObject`                                                                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdOrdersResponse500ResponseBody](../../Models/Operations/PutAccountAccountIdOrdersOrderIdOrdersResponse500ResponseBody.md) | :heavy_minus_sign:                                                                                                                                                                                         | **Internal Server Error**<br/>                                                                                                                                                                             |
| `fiveHundredAndThreeApplicationJsonObject`                                                                                                                                                                 | [?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdOrdersResponse503ResponseBody](../../Models/Operations/PutAccountAccountIdOrdersOrderIdOrdersResponse503ResponseBody.md) | :heavy_minus_sign:                                                                                                                                                                                         | **Service Unavailable**<br/>                                                                                                                                                                               |
| `contentType`                                                                                                                                                                                              | *string*                                                                                                                                                                                                   | :heavy_check_mark:                                                                                                                                                                                         | HTTP response content type for this operation                                                                                                                                                              |
| `statusCode`                                                                                                                                                                                               | *int*                                                                                                                                                                                                      | :heavy_check_mark:                                                                                                                                                                                         | HTTP response status code for this operation                                                                                                                                                               |
| `rawResponse`                                                                                                                                                                                              | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                                                                               | :heavy_minus_sign:                                                                                                                                                                                         | Raw HTTP response; suitable for custom response parsing                                                                                                                                                    |
| `orderResponse`                                                                                                                                                                                            | [?\TheLogicStudio\ExactPayments\Models\Shared\OrderResponse](../../Models/Shared/OrderResponse.md)                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                         | Order Updated.                                                                                                                                                                                             |