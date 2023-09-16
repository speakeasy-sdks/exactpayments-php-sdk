# Authentication

### Available Operations

* [createApplicationToken](#createapplicationtoken) - Create Application Token
* [createUserToken](#createusertoken) - Create User Token
* [deleteApplicationToken](#deleteapplicationtoken) - Delete Application Token
* [queryApplicationToken](#queryapplicationtoken) - Query Application Tokens

## createApplicationToken

Create a new Application Token for non-human users, like external APIs or User Interfaces to access our API under the session account.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenRequestBodyInput;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenRequestBodyMode;
use \TheLogicStudio\ExactPayments\Models\Shared\Permissions;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new CreateApplicationTokenRequest();
    $request->requestBody = new CreateApplicationTokenRequestBodyInput();
    $request->requestBody->label = 'Transactions Application Token';
    $request->requestBody->mode = CreateApplicationTokenRequestBodyMode::Live;
    $request->requestBody->permissions = [
        Permissions::ChargesCreate,
    ];
    $request->applicationId = 'nisi';

    $requestSecurity = new CreateApplicationTokenSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->authentication->createApplicationToken($request, $requestSecurity);

    if ($response->applicationToken !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenRequest](../../models/operations/CreateApplicationTokenRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenSecurity](../../models/operations/CreateApplicationTokenSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenResponse](../../models/operations/CreateApplicationTokenResponse.md)**


## createUserToken

Creates a User Token that can be used to authorize calls to other API endpoints in our application.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequestBodyInput;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequestBodyAccountType;
use \TheLogicStudio\ExactPayments\Models\Shared\AccountMode;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new CreateUserTokenRequest();
    $request->requestBody = new CreateUserTokenRequestBodyInput();
    $request->requestBody->account = '64b04d6d198ce11d0d64ca2a';
    $request->requestBody->accountType = CreateUserTokenRequestBodyAccountType::Account;
    $request->requestBody->application = 'admin-pwa';
    $request->requestBody->email = 'jon.doe@acmecorp.com';
    $request->requestBody->mode = AccountMode::Live;
    $request->requestBody->password = 'E*3q&87uBHc5xiIsiLK0';
    $request->requestBody->user = '64b04d6d198ce11d0d64ca2a';
    $request->xApplicationId = 'admin-pwa';

    $response = $sdk->authentication->createUserToken($request);

    if ($response->userToken !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequest](../../models/operations/CreateUserTokenRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenResponse](../../models/operations/CreateUserTokenResponse.md)**


## deleteApplicationToken

Delete a specific Application Token by the given Application Identifier under the session account.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeleteApplicationTokenRequest();
    $request->applicationId = 'recusandae';
    $request->tokenId = 'temporibus';

    $requestSecurity = new DeleteApplicationTokenSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->authentication->deleteApplicationToken($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenRequest](../../models/operations/DeleteApplicationTokenRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenSecurity](../../models/operations/DeleteApplicationTokenSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenResponse](../../models/operations/DeleteApplicationTokenResponse.md)**


## queryApplicationToken

Query Application Tokens for non-human users, like external APIs or User Interfaces to access our API under the session account.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new QueryApplicationTokenRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->applicationId = 'ab';

    $requestSecurity = new QueryApplicationTokenSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->authentication->queryApplicationToken($request, $requestSecurity);

    if ($response->applicationTokenResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenRequest](../../models/operations/QueryApplicationTokenRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenSecurity](../../models/operations/QueryApplicationTokenSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenResponse](../../models/operations/QueryApplicationTokenResponse.md)**
