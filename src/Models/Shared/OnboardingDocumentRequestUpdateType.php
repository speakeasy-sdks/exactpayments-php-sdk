<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** The Template to use for the Document Request email. */
enum OnboardingDocumentRequestUpdateType: string
{
    case ApplicationReceived = 'application-received';
    case OnboardingPended = 'onboarding-pended';
    case OnboardingDocumentRequest = 'onboarding-document-request';
    case OnboardingApproved = 'onboarding-approved';
    case OnboardingDeclined = 'onboarding-declined';
    case VerifyEmail = 'verify-email';
    case PasswordReset = 'password-reset';
}
