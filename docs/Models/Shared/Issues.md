# Issues


## Fields

| Field                                                                                                                                           | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     | Example                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `code`                                                                                                                                          | [?\TheLogicStudio\ExactPayments\Models\Shared\AppleError400Code](../../Models/Shared/AppleError400Code.md)                                      | :heavy_minus_sign:                                                                                                                              | Validation error code. The retrieved value will drive which extra fields will be shown.                                                         | too_small                                                                                                                                       |
| `expected`                                                                                                                                      | [?\TheLogicStudio\ExactPayments\Models\Shared\AppleError400Expected](../../Models/Shared/AppleError400Expected.md)                              | :heavy_minus_sign:                                                                                                                              | Expected field type. It is only retrieved when `code = invalid_type`.                                                                           | array                                                                                                                                           |
| `inclusive`                                                                                                                                     | *?bool*                                                                                                                                         | :heavy_minus_sign:                                                                                                                              | Whether the minimum or maximum is included in the range of acceptable values. It is only retrieved when `code = too_small` or `code = too_big`. | true                                                                                                                                            |
| `maximum`                                                                                                                                       | *?float*                                                                                                                                        | :heavy_minus_sign:                                                                                                                              | The expected maximum length/value. It is only retrieved when `code = too_big`.                                                                  | 100                                                                                                                                             |
| `message`                                                                                                                                       | *?string*                                                                                                                                       | :heavy_minus_sign:                                                                                                                              | Message explaining the validation error.                                                                                                        | Array must contain at least 1 element(s)                                                                                                        |
| `minimum`                                                                                                                                       | *?float*                                                                                                                                        | :heavy_minus_sign:                                                                                                                              | The expected minimum length/value. It is only retrieved when `code = too_small`.                                                                | 1                                                                                                                                               |
| `path`                                                                                                                                          | array<*string*>                                                                                                                                 | :heavy_minus_sign:                                                                                                                              | Field location in the request body.                                                                                                             | [<br/>"domains"<br/>]                                                                                                                           |
| `received`                                                                                                                                      | [?\TheLogicStudio\ExactPayments\Models\Shared\AppleError400Received](../../Models/Shared/AppleError400Received.md)                              | :heavy_minus_sign:                                                                                                                              | Field type received. It is only retrieved when `code = invalid_type`.                                                                           | string                                                                                                                                          |
| `type`                                                                                                                                          | [?\TheLogicStudio\ExactPayments\Models\Shared\AppleError400Type](../../Models/Shared/AppleError400Type.md)                                      | :heavy_minus_sign:                                                                                                                              | The type of the data failing validation. It is only retrieved when `code = too_small` or `code = too_big`.                                      | array                                                                                                                                           |