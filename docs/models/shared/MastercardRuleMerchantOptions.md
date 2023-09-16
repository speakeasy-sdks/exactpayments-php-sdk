# MastercardRuleMerchantOptions

Contains the fields in the merchant match portion of the [Master Card Match API](https://developer.mastercard.com/match/documentation/api-reference) Response that will be evaluated as part of the criteria.



## Fields

| Field                                                                                                                                                                                               | Type                                                                                                                                                                                                | Required                                                                                                                                                                                            | Description                                                                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `doingBusinessAsName`                                                                                                                                                                               | array<[MastercardRuleValueOptions](../../models/shared/MastercardRuleValueOptions.md)>                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                  | The list of values to match for this specific field in the response from Master Card Match API.<br/><br/>*M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.<br/><br/> |
| `name`                                                                                                                                                                                              | array<[MastercardRuleValueOptions](../../models/shared/MastercardRuleValueOptions.md)>                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                  | The list of values to match for this specific field in the response from Master Card Match API.<br/><br/>*M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.<br/><br/> |
| `nationalTaxId`                                                                                                                                                                                     | array<[MastercardRuleValueOptions](../../models/shared/MastercardRuleValueOptions.md)>                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                  | The list of values to match for this specific field in the response from Master Card Match API.<br/><br/>*M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.<br/><br/> |
| `serviceProvDBA`                                                                                                                                                                                    | array<[MastercardRuleValueOptions](../../models/shared/MastercardRuleValueOptions.md)>                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                  | The list of values to match for this specific field in the response from Master Card Match API.<br/><br/>*M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.<br/><br/> |
| `serviceProvLegal`                                                                                                                                                                                  | array<[MastercardRuleValueOptions](../../models/shared/MastercardRuleValueOptions.md)>                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                  | The list of values to match for this specific field in the response from Master Card Match API.<br/><br/>*M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.<br/><br/> |