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
$wgExtensionFunctions[] = 'wfWikimediaGlobalBlockMessages';
// Bug 33464: Add a "Developers" link to the page footer
$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'efWikimediaDevelopersFooterLink';

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

/**
 * Add a "Developers" link to the footer
 *
 * @param $skin Skin (from includes/SkinTemplate.php)
 * @param $template Template (from includes/SkinTemplate.php)
 * @return bool
 */
function efWikimediaDevelopersFooterLink ( &$skin, &$template ) {
	// Use the value of "MediaWiki:Wikimedia-developers"
	$title = Title::newFromText( $skin->msg( 'wikimedia-developers' )->text() );
	// Use the value of "MediaWiki:Wikimedia-developers-url"
	$destination = Skin::makeInternalOrExternalUrl( $skin->msg( 'wikimedia-developers-url' )->inContentLanguage()->text() );
	$link = Linker::makeExternalLink( $destination, $title );
	$template->set( 'developers', $link );
	$template->data['footerlinks']['places'][] = 'developers';
	return true;
};

// Bug 42231: Should have a specific message for WMF projects
function wfWikimediaGlobalBlockMessages() {
	global $wgHooks;
	$wgHooks['TorBlockBlockedMsg'][] = 'efWikimediaTorBlockBlockedMsg';
	$wgHooks['GlobalBlockingBlockedIpMsg'][] = 'efWikimediaGlobalBlockingBlockedIpMsg';
	$wgHooks['GlobalBlockingBlockedIpXffMsg'][] = 'efWikimediaGlobalBlockingBlockedIpXffMsg';
}

function efWikimediaTorBlockBlockedMsg( &$msg ) {
	$msg = array( 'wikimedia-torblock-blocked' );
	return true;
}

function efWikimediaGlobalBlockingBlockedIpMsg( &$msg ) {
	$msg = array( 'wikimedia-globalblocking-ipblocked' );
	return true;
}

function efWikimediaGlobalBlockingBlockedIpXffMsg( &$msg ) {
	$msg = array( 'wikimedia-globalblocking-ipblocked-xff' );
	return true;
}