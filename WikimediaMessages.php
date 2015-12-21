<?php
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

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'WikimediaMessages' );

	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['WikimediaContactPageMessages'] = __DIR__ . '/i18n/contactpage';
	$wgMessagesDirs['WikimediaMessages'] = __DIR__ . '/i18n/wikimedia';
	$wgMessagesDirs['WikimediaTemporaryMessages'] = __DIR__ . '/i18n/temporary';
	$wgMessagesDirs['WikimediaOverrideMessages'] = __DIR__ . '/i18n/wikimediaoverrides';

	// Messages which are not translated at translatewiki.net at the request of the Wikimedia Foundation
	$wgMessagesDirs['WikimediaOverrideMessagesNoTranslate'] = __DIR__ . '/i18n/wikimediaoverridesnotranslate';

	/* wfWarn(
		'Deprecated PHP entry point used for WikimediaMessages extension. Please use wfLoadExtension '.
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */

	return true;
} else {
	die( 'This version of the WikimediaMessages extension requires MediaWiki 1.25+' );
}
