<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class Files
{
	#[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;
    
	#[SpeakeasyMetadata('multipartForm:name=files')]
    public string $fileName;
    
	public function __construct()
	{
		$this->content = "";
		$this->fileName = "";
	}
}
