<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class AccountReportDetails
{
	#[\JMS\Serializer\Annotation\SerializedName('clientIp')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $clientIp = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdAt = null;
    
    /**
     * $kycResults
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\AccountReportDetailsKycResults> $kycResults
     */
	#[\JMS\Serializer\Annotation\SerializedName('kycResults')]
    #[\JMS\Serializer\Annotation\Type('array<TheLogicStudio\ExactPayments\Models\Shared\AccountReportDetailsKycResults>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $kycResults = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('merchant')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\AccountReportDetailsMerchant')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountReportDetailsMerchant $merchant = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $organization = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('statusChangeReason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $statusChangeReason = null;
    
	public function __construct()
	{
		$this->clientIp = null;
		$this->createdAt = null;
		$this->kycResults = null;
		$this->merchant = null;
		$this->organization = null;
		$this->status = null;
		$this->statusChangeReason = null;
	}
}