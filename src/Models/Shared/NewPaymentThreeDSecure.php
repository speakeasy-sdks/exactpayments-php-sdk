<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * NewPaymentThreeDSecure - Merchants/Customers to complete an additional verification step with the card issuer when paying.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class NewPaymentThreeDSecure
{
    /**
     * Cavv value for `threeDSecure`.
     * 
     * @var ?string $cavv
     */
	#[\JMS\Serializer\Annotation\SerializedName('cavv')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cavv = null;
    
    /**
     * Identification number of  directory server transaction.
     * 
     * @var ?string $directoryServerTransactionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('directoryServerTransactionId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $directoryServerTransactionId = null;
    
    /**
     * Program protocol value.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\NewPaymentThreeDSecureProgramProtocol $programProtocol
     */
	#[\JMS\Serializer\Annotation\SerializedName('programProtocol')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\NewPaymentThreeDSecureProgramProtocol>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NewPaymentThreeDSecureProgramProtocol $programProtocol = null;
    
    /**
     * Identification value for the `threeDSecure`.
     * 
     * @var ?string $xid
     */
	#[\JMS\Serializer\Annotation\SerializedName('xid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $xid = null;
    
	public function __construct()
	{
		$this->cavv = null;
		$this->directoryServerTransactionId = null;
		$this->programProtocol = null;
		$this->xid = null;
	}
}