<?php
/**
 * Hooks for WikimediaMessages extension
 *
 * @file
 * @ingroup Extensions
 */
class WikimediaMessagesHooks {
	/**
	 * When core requests certain messages, change the key to a Wikimedia version.
	 *
	 * @note Don't make this a closure, it causes the Database Dumps to fail.
	 *   See https://bugs.php.net/bug.php?id=52144
	 *
	 *   mwscript getSlaveServer.php --wiki='dewiki' --group=dump --globals
	 *   print_r( $GLOBALS['wgHooks']['MessageCache::get'] );
	 *
	 * @param String &$lcKey message key to check and possibly convert
	 *
	 * @return bool
	 */
	public static function onMessageCacheGet( &$lcKey ) {
		global $wgLanguageCode, $wmfRealm;

		static $keys = array(
			'createacct-helpusername',
			'createacct-imgcaptcha-help',
			'feedback-termsofuse',
			'globalrenamequeue-email-body-approved',
			'globalrenamequeue-email-body-rejected',
			'sidebar',
			'sulrenamewarning-usenew',
			'centralauth-contribs-locked',
			'centralauth-uwbr-intro',
			'centralauth-uwbr-registration-nodate',
			'privacypage',
			'mwoauthserver-invalid-user',
		);

		if ( $wmfRealm === 'labs' && $lcKey === 'privacypage' ) {
			$lcKey = 'wikimedia-privacypage-labs';
		} elseif ( in_array( $lcKey, $keys, true ) ) {
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
		return true;
	}

	/**
	 * Override with Wikimedia's site-specific copyright message defaults with the CC/GFDL
	 * semi-dual license fun!
	 *
	 * @param $title Title
	 * @param $type string
	 * @param $msg string
	 * @param $link
	 *
	 * @return bool
	 */
	public static function onSkinCopyrightFooter( $title, $type, &$msg, &$link ) {
		global $wgRightsUrl;

		if( strpos( $wgRightsUrl, 'creativecommons.org/licenses/by-sa/3.0' ) !== false ) {
			if ( $type !== 'history' ) {
				global $wgDBname;
				if ( in_array( $wgDBname, array( 'wikidatawiki', 'testwikidatawiki' ) ) ) {
					$msg = 'wikidata-copyright';
				} else {
					$msg = 'wikimedia-copyright'; // the default;
				}
			}
		}

		return true;
	}

	/**
	 * Override with Wikimedia's site-specific copyright message defaults with the CC/GFDL
	 * semi-dual license fun!
	 *
	 * @param $title Title
	 * @param $msg string
	 *
	 * @return bool
	 */
	public static function onEditPageCopyrightWarning( $title, &$msg ) {
		global $wgRightsUrl;

		if( strpos( $wgRightsUrl, 'creativecommons.org/licenses/by-sa/3.0' ) !== false ) {
			$msg = array( 'wikimedia-copyrightwarning' );
		}

		return true;
	}

	/**
	 * Override with Wikimedia's site-specific copyright message defaults with the CC/GFDL
	 * semi-dual license fun!
	 *
	 * @param string $link
	 * @param string $context
	 * @param array $attribs
	 * @param string $msg
	 *
	 * @return bool
	 */
	public static function onMobileLicenseLink( &$link, $context, array $attribs, &$msg ) {
		global $wgRightsUrl, $wgDBname;

		if ( in_array( $wgDBname, array( 'wikidatawiki', 'testwikidatawiki' ) ) ) {
			// Wikidata needs its own special message. See T112088
			$msg = 'wikidata-copyright';
			$link = ' '; // Set this to space to avoid confusion (empty string wont work)
		} elseif( strpos( $wgRightsUrl, 'creativecommons.org/licenses/by-sa/3.0' ) !== false ) {
			// We only display the dual licensing stack in the editor and talk interfaces
			if ( $context === 'editor' || $context === 'talk' ) {
				$link = wfMessage( 'wikimedia-mobile-license-links' )->plain();
			}
		}

		return true;
	}

	/**
	 * Add a "Developers" link to the footer of every page (T35464)
	 *
	 * @param $skin SkinTemplate (from includes/SkinTemplate.php)
	 * @param $template QuickTemplate (from includes/SkinTemplate.php)
	 *
	 * @return bool
	 */
	public static function onSkinTemplateOutputPageBeforeExec( &$skin, &$template ) {
		$destination = Skin::makeInternalOrExternalUrl( $skin->msg( 'wikimedia-developers-url' )->inContentLanguage()->text() );
		$link = Html::element(
			'a',
			array( 'href' => $destination ),
			$skin->msg( 'wikimedia-developers' )->text()
		);
		$template->set( 'developers', $link );
		$template->data['footerlinks']['places'][] = 'developers';
		return true;
	}

	/**
	 * Set the message on TorBlock being triggered
	 *
	 * FIXME: Should have a specific message for WMF projects (T44231)
	 *
	 * @param $msg The message to over-ride
	 *
	 * @return bool
	 */
	public static function onTorBlockBlockedMsg( &$msg ) {
		$msg = 'wikimedia-torblock-blocked';
		return true;
	}

	/**
	 * Set the message on GlobalBlocking IP block being triggered
	 *
	 * @param $msg The message to over-ride
	 *
	 * @return bool
	 */
	public static function onGlobalBlockingBlockedIpMsg( &$msg ) {
		$msg = 'wikimedia-globalblocking-ipblocked';
		return true;
	}

	/**
	 * Set the message on GlobalBlocking XFF block being triggered
	 *
	 * @param $msg The message to over-ride
	 *
	 * @return bool
	 */
	public static function onGlobalBlockingBlockedIpXffMsg( &$msg ) {
		$msg = 'wikimedia-globalblocking-ipblocked-xff';
		return true;
	}

	/**
	 * Add a WMF-specific footer link to terms of use on mobile site
	 * Overrides template data right before it gets sent to template for rendering
	 *
	 * @param MinervaTemplate $tpl
	 *
	 * @return bool
	 */
	public static function onMinervaPreRender( $tpl ) {
		$skin = $tpl->getSkin();
		// This will work only on mobile site because only SkinMobile has this method
		if ( method_exists( $skin, 'getTermsLink' ) ) {
			$tpl->set( 'terms-use', $skin->getTermsLink( 'wikimedia-mobile-terms-url' ) );
		}
		return true;
	}

	/**
	 * Require the creation of MediaWiki:Licenses to enable uploading.
	 * This should prevent a lot of uploading without licenses on small wikis;
	 * some or many of the small WMF wikis do not have any license options,
	 * which is really needed for our copyright policy.
	 *
	 * Do not require it when licenses is in $wgForceUIMsgAsContentMsg,
	 * to prevent checking each subpage of MediaWiki:Licenses.
	 *
	 * @return bool
	 */
	public static function onUploadFormInitial( $tpl ) {
		global $wgForceUIMsgAsContentMsg;
		if ( !in_array( 'licenses', $wgForceUIMsgAsContentMsg )
			&& wfMessage( 'licenses' )->inContentLanguage()->isDisabled()
		) {
			throw new ErrorPageError( 'uploaddisabled', 'wikimedia-upload-nolicenses' );
		}
		return true;
	}
}
