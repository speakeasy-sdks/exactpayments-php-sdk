# AccountGetPayments403ApplicationJSON

**Access Denied**\
Credentials supplied do not grant access to the requested resource.



## Fields

| Field                                                                                                                  | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            | Example                                                                                                                |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `code`                                                                                                                 | [?AccountGetPayments403ApplicationJSONCode](../../models/operations/AccountGetPayments403ApplicationJSONCode.md)       | :heavy_minus_sign:                                                                                                     | Code of the authorization error.                                                                                       | payments-forbidden-error                                                                                               |
| `message`                                                                                                              | [?AccountGetPayments403ApplicationJSONMessage](../../models/operations/AccountGetPayments403ApplicationJSONMessage.md) | :heavy_minus_sign:                                                                                                     | Message explaining the authorization error.                                                                            | You do not have permission to access this resource.                                                                    |
| `requestId`                                                                                                            | *?string*                                                                                                              | :heavy_minus_sign:                                                                                                     | Request identifier in UUID format.                                                                                     | bcc78633-cd09-4e7d-8f3b-d593fdc1439c                                                                                   |
| `type`                                                                                                                 | *?string*                                                                                                              | :heavy_minus_sign:                                                                                                     | It shows as authorization error.                                                                                       | authorization-error                                                                                                    |