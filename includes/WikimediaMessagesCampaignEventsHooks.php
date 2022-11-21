<?php

namespace MediaWiki\Extension\WikimediaMessages;

use MediaWiki\Extension\CampaignEvents\Hooks\CampaignEventsGetPolicyMessageForRegistrationHook;

class WikimediaMessagesCampaignEventsHooks implements CampaignEventsGetPolicyMessageForRegistrationHook {

	/**
	 * @inheritDoc
	 */
	public function onCampaignEventsGetPolicyMessageForRegistration( ?string &$message ) {
		$message = 'ext-campaignevents-register-policy';
	}
}
