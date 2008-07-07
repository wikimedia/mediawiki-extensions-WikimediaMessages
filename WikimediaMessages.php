<?php

$wgExtensionMessagesFiles['WikimediaMessages'] = dirname(__FILE__).'/WikimediaMessages.i18n.php';
$wgExtensionFunctions[] = 'wfSetupWikimediaMessages';

function wfSetupWikimediaMessages() {
	wfLoadExtensionMessages('WikimediaMessages');
}
