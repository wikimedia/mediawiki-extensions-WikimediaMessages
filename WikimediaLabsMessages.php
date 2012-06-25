<?php

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'WikimediaLabsMessages',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:WikimediaMessages',
	'author'         => array( 'Chad Horohoe', 'Sam Reed' ),
	'descriptionmsg' => 'wikimedialabsmessages-desc',
);

$wgExtensionMessagesFiles['WikimediaLabsMessages'] = dirname(__FILE__) . '/WikimediaLabsMessages.i18n.php';
