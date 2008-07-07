<?php

$wgExtensionCredits['other'][] = array(
	'name'           => 'WikimediaMessages',
	'author'         => 'Tim Starling',
	'svn-date'       => '$LastChangedDate$',
	'svn-revision'   => '$LastChangedRevision$',
	'description'    => 'Wikimedia specific messages',
	'descriptionmsg' => 'wikimediamessages-desc',
);

$wgExtensionMessagesFiles['WikimediaMessages'] = dirname(__FILE__).'/WikimediaMessages.i18n.php';
$wgExtensionFunctions[] = 'wfSetupWikimediaMessages';

function wfSetupWikimediaMessages() {
	wfLoadExtensionMessages('WikimediaMessages');
}
