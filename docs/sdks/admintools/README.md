# AdminTools

### Available Operations

* [getListNotes](#getlistnotes) - List Notes
* [postCreateNotes](#postcreatenotes) - Add Note
* [putOrganizationOrganizationIdOnboardingOnboardingIdRecheck](#putorganizationorganizationidonboardingonboardingidrecheck) - Process Workflow
* [putOrganizationOrganizationIdOnboardingOnboardingIdRetryRule](#putorganizationorganizationidonboardingonboardingidretryrule) - Process Verification
* [putOrganizationOrganizationIdOnboardingOnboardingIdStatus](#putorganizationorganizationidonboardingonboardingidstatus) - Update Onboarding Status

## getListNotes

Retrieve a list of Notes for the given Organization and Onboarding identifier.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetListNotesRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetListNotesSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetListNotesRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->onboardingId = 'deserunt';
    $request->organizationId = 'suscipit';

    $requestSecurity = new GetListNotesSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->adminTools->getListNotes($request, $requestSecurity);

    if ($response->onboardingNotes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetListNotesRequest](../../models/operations/GetListNotesRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetListNotesSecurity](../../models/operations/GetListNotesSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetListNotesResponse](../../models/operations/GetListNotesResponse.md)**


## postCreateNotes

Create a Note for a specific Onboarding Application for the given Organization and Onboarding Application identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesRequestBodyInput;
use \TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostCreateNotesRequest();
    $request->requestBody = new PostCreateNotesRequestBodyInput();
    $request->requestBody->note = 'Some more documents are needed to verify the account's eligibility. Jen Will contact the merchant to collect further details by 2nd Aug.';
    $request->requestBody->onboardingIsDeleted = false;
    $request->onboardingId = 'iure';
    $request->organizationId = 'magnam';

    $requestSecurity = new PostCreateNotesSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->adminTools->postCreateNotes($request, $requestSecurity);

    if ($response->onboardingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesRequest](../../models/operations/PostCreateNotesRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesSecurity](../../models/operations/PostCreateNotesSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesResponse](../../models/operations/PostCreateNotesResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdRecheck

Manually request all verifications in an underwriting workflow to be performed outside of the initial onboarding process.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest();
    $request->onboardingId = 'debitis';
    $request->organizationId = 'ipsa';

    $requestSecurity = new PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->adminTools->putOrganizationOrganizationIdOnboardingOnboardingIdRecheck($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                           | Type                                                                                                                                                                                                                | Required                                                                                                                                                                                                            | Description                                                                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest.md)   | :heavy_check_mark:                                                                                                                                                                                                  | The request object to use for the request.                                                                                                                                                                          |
| `security`                                                                                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckSecurity](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckSecurity.md) | :heavy_check_mark:                                                                                                                                                                                                  | The security requirements to use for the request.                                                                                                                                                                   |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckResponse](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdRetryRule

Manually request an underwriting workflow verification to be performed outside of the initial onboarding workflow.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingRetryRuleRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest();
    $request->onboardingRetryRuleRequest = new OnboardingRetryRuleRequest();
    $request->onboardingRetryRuleRequest->ruleName = 'delectus';
    $request->onboardingId = 'tempora';
    $request->organizationId = 'suscipit';

    $requestSecurity = new PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->adminTools->putOrganizationOrganizationIdOnboardingOnboardingIdRetryRule($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                               | Type                                                                                                                                                                                                                    | Required                                                                                                                                                                                                                | Description                                                                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest.md)   | :heavy_check_mark:                                                                                                                                                                                                      | The request object to use for the request.                                                                                                                                                                              |
| `security`                                                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleSecurity](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleSecurity.md) | :heavy_check_mark:                                                                                                                                                                                                      | The security requirements to use for the request.                                                                                                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleResponse](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdStatus

Manually update the merchant onboarding application status after being automatically determined by the decision engine.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequestStatus;
use \TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequestStatusChangeReason;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest();
    $request->updateOnboardingStatusRequest = new UpdateOnboardingStatusRequest();
    $request->updateOnboardingStatusRequest->isDeleted = 'molestiae';
    $request->updateOnboardingStatusRequest->status = UpdateOnboardingStatusRequestStatus::InRiskReview;
    $request->updateOnboardingStatusRequest->statusChangeReason = UpdateOnboardingStatusRequestStatusChangeReason::ProhibitedMerchant;
    $request->updateOnboardingStatusRequest->statusChangeReasonNote = 'voluptatum';
    $request->onboardingId = 'iusto';
    $request->organizationId = 'excepturi';

    $requestSecurity = new PutOrganizationOrganizationIdOnboardingOnboardingIdStatusSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->adminTools->putOrganizationOrganizationIdOnboardingOnboardingIdStatus($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                         | Type                                                                                                                                                                                                              | Required                                                                                                                                                                                                          | Description                                                                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest.md)   | :heavy_check_mark:                                                                                                                                                                                                | The request object to use for the request.                                                                                                                                                                        |
| `security`                                                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusSecurity](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdStatusSecurity.md) | :heavy_check_mark:                                                                                                                                                                                                | The security requirements to use for the request.                                                                                                                                                                 |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusResponse](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdStatusResponse.md)**
