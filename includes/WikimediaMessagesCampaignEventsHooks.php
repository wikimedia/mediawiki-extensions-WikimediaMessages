<?php

namespace MediaWiki\Extension\WikimediaMessages;

use MediaWiki\Extension\CampaignEvents\Hooks\CampaignEventsGetPolicyMessageForRegistrationFormHook;
use MediaWiki\Extension\CampaignEvents\Hooks\CampaignEventsGetPolicyMessageForRegistrationHook;

class WikimediaMessagesCampaignEventsHooks implements
	CampaignEventsGetPolicyMessageForRegistrationHook,
	CampaignEventsGetPolicyMessageForRegistrationFormHook
{

	/**
	 * @inheritDoc
	 */
	public function onCampaignEventsGetPolicyMessageForRegistration( ?string &$message ) {
		$message = 'ext-campaignevents-register-policy';
	}

	/**
	 * @inheritDoc
	 */
	public function onCampaignEventsGetPolicyMessageForRegistrationForm( ?string &$message ) {
		$message = 'ext-campaignevents-registration-form-policy';
	}
}
