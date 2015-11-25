<?php
if (!defined('MEDIAWIKI')) die();
/**
 * An extension that adds Wikimedia specific functionality
 *
 * @file
 * @ingroup Extensions
 *
 * @copyright Copyright © 2008-2009, Tim Starling
 * @copyright Copyright © 2009, Siebrand Mazeland, Multichill
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'WikimediaMessages',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:WikimediaMessages',
	'author'         => array( 'Tim Starling', 'Siebrand Mazeland', 'James D. Forrester' ),
	'descriptionmsg' => 'wikimediamessages-desc',
	'license-name'   => 'GPL-2.0+',
);

$wgMessagesDirs['WikimediaContactPageMessages'] = __DIR__ . '/i18n/contactpage';
$wgMessagesDirs['WikimediaMessages'] = __DIR__ . '/i18n/wikimedia';
$wgMessagesDirs['WikimediaTemporaryMessages'] = __DIR__ . '/i18n/temporary';

// Overrides of messages from core; must be consistent with MessageCache::get listener
$wgMessagesDirs['WikimediaOverrideMessages'] = __DIR__ . '/i18n/wikimediaoverrides';

// Messages which are not translated at translatewiki.net at the request of the Wikimedia Foundation
$wgMessagesDirs['WikimediaOverrideMessagesNoTranslate'] = __DIR__ . '/i18n/wikimediaoverridesnotranslate';

$wgAutoloadClasses['WikimediaMessagesHooks'] = __DIR__ . '/WikimediaMessages.hooks.php';

include_once ( __DIR__ .'/WikimediaGrammarForms.php' );

// Register hooks
$wgHooks['MessageCache::get'][] = 'WikimediaMessagesHooks::onMessageCacheGet';
$wgHooks['SkinCopyrightFooter'][] = 'WikimediaMessagesHooks::onSkinCopyrightFooter';
$wgHooks['EditPageCopyrightWarning'][] = 'WikimediaMessagesHooks::onEditPageCopyrightWarning';
$wgHooks['MobileLicenseLink'][] = 'WikimediaMessagesHooks::onMobileLicenseLink';
$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'WikimediaMessagesHooks::onSkinTemplateOutputPageBeforeExec';
$wgHooks['TorBlockBlockedMsg'][] = 'WikimediaMessagesHooks::onTorBlockBlockedMsg';
$wgHooks['GlobalBlockingBlockedIpMsg'][] = 'WikimediaMessagesHooks::onGlobalBlockingBlockedIpMsg';
$wgHooks['GlobalBlockingBlockedIpXffMsg'][] = 'WikimediaMessagesHooks::onGlobalBlockingBlockedIpXffMsg';
$wgHooks['MinervaPreRender'][] = 'WikimediaMessagesHooks::onMinervaPreRender';
$wgHooks['UploadForm:initial'][] = 'WikimediaMessagesHooks::onUploadFormInitial';

$wgResourceModules['ext.wikimediamessages.contactpage.affcomusergroup'] = array(
	'position' => 'top',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'WikimediaMessages/modules',
	'styles' => 'ext.wikimediamessages.contactpage.affcomusergroup.css',
);
