<?php

namespace MediaWiki\Extension\WikimediaMessages;

use MediaWiki\Extension\CampaignEvents\Hooks\CampaignEventsGetPolicyMessageHook;

class WikimediaMessagesCampaignEventsHooks implements CampaignEventsGetPolicyMessageHook {

	/**
	 * @inheritDoc
	 */
	public function onCampaignEventsGetPolicyMessage( ?string &$message ) {
		$message = 'ext-campaignevents-register-policy';
	}
}
