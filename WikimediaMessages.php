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
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'WikimediaMessages',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:WikimediaMessages',
	'author'         => array( 'Tim Starling', 'Siebrand Mazeland' ),
	'descriptionmsg' => 'wikimediamessages-desc',
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['WikimediaMessages'] = $dir .'WikimediaMessages.i18n.php';
$wgExtensionMessagesFiles['WikimediaTemporaryMessages'] = $dir . 'WikimediaTemporaryMessages.i18n.php';
$wgExtensionFunctions[] = 'wfSetupWikimediaMessages';

include_once ( $dir .'WikimediaGrammarForms.php' );

function wfSetupWikimediaMessages() {
	global $wgRightsUrl, $wgHooks;
	if( strpos( $wgRightsUrl, 'creativecommons.org/licenses/by-sa/3.0' ) !== false ) {
		// Override with Wikimedia's site-specific copyright message defaults
		// with the CC/GFDL semi-dual license fun!
		$wgHooks['SkinCopyrightFooter'][] = 'efWikimediaSkinCopyrightFooter';
		$wgHooks['EditPageCopyrightWarning'][] = 'efWikimediaEditPageCopyrightWarning';
	}
}

function efWikimediaEditPageCopyrightWarning( $title, &$msg ) {
	$msg = array( 'wikimedia-copyrightwarning' );
	return true;
}

/**
 * @param $title Title
 * @param $type
 * @param $msg
 * @param $link
 * @param $forContent
 * @return bool
 */
function efWikimediaSkinCopyrightFooter( $title, $type, &$msg, &$link, &$forContent ) {
	$siteMessageKey = 'wikimedia-copyright'; // the default

	global $wgDBname;
	if ( in_array( $wgDBname, array( 'wikidatawiki', 'testwikidatawiki' ) ) ) {
		$siteMessageKey = 'wikidata-copyright';
	}

	if( $type != 'history' ) {
		$msg = $siteMessageKey;
		$forContent = false;
	}

	return true;
}
