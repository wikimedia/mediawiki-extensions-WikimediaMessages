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

include_once ( $dir .'WikimediaGrammarForms.php' );

$wgExtensionFunctions[] = function() {
	global $wgRightsUrl, $wgHooks;

	if( strpos( $wgRightsUrl, 'creativecommons.org/licenses/by-sa/3.0' ) !== false ) {
		// Override with Wikimedia's site-specific copyright message defaults
		// with the CC/GFDL semi-dual license fun!

		/**
		 * @param $title Title
		 * @param $type string
		 * @param $msg string
		 * @param $link
		 * @param $forContent bool
		 * @return bool
		 */
		$wgHooks['SkinCopyrightFooter'][] = function( $title, $type, &$msg, &$link, &$forContent ) {
			if ( $type !== 'history' ) {
				global $wgDBname;
				if ( in_array( $wgDBname, array( 'wikidatawiki', 'testwikidatawiki' ) ) ) {
					$msg = 'wikidata-copyright';
				} else {
					$msg = 'wikimedia-copyright'; // the default;
				}
				$forContent = false;
			}

			return true;
		};

		$wgHooks['EditPageCopyrightWarning'][] = function( $title, &$msg ) {
			$msg = array( 'wikimedia-copyrightwarning' );
			return true;
		};

		$wgHooks['FlowTermsOfUse'][] = function( &$addTopicKey, &$replyKey, &$editKey ) {
			$addTopicKey = 'wikimedia-flow-terms-of-use-new-topic';
			$replyKey = 'wikimedia-flow-terms-of-use-reply';
			$editKey = 'wikimedia-flow-terms-of-use-edit';
			return true;
		};
	}

	//Bug 42231: Should have a specific message for WMF projects
	$wgHooks['TorBlockBlockedMsg'][] = function( &$msg ) {
		$msg = 'wikimedia-torblock-blocked';
		return true;
	};
	$wgHooks['GlobalBlockingBlockedIpMsg'][] = function( &$msg ) {
		$msg = 'wikimedia-globalblocking-ipblocked';
		return true;
	};
	$wgHooks['GlobalBlockingBlockedIpXffMsg'][] = function( &$msg ) {
		$msg = 'wikimedia-globalblocking-ipblocked-xff';
		return true;
	};
	$wgHooks['EditPageMobileCopyrightWarning'][] = function( $title, &$msg ) {
		$msg = array( 'wikimedia-mobile-copyrightwarning' );
		return true;
	};
	$wgHooks['UploadMobileCopyrightWarning'][] = function( $title, &$msg ) {
		$msg = array( 'wikimedia-mobile-photo-copyrightwarning' );
		return true;
	};

};

/**
 * Bug 33464: Add a "Developers" link to the footer
 *
 * @param $skin SkinTemplate (from includes/SkinTemplate.php)
 * @param $template QuickTemplate (from includes/SkinTemplate.php)
 * @return bool
 */
$wgHooks['SkinTemplateOutputPageBeforeExec'][] = function( &$skin, &$template ) {
	// Use the value of "MediaWiki:Wikimedia-developers"
	$title = Title::newFromText( $skin->msg( 'wikimedia-developers' )->text() );
	// Use the value of "MediaWiki:Wikimedia-developers-url"
	$destination = Skin::makeInternalOrExternalUrl( $skin->msg( 'wikimedia-developers-url' )->inContentLanguage()->text() );
	$link = Linker::makeExternalLink( $destination, $title );
	$template->set( 'developers', $link );
	$template->data['footerlinks']['places'][] = 'developers';
	return true;
};

/**
 * Add a WMF-specific footer link to terms of use on mobile site
 * Overrides template data right before it gets sent to template for rendering
 * @param MinervaTemplate $tpl
 *
 * @return bool
 */
$wgHooks['MinervaPreRender'][] = function( $tpl ) {
	$skin = $tpl->getSkin();
	// This will work only on mobile site because only SkinMobile has this method
	if ( method_exists( $skin, 'getTermsLink' ) ) {
		$tpl->set( 'terms-use', $skin->getTermsLink( 'wikimedia-mobile-terms-url' ) );
	}
	return true;
};
