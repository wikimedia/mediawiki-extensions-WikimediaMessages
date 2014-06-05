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
	'author'         => array( 'Tim Starling', 'Siebrand Mazeland' ),
	'descriptionmsg' => 'wikimediamessages-desc',
);


$wgMessagesDirs['WikimediaContactPageMessages'] = __DIR__ . '/i18n/contactpage';
$wgMessagesDirs['WikimediaMessages'] = __DIR__ . '/i18n/wikimedia';
$wgMessagesDirs['WikimediaTemporaryMessages'] = __DIR__ . '/i18n/temporary';

// Overrides of messages from core; must be consistent with MessageCache::get listener
$wgMessagesDirs['WikimediaOverrideMessages'] = __DIR__ . '/i18n/wikimediaoverrides';

include_once ( __DIR__ .'/WikimediaGrammarForms.php' );

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

		$wgHooks['MobileLicenseLink'][] = function( &$link, $context, $attribs ) {
			// We only display the dual licensing stack in the editor and talk interfaces
			if ( $context === 'editor' || $context === 'talk' ) {
				$link = wfMessage( 'wikimedia-mobile-license-links' )->plain();
			}
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

};

/**
 * Bug 33464: Add a "Developers" link to the footer
 *
 * @param $skin SkinTemplate (from includes/SkinTemplate.php)
 * @param $template QuickTemplate (from includes/SkinTemplate.php)
 * @return bool
 */
$wgHooks['SkinTemplateOutputPageBeforeExec'][] = function( &$skin, &$template ) {
	$destination = Skin::makeInternalOrExternalUrl( $skin->msg( 'wikimedia-developers-url' )->inContentLanguage()->text() );
	$link = Html::element(
		'a',
		array( 'href' => $destination ),
		$skin->msg( 'wikimedia-developers' )->text()
	);
	$template->set( 'developers', $link );
	$template->data['footerlinks']['places'][] = 'developers';
	return true;
};

/**
 * When core requests certain messages, change the key to a Wikimedia version.
 *
 * @param String &$lcKey message key to check and possibly convert
 */
$wgHooks['MessageCache::get'][] = function( &$lcKey ) {
	global $wgLanguageCode;

	static $keys = array(
		'createacct-helpusername',
		'createacct-imgcaptcha-help',
		'sidebar',
	);

	if ( in_array( $lcKey, $keys, true ) ) {
		$prefixedKey ="wikimedia-$lcKey";

		// MessageCache uses ucfirst if ord( key ) is < 128, which is true of all
		// of the above.  Revisit if non-ASCII keys are used.
		$ucKey = ucfirst( $lcKey );

		$cache = MessageCache::singleton();
		if (
			// Override order:
			// 1. If the MediaWiki:$ucKey page exists, use the key unprefixed
			// (in all languages) with normal fallback order.  Specific
			// language pages (MediaWiki:$ucKey/xy) are not checked when
			// deciding which key to use, but are still used if applicable
			// after the key is decided.
			//
			// 2. Otherwise, use the prefixed key with normal fallback order
			// (including MediaWiki pages if they exist).
			$cache->getMsgFromNamespace( $ucKey, $wgLanguageCode ) === false
		) {
			$lcKey = $prefixedKey;
		}
	}
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

/**
 * Require the creation of MediaWiki:Licenses to enable uploading.
 * This should prevent a lot of uploading without licenses on small wikis;
 * some or many of the small WMF wikis do not have any license options,
 * which is really needed for our copyright policy.
 *
 * Do not require it when licenses is in $wgForceUIMsgAsContentMsg,
 * to prevent checking each subpage of MediaWiki:Licenses.
 */
$wgHooks['UploadForm:initial'][] = function() {
	global $wgForceUIMsgAsContentMsg;
	if ( !in_array( 'licenses', $wgForceUIMsgAsContentMsg )
		&& wfMessage( 'licenses' )->inContentLanguage()->isDisabled()
	) {
		throw new ErrorPageError( 'uploaddisabled', 'wikimedia-upload-nolicenses' );
	}
	return true;
};
