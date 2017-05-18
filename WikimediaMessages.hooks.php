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

		static $keys = [
			'acct_creation_throttle_hit',
			'centralauth-contribs-locked',
			'centralauth-uwbr-intro',
			'centralauth-uwbr-registration-nodate',
			'createacct-helpusername',
			'createacct-imgcaptcha-help',
			'delete-toobig', // T139797
			'feedback-termsofuse',
			'flow-terms-of-use-new-topic',
			'flow-terms-of-use-reply',
			'flow-terms-of-use-edit',
			'flow-terms-of-use-summarize',
			'flow-terms-of-use-lock-topic',
			'flow-terms-of-use-unlock-topic',
			'globalrenamequeue-email-body-approved',
			'globalrenamequeue-email-body-rejected',
			'mwoauthserver-invalid-user',
			'privacypage',
			'sidebar',
			'sulrenamewarning-usenew',
			'ipb-confirmhideuser', // T121639
		];

		if ( $wmfRealm === 'labs' && $lcKey === 'privacypage' ) {
			$lcKey = 'wikimedia-privacypage-labs';
		} else {
			if ( in_array( $lcKey, $keys, true ) ) {
				$transformedKey ="wikimedia-$lcKey";
			} else {
				$transformedKey = self::transformKeyForGettingStarted( $lcKey );
				if ( $transformedKey === $lcKey ) {
					return true;
				}
			}

			// MessageCache uses ucfirst if ord( key ) is < 128, which is true of all
			// of the above.  Revisit if non-ASCII keys are used.
			$ucKey = ucfirst( $lcKey );

			$cache = MessageCache::singleton();
			if (
				/*
				 * Override order:
				 * 1. If the MediaWiki:$ucKey page exists, use the key unprefixed
				 * (in all languages) with normal fallback order.  Specific
				 * language pages (MediaWiki:$ucKey/xy) are not checked when
				 * deciding which key to use, but are still used if applicable
				 * after the key is decided.
				 *
				 * 2. Otherwise, use the prefixed key with normal fallback order
				 * (including MediaWiki pages if they exist).
				 */
				$cache->getMsgFromNamespace( $ucKey, $wgLanguageCode ) === false
			) {
				$lcKey = $transformedKey;
			}
		}
		return true;
	}

	/**
	 * Transforms keys for GettingStarted, if needed.
	 * This is used to provide Wikipedia-specific variants for certain keys.
	 *
	 * @param string $lcKey Original key, in lowercase form
	 *
	 * @return string New key, in lowercase form, either the same or transformed
	 */
	protected static function transformKeyForGettingStarted( $lcKey ) {
		global $wgConf, $wgDBname;

		list( $site, $lang ) = $wgConf->siteFromDB( $wgDBname );

		// There are several wikis (e.g. commonswiki, wikidatawiki) that wrongly
		// return Wikipedia here.  Before deploying GettingStarted to one, find a
		// way to determine the real family.
		if ( $site === 'wikipedia' ) {
			if ( in_array( $lcKey, [
				"gettingstarted-task-toolbar-try-another-text",
				"gettingstarted-task-toolbar-no-suggested-page",
				"gettingstarted-task-copyedit-toolbar-description",
				"gettingstarted-task-copyedit-toolbar-try-another-title",
				"guidedtour-tour-gettingstartedtasktoolbarintro-description",
				"guidedtour-tour-gettingstartedtasktoolbar-ambox-description",
				"guidedtour-tour-gettingstartedtasktoolbar-edit-article-title",
				"guidedtour-tour-gettingstartedtasktoolbar-edit-article-description",
				"guidedtour-tour-gettingstartedtasktoolbarve-click-save-description",
				"guidedtour-tour-gettingstarted-click-preview-description",
				"gettingstarted-cta-edit-page",
				"gettingstarted-cta-fix-pages",
			] ) ) {
				return "{$lcKey}-wikipedia";
			}
		}

		return $lcKey;
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

		if ( strpos( $wgRightsUrl, 'creativecommons.org/licenses/by-sa/3.0' ) !== false ) {
			if ( $type !== 'history' ) {
				global $wgDBname;
				if ( in_array( $wgDBname, [ 'wikidatawiki', 'testwikidatawiki' ] ) ) {
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

		if ( strpos( $wgRightsUrl, 'creativecommons.org/licenses/by-sa/3.0' ) !== false ) {
			$msg = [ 'wikimedia-copyrightwarning' ];
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

		if ( in_array( $wgDBname, [ 'wikidatawiki', 'testwikidatawiki' ] ) ) {
			// Wikidata needs its own special message. See T112088
			$msg = 'wikidata-copyright';
			$link = ' '; // Set this to space to avoid confusion (empty string wont work)
		} elseif ( strpos( $wgRightsUrl, 'creativecommons.org/licenses/by-sa/3.0' ) !== false ) {
			// We only display the dual licensing stack in the editor and talk interfaces
			if ( $context === 'editor' || $context === 'talk' ) {
				$link = wfMessage( 'wikimedia-mobile-license-links' )
					->inContentLanguage()
					->plain();
			}
		}

		return true;
	}

	/**
	 * Add a "Developers"  (T35464) and "Cookie statement" (T124366) link to the footer of every page
	 *
	 * @param $skin SkinTemplate (from includes/SkinTemplate.php)
	 * @param $template QuickTemplate (from includes/SkinTemplate.php)
	 *
	 * @return bool
	 */
	public static function onSkinTemplateOutputPageBeforeExec( &$skin, &$template ) {
		$devDestination = Skin::makeInternalOrExternalUrl(
			$skin->msg( 'wikimedia-developers-url' )->inContentLanguage()->text() );
		$devLink = Html::element(
			'a',
			[ 'href' => $devDestination ],
			$skin->msg( 'wikimedia-developers' )->text()
		);
		$template->set( 'developers', $devLink );
		$template->data['footerlinks']['places'][] = 'developers';
		$cookieDestination = Skin::makeInternalOrExternalUrl(
			$skin->msg( 'wikimedia-cookiestatement-page' )->inContentLanguage()->text() );
		$cookieLink = Html::element(
			'a',
			[ 'href' => $cookieDestination ],
			$skin->msg( 'wikimedia-cookiestatement' )->text()
		);
		$template->set( 'cookiestatement', $cookieLink );
		$template->data['footerlinks']['places'][] = 'cookiestatement';
		return true;
	}

	/**
	 * Set the message on TorBlock being triggered
	 *
	 * FIXME: Should have a specific message for WMF projects (T44231)
	 *
	 * @param string $msg The message to over-ride
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
	 * @param string $msg The message to over-ride
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
	 * @param string $msg The message to over-ride
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
	 * @param $tpl
	 * @return bool
	 * @throws ErrorPageError
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

	/**
	 * Over-ride `$wgGrammarForms` for Wikimedia sites as a more convenient form
	 * than setting in InitialiseSettings.php. Initial version was compiled from
	 * then-current Wikimedia configuration and contents of LanguageXx.php.
	 */
	public static function onRegistration() {
		global $wgGrammarForms;

		$wgGrammarForms['ang'] = [
			// accusative
			'wrēgendlīc' => [
				'Wikipǣdia' => 'Wikipǣdie',
				'Wikiwordbōc' => 'Wikiwordbōc',
			],
			// genitive
			'geāgniendlīc' => [
				'Wikipǣdia' => 'Wikipǣdie',
				'Wikiwordbōc' => 'Wikiwordbēc',
			],
			// dative
			'forgifendlīc' => [
				'Wikipǣdia' => 'Wikipǣdie',
				'Wikiwordbōc' => 'Wikiwordbēc',
			],
			// instrumental
			'tōllīc' => [
				'Wikipǣdia' => 'Wikipǣdie',
				'Wikiwordbōc' => 'Wikiwordbēc',
			],
		]; // ang

		$wgGrammarForms['be'] = [
			// genitive
			'родны' => [
				'ВікіВіды'    => 'ВікіВідаў',
				'ВікіКнігі'   => 'ВікіКніг',
				'Вікікрыніцы' => 'Вікікрыніц',
				'ВікіНавіны'  => 'ВікіНавін',
				'Вікіслоўнік' => 'Вікіслоўніка',
				'Вікіпедыя'   => 'Вікіпедыі',
			],
			// accusative
			'вінавальны' => [
				'Вікіпедыя'   => 'Вікіпедыю',
			],
			// prepositional
			'месны' => [
				'ВікіВіды'    => 'ВікіВідах',
				'ВікіКнігі'   => 'ВікіКнігах',
				'Вікікрыніцы' => 'Вікікрыніцах',
				'ВікіНавіны'  => 'ВікіНавінах',
				'Вікіслоўнік' => 'Вікіслоўніку',
				'Вікіпедыя'   => 'Вікіпедыі',
			],
		]; // be

		$wgGrammarForms['be-tarask'] = [
			// genitive
			'родны' => [
				'Віківіды'    => 'Віківідаў',
				'Вікізьвесткі'=> 'Вікізьвестак',
				'Вікікнігі'   => 'Вікікніг',
				'Вікікрыніцы' => 'Вікікрыніц',
				'Вікімэдыя'   => 'Вікімэдыі',
				'Вікінавіны'  => 'Вікінавін',
				'Вікіпэдыя'   => 'Вікіпэдыі',
				'Вікіслоўнік' => 'Вікіслоўніка',
				'Вікісховішча'=> 'Вікісховішча',
				'Фундацыя «Вікімэдыя»' => 'Фундацыі «Вікімэдыя»',
			],
			// dative
			'давальны' => [
				'Віківіды'    => 'Віківідам',
				'Вікізьвесткі'=> 'Вікізьвесткам',
				'Вікікнігі'   => 'Вікікнігам',
				'Вікікрыніцы' => 'Вікікрыніцам',
				'Вікімэдыя'   => 'Вікімэдыі',
				'Вікінавіны'  => 'Вікінавінам',
				'Вікіпэдыя'   => 'Вікіпэдыі',
				'Вікіслоўнік' => 'Вікіслоўніку',
				'Вікісховішча'=> 'Вікісховішчу',
				'Фундацыя «Вікімэдыя»' => 'Фундацыі «Вікімэдыя»',
			],
			// accusative
			'вінавальны' => [
				'Віківіды'    => 'Віківіды',
				'Вікізьвесткі'=> 'Вікізьвесті',
				'Вікікнігі'   => 'Вікікнігі',
				'Вікікрыніцы' => 'Вікікрыніцы',
				'Вікімэдыя'   => 'Вікімэдыю',
				'Вікінавіны'  => 'Вікінавіны',
				'Вікіпэдыя'   => 'Вікіпэдыю',
				'Вікіслоўнік' => 'Вікіслоўнік',
				'Вікісховішча'=> 'Вікісховішча',
				'Фундацыя «Вікімэдыя»' => 'Фундацыю «Вікімэдыя»',
			],
			// instrumental
			'творны' => [
				'Віківіды'    => 'Віківідамі',
				'Вікізьвесткі'=> 'Вікізьвесткамі',
				'Вікікнігі'   => 'Вікікнігамі',
				'Вікікрыніцы' => 'Вікікрыніцамі',
				'Вікімэдыя'   => 'Вікімэдыяй',
				'Вікінавіны'  => 'Вікінавінамі',
				'Вікіпэдыя'   => 'Вікіпэдыяй',
				'Вікіслоўнік' => 'Вікіслоўнікам',
				'Вікісховішча'=> 'Вікісховішчам',
				'Фундацыя «Вікімэдыя»' => 'Фундацыяй «Вікімэдыя»',
			],
			// prepositional
			'месны' => [
				'Віківіды'    => 'Віківідах',
				'Вікізьвесткі'=> 'Вікізьвестках',
				'Вікікнігі'   => 'Вікікнігах',
				'Вікікрыніцы' => 'Вікікрыніцах',
				'Вікімэдыя'   => 'Вікімэдыі',
				'Вікінавіны'  => 'Вікінавінах',
				'Вікіпэдыя'   => 'Вікіпэдыі',
				'Вікіслоўнік' => 'Вікіслоўніку',
				'Вікісховішча'=> 'Вікісховішчы',
				'Фундацыя «Вікімэдыя»' => 'Фундацыі «Вікімэдыя»',
			],
		]; // be-tarask

		$wgGrammarForms['bs'] = [
			// genitive
			'genitiv' => [
				'Vikirječnik' => 'Wikirječnika',
				'Wikicitati'  => 'Wikicitata',
				'Wikiizvor'   => 'Wikiizvora',
				'Wikiknjige'  => 'Wikiknjiga',
				'Wikipedia'   => 'Wikipedije',
				'Wikipodaci'  => 'Wikipodataka',
				'Wikimedia Commons' => 'Wikimedia Commonsa',
			],
			// dative
			'dativ' => [
				'Vikirječnik' => 'Wikirječniku',
				'Wikicitati'  => 'Wikicitatima',
				'Wikiizvor'   => 'Wikiizvoru',
				'Wikiknjige'  => 'Wikiknjigama',
				'Wikipedia'   => 'Wikipediji',
				'Wikipodaci'  => 'Wikipodacima',
				'Wikivijesti' => 'Wikivijestima',
				'Wikimedia Commons' => 'Wikimedia Commonsu',
			],
			// accusative
			'akuzativ' => [
				'Vikirječnik' => 'Wikirječnik',
				'Wikicitati'  => 'Wikicitate',
				'Wikiizvor'   => 'Wikiizvora',
				'Wikipedia'   => 'Wikipediju',
				'Wikipodaci'  => 'Wikipodatke',
			],
			// vocative
			'vokativ' => [
				'Vikirječnik' => 'Wikirječniče',
				'Wikiizvor'   => 'Wikizivoru',
				'Wikipedia'   => 'Wikipedijo',
				'Wikimedia Commons' => 'Wikimedia Commonse',
			],
			// instrumental
			'instrumental' => [
				'Vikirječnik' => 's Wikirječnikom',
				'Wikicitati'  => 's Wikicitatima',
				'Wikiizvor'   => 's Wikiizvorom',
				'Wikiknjige'  => 's Wikiknjigama',
				'Wikipedia'   => 's Wikipedijom', // T130141
				'Wikipodaci'  => 's Wikipodacima',
				'Wikivijesti' => 's Wikivijestima',
				'Wikimedia Commons' => 's Wikimedia Commonsom',
			],
			// locative
			'lokativ' => [
				'Vikirječnik' => 'o Wikirječniku',
				'Wikicitati'  => 'o Wikicitatima',
				'Wikiizvor'   => 'o Wikiizvoru',
				'Wikiknjige'  => 'o Wikiknjigama',
				'Wikipedia'   => 'o Wikipediji',
				'Wikipodaci'  => 'o Wikipodacima',
				'Wikivijesti' => 'o Wikivijestima',
				'Wikimedia Commons' => 'o Wikimedia Commonsu',
			],
		]; // bs

		$wgGrammarForms['cs'] = [
			// only forms different than default/given
			'1sg' => [
				'Wikibooks'   => 'Wikiknihy',
				'Wikinews'    => 'Wikizprávy',
				'Wikipedia'   => 'Wikipedie',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroje',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzita',
				'Wikivoyage'  => 'Wikicesty',
				'Wiktionary'  => 'Wikislovník',
			],
			'2sg' => [
				'uživatel'    => 'uživatele',
				'Wikibooks'   => 'Wikiknih',
				'Wikidata'    => 'Wikidat',
				'Wikinews'    => 'Wikizpráv',
				'Wikipedia'   => 'Wikipedie',
				'Wikiquote'   => 'Wikicitátů',
				'Wikisource'  => 'Wikizdrojů',
				'Wikispecies' => 'Wikidruhů',
				'Wikiversity' => 'Wikiverzity',
				'Wikivoyage'  => 'Wikicest',
				'Wiktionary'  => 'Wikislovníku',
				'Wikicesty'   => 'Wikicest',
				'Wikicitáty'  => 'Wikicitátů',
				'Wikidruhy'   => 'Wikidruhů',
				'Wikiknihy'   => 'Wikiknih',
				'Wikislovník' => 'Wikislovníku',
				'Wikiverzita' => 'Wikiverzity',
				'Wikizdroje'  => 'Wikizdrojů',
				'Wikizprávy'  => 'Wikizpráv',
			],
			'3sg' => [
				'uživatel'    => 'uživateli',
				'Wikibooks'   => 'Wikiknihám',
				'Wikidata'    => 'Wikidatům',
				'Wikinews'    => 'Wikizprávám',
				'Wikipedia'   => 'Wikipedii',
				'Wikiquote'   => 'Wikicitátům',
				'Wikisource'  => 'Wikizdrojům',
				'Wikispecies' => 'Wikidruhům',
				'Wikiversity' => 'Wikiverzitě',
				'Wikivoyage'  => 'Wikicestám',
				'Wiktionary'  => 'Wikislovníku',
				'Wikicesty'   => 'Wikicestám',
				'Wikicitáty'  => 'Wikicitátům',
				'Wikidruhy'   => 'Wikidruhům',
				'Wikiknihy'   => 'Wikiknihám',
				'Wikipedie'   => 'Wikipedii',
				'Wikislovník' => 'Wikislovníku',
				'Wikiverzita' => 'Wikiverzitě',
				'Wikizdroje'  => 'Wikizdrojům',
				'Wikizprávy'  => 'Wikizprávám',
			],
			'4sg' => [
				'uživatel'    => 'uživatele',
				'Wikibooks'   => 'Wikiknihy',
				'Wikinews'    => 'Wikizprávy',
				'Wikipedia'   => 'Wikipedii',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroje',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzitu',
				'Wikivoyage'  => 'Wikicesty',
				'Wiktionary'  => 'Wikislovník',
				'Wikipedie'   => 'Wikipedii',
				'Wikiverzita' => 'Wikiverzitu',
			],
			'5sg' => [
				'uživatel'    => 'uživateli',
				'Wikibooks'   => 'Wikiknihy',
				'Wikinews'    => 'Wikizprávy',
				'Wikipedia'   => 'Wikipedie',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroje',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzito',
				'Wikivoyage'  => 'Wikicesty',
				'Wiktionary'  => 'Wikislovníku',
				'Wikislovník' => 'Wikislovníku',
				'Wikiverzita' => 'Wikiverzito',
			],
			'6sg' => [
				'uživatel'    => 'uživateli',
				'Wikibooks'   => 'Wikiknihách',
				'Wikidata'    => 'Wikidatech',
				'Wikinews'    => 'Wikizprávách',
				'Wikipedia'   => 'Wikipedii',
				'Wikiquote'   => 'Wikicitátech',
				'Wikisource'  => 'Wikizdrojích',
				'Wikispecies' => 'Wikidruzích',
				'Wikiversity' => 'Wikiverzitě',
				'Wikivoyage'  => 'Wikicestách',
				'Wiktionary'  => 'Wikislovníku',
				'Wikicesty'   => 'Wikicestách',
				'Wikicitáty'  => 'Wikicitátech',
				'Wikidruhy'   => 'Wikidruzích',
				'Wikiknihy'   => 'Wikiknihách',
				'Wikipedie'   => 'Wikipedii',
				'Wikislovník' => 'Wikislovníku',
				'Wikiverzita' => 'Wikiverzitě',
				'Wikizdroje'  => 'Wikizdrojích',
				'Wikizprávy'  => 'Wikizprávách',
			],
			'7sg' => [
				'uživatel'    => 'uživatelem',
				'Wikibooks'   => 'Wikiknihami',
				'Wikidata'    => 'Wikidaty',
				'Wikinews'    => 'Wikizprávami',
				'Wikipedia'   => 'Wikipedií',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroji',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzitou',
				'Wikivoyage'  => 'Wikicestami',
				'Wiktionary'  => 'Wikislovníkem',
				'Wikicesty'   => 'Wikicestami',
				'Wikiknihy'   => 'Wikiknihami',
				'Wikipedie'   => 'Wikipedií',
				'Wikislovník' => 'Wikislovníkem',
				'Wikiverzita' => 'Wikiverzitou',
				'Wikizdroje'  => 'Wikizdroji',
				'Wikizprávy'  => 'Wikizprávami',
			],
			'1pl' => [
				'uživatel'    => 'uživatelé',
				'Wikibooks'   => 'Wikiknihy',
				'Wikinews'    => 'Wikizprávy',
				'Wikipedia'   => 'Wikipedie',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroje',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzity',
				'Wikivoyage'  => 'Wikicesty',
				'Wiktionary'  => 'Wikislovníky',
				'Wikislovník' => 'Wikislovníky',
				'Wikiverzita' => 'Wikiverzity',
			],
			'2pl' => [
				'uživatel'    => 'uživatelů',
				'Wikibooks'   => 'Wikiknih',
				'Wikidata'    => 'Wikidat',
				'Wikinews'    => 'Wikizpráv',
				'Wikipedia'   => 'Wikipedií',
				'Wikiquote'   => 'Wikicitátů',
				'Wikisource'  => 'Wikizdrojů',
				'Wikispecies' => 'Wikidruhů',
				'Wikiversity' => 'Wikiverzit',
				'Wikivoyage'  => 'Wikicest',
				'Wiktionary'  => 'Wikislovníků',
				'Wikicesty'   => 'Wikicest',
				'Wikicitáty'  => 'Wikicitátů',
				'Wikidruhy'   => 'Wikidruhů',
				'Wikiknihy'   => 'Wikiknih',
				'Wikipedie'   => 'Wikipedií',
				'Wikislovník' => 'Wikislovníků',
				'Wikiverzita' => 'Wikiverzit',
				'Wikizdroje'  => 'Wikizdrojů',
				'Wikizprávy'  => 'Wikizpráv',
			],
			'3pl' => [
				'uživatel'    => 'uživatelům',
				'Wikibooks'   => 'Wikiknihám',
				'Wikidata'    => 'Wikidatům',
				'Wikinews'    => 'Wikizprávám',
				'Wikipedia'   => 'Wikipediím',
				'Wikiquote'   => 'Wikicitátům',
				'Wikisource'  => 'Wikizdrojům',
				'Wikispecies' => 'Wikidruhům',
				'Wikiversity' => 'Wikiverzitám',
				'Wikivoyage'  => 'Wikicestám',
				'Wiktionary'  => 'Wikislovníkům',
				'Wikicesty'   => 'Wikicestám',
				'Wikicitáty'  => 'Wikicitátům',
				'Wikidruhy'   => 'Wikidruhům',
				'Wikiknihy'   => 'Wikiknihám',
				'Wikipedie'   => 'Wikipediím',
				'Wikislovník' => 'Wikislovníkům',
				'Wikiverzita' => 'Wikiverzitám',
				'Wikizdroje'  => 'Wikizdrojům',
				'Wikizprávy'  => 'Wikizprávám',
			],
			'4pl' => [
				'uživatel'    => 'uživatele',
				'Wikibooks'   => 'Wikiknihy',
				'Wikinews'    => 'Wikizprávy',
				'Wikipedia'   => 'Wikipedie',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroje',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzity',
				'Wikivoyage'  => 'Wikicesty',
				'Wiktionary'  => 'Wikislovníky',
				'Wikislovník' => 'Wikislovníky',
				'Wikiverzita' => 'Wikiverzity',
			],
			'5pl' => [
				'uživatel'    => 'uživatelé',
				'Wikibooks'   => 'Wikiknihy',
				'Wikinews'    => 'Wikizprávy',
				'Wikipedia'   => 'Wikipedie',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroje',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzity',
				'Wikivoyage'  => 'Wikicesty',
				'Wiktionary'  => 'Wikislovníky',
				'Wikislovník' => 'Wikislovníky',
				'Wikiverzita' => 'Wikiverzity',
			],
			'6pl' => [
				'uživatel'    => 'uživatelích',
				'Wikibooks'   => 'Wikiknihách',
				'Wikidata'    => 'Wikidatech',
				'Wikinews'    => 'Wikizprávách',
				'Wikipedia'   => 'Wikipediích',
				'Wikiquote'   => 'Wikicitátech',
				'Wikisource'  => 'Wikizdrojích',
				'Wikispecies' => 'Wikidruzích',
				'Wikiversity' => 'Wikiverzitách',
				'Wikivoyage'  => 'Wikicestách',
				'Wiktionary'  => 'Wikislovnících',
				'Wikicesty'   => 'Wikicestách',
				'Wikicitáty'  => 'Wikicitátech',
				'Wikidruhy'   => 'Wikidruzích',
				'Wikiknihy'   => 'Wikiknihách',
				'Wikipedie'   => 'Wikipediích',
				'Wikislovník' => 'Wikislovnících',
				'Wikiverzita' => 'Wikiverzitách',
				'Wikizdroje'  => 'Wikizdrojích',
				'Wikizprávy'  => 'Wikizprávách',
			],
			'7pl' => [
				'uživatel'    => 'uživateli',
				'Wikibooks'   => 'Wikiknihami',
				'Wikidata'    => 'Wikidaty',
				'Wikinews'    => 'Wikizprávami',
				'Wikipedia'   => 'Wikipediemi',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroji',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzitami',
				'Wikivoyage'  => 'Wikicestami',
				'Wiktionary'  => 'Wikislovníky',
				'Wikicesty'   => 'Wikicestami',
				'Wikiknihy'   => 'Wikiknihami',
				'Wikipedie'   => 'Wikipediemi',
				'Wikislovník' => 'Wikislovníky',
				'Wikiverzita' => 'Wikiverzitami',
				'Wikizdroje'  => 'Wikizdroji',
				'Wikizprávy'  => 'Wikizprávami',
			],
		]; // cs

		$wgGrammarForms['dsb'] = [
			// genitive
			'genitiw' => [
				'Wikipedija'  => 'Wikipedije',
				'Wikiknihi'   => 'Wikiknih',
				'Wikinowiny'  => 'Wikinowin',
				'Wikižórło'   => 'Wikižórła',
				'Wikicitaty'  => 'Wikicitatow',
				'Wikisłownik' => 'Wikisłownika',
			],
			// dative
			'datiw' => [
				'Wikipedija'  => 'Wikipediji',
				'Wikiknihi'   => 'Wikikniham',
				'Wikinowiny'  => 'Wikinowinam',
				'Wikižórło'   => 'Wikižórłu',
				'Wikicitaty'  => 'Wikicitatam',
				'Wikisłownik' => 'Wikisłownikej',
			],
			// accusative
			'akuzativ' => [
				'Wikipedija'  => 'Wikipediju',
				'Wikiknihi'   => 'Wikiknknihi',
			],
			// instrumental
			'instrumental' => [
				'Wikipedija'  => 'Wikipediju',
				'Wikiknihi'   => 'Wikiknihami',
				'Wikinowiny'  => 'Wikinowinami',
				'Wikižórło'   => 'Wikižórłom',
				'Wikicitaty'  => 'Wikicitatami',
				'Wikisłownik' => 'Wikisłownikom',
			],
			// locative
			'lokatiw' => [
				'Wikipedija'  => 'Wikipediji',
				'Wikiknihi'   => 'Wikiknihach',
				'Wikinowiny'  => 'Wikinowinach',
				'Wikižórło'   => 'Wikižórłu',
				'Wikicitaty'  => 'Wikicitatach',
				'Wikisłownik' => 'Wikisłowniku',
			],
		]; // dsb

		$wgGrammarForms['et'] = [
			'genitive' => [
				'Vikisõnastik'  => 'Vikisõnastiku',
				'Vikitekstid'   => 'Vikitekstide',
				'Vikitsitaadid' => 'Vikitsitaatide',
				'Vikiõpikud'    => 'Vikiõpikute',
			],
			'partitive' => [
				'Vikipeedia'    => 'Vikipeediat',
				'Vikisõnastik'  => 'Vikisõnastikku',
				'Vikitekstid'   => 'Vikitekste',
				'Vikitsitaadid' => 'Vikitsitaate',
				'Vikiõpikud'    => 'Vikiõpikuid',
			],
			'illative' => [
				'Vikipeedia'    => 'Vikipeediasse',
				'Vikisõnastik'  => 'Vikisõnastikku',
				'Vikitekstid'   => 'Vikitekstidesse',
				'Vikitsitaadid' => 'Vikitsitaatidesse',
				'Vikiõpikud'    => 'Vikiõpikutesse',
			],
			'inessive' => [
				'Vikipeedia'    => 'Vikipeedias',
				'Vikisõnastik'  => 'Vikisõnastikus',
				'Vikitekstid'   => 'Vikitekstides',
				'Vikitsitaadid' => 'Vikitsitaatides',
				'Vikiõpikud'    => 'Vikiõpikutes',
			],
			'elative' => [
				'Vikipeedia'    => 'Vikipeediast',
				'Vikisõnastik'  => 'Vikisõnastikust',
				'Vikitekstid'   => 'Vikitekstidest',
				'Vikitsitaadid' => 'Vikitsitaatidest',
				'Vikiõpikud'    => 'Vikiõpikutest',
			],
		]; // et

		$wgGrammarForms['fi'] = [
			'genitive' => [
				'Wikiuutiset' => 'Wikiuutisten',
				'Wikisitaatit' => 'Wikisitaattien',
				'Wikimedia Suomi' => 'Wikimedia Suomen',
				'Wikimatkat' => 'Wikimatkojen',
			],
			'partitive' => [
				'Wikiuutiset' => 'Wikiuutisia',
				'Wikisitaatit' => 'Wikisitaatteja',
				'Wikimedia Suomi' => 'Wikimedia Suomea',
				'Wikimatkat' => 'Wikimatkoja',
			],
			'elative' => [
				'Wikiuutiset' => 'Wikiuutisista',
				'Wikisitaatit' => 'Wikisitaateista',
				'Wikimedia Suomi' => 'Wikimedia Suomesta',
				'Wikimatkat' => 'Wikimatkoista',
			],
			'inessive' => [
				'Wikiuutiset' => 'Wikiuutisissa',
				'Wikisitaatit' => 'Wikisitaateissa',
				'Wikimedia Suomi' => 'Wikimedia Suomessa',
				'Wikimatkat' => 'Wikimatkoissa',
			],
			'illative' => [
				'Wikiuutiset' => 'Wikiuutisiin',
				'Wikisitaatit' => 'Wikisitaatteihin',
				'Wikimedia Suomi' => 'Wikimedia Suomeen',
				'Wikimatkat' => 'Wikimatkoihin',
			],
		]; // fi

		$wgGrammarForms['ga'] = [
			'genitive' => [
				'Vicipéid'     => 'Vicipéide',
				'Vicífhoclóir' => 'Vicífhoclóra',
				'Vicíleabhair' => 'Vicíleabhar',
				'Vicíshliocht' => 'Vicíshleachta',
				'Vicífhoinse'  => 'Vicífhoinse',
				'Vicíghnéithe' => 'Vicíghnéithe',
				'Vicínuacht'   => 'Vicínuachta',
			],
		]; // ga

		$wgGrammarForms['gsw'] = [
			// dative
			'dativ' => [
				'Wikipedia'       => 'vo de Wikipedia',
				'Wikinorchrichte' => 'vo de Wikinochrichte',
				'Wiktionaire'     => 'vom Wiktionaire',
				'Wikibuecher'     => 'vo de Wikibuecher',
				'Wikisprüch'      => 'vo de Wikisprüch',
				'Wikiquälle'      => 'vo de Wikiquälle',
			],
			// accusative
			'akkusativ' => [
				'Wikipedia'       => 'd Wikipedia',
				'Wikinorchrichte' => 'd Wikinorchrichte',
				'Wiktionaire'     => 's Wiktionaire',
				'Wikibuecher'     => 'd Wikibuecher',
				'Wikisprüch'      => 'd Wikisprüch',
				'Wikiquälle'      => 'd Wikiquälle',
			],
			// nominative
			'nominativ' => [
				'Wikipedia'       => 'd Wikipedia',
				'Wikinorchrichte' => 'd Wikinorchrichte',
				'Wiktionaire'     => 's Wiktionaire',
				'Wikibuecher'     => 'd Wikibuecher',
				'Wikisprüch'      => 'd Wikisprüch',
				'Wikiquälle'      => 'd Wikiquälle',
			],
		]; // gsw

		$wgGrammarForms['hsb'] = [
			// genitive
			'genitiw' => [
				'Wikipedija'  => 'Wikipedije',
				'Wikiknihi'   => 'Wikiknih',
				'Wikinowiny'  => 'Wikinowin',
				'Wikižórło'   => 'Wikižórła',
				'Wikicitaty'  => 'Wikicitatow',
				'Wikisłownik' => 'Wikisłownika',
			],
			// dative
			'datiw' => [
				'Wikipedija'  => 'Wikipediji',
				'Wikiknihi'   => 'Wikikniham',
				'Wikinowiny'  => 'Wikinowinam',
				'Wikižórło'   => 'Wikižórłu',
				'Wikicitaty'  => 'Wikicitatam',
				'Wikisłownik' => 'Wikisłownikej',
			],
			// accusative
			'akuzativ' => [
				'Wikipedija'  => 'Wikipediju',
				'Wikiknihi'   => 'Wikiknknihi',
			],
			// instrumental
			'instrumental' => [
				'Wikipedija'  => 'Wikipediju',
				'Wikiknihi'   => 'Wikiknihami',
				'Wikinowiny'  => 'Wikinowinami',
				'Wikižórło'   => 'Wikižórłom',
				'Wikicitaty'  => 'Wikicitatami',
				'Wikisłownik' => 'Wikisłownikom',
			],
			// locative
			'lokatiw' => [
				'Wikipedija'  => 'Wikipediji',
				'Wikiknihi'   => 'Wikiknihach',
				'Wikinowiny'  => 'Wikinowinach',
				'Wikižórło'   => 'Wikižórłu',
				'Wikicitaty'  => 'Wikicitatach',
				'Wikisłownik' => 'Wikisłowniku',
			],
		]; // hsb

		$wgGrammarForms['hu'] = [
			'rol' => [
				'Wikipédia'   => 'Wikipédiáról',
				'Wikidézet'   => 'Wikidézetről',
				'Wikiszótár'  => 'Wikiszótárról',
				'Wikikönyvek' => 'Wikikönyvekről',
			],
			'ba' => [
				'Wikipédia'   => 'Wikipédiába',
				'Wikidézet'   => 'Wikidézetbe',
				'Wikiszótár'  => 'Wikiszótárba',
				'Wikikönyvek' => 'Wikikönyvekbe',
			],
			'k' => [
				'Wikipédia'   => 'Wikipédiák',
				'Wikidézet'   => 'Wikidézetek',
				'Wikiszótár'  => 'Wikiszótárak',
			],
		]; // hu

		$wgGrammarForms['la'] = [
			'genitive' => [
				'Vicimedia Communia' => 'Vicimediorum Communium',
			],
			'ablative' => [
				'Vicimedia Communia' => 'Vicimediis Communibus',
			],
		]; // la

		$wgGrammarForms['lv'] = [
			'ģenitīvs' => [
				'Vikipēdija'   => 'Vikipēdijas',
				'Vikivārdnīca' => 'Vikivārdnīcas',
			],
			'datīvs' => [
				'Vikipēdija'   => 'Vikipēdijai',
				'Vikivārdnīca' => 'Vikivārdnīcai',
			],
			'akuzatīvs' => [
				'Vikipēdija'   => 'Vikipēdiju',
				'Vikivārdnīca' => 'Vikivārdnīcu',
			],
			'lokatīvs' => [
				'Vikipēdija'   => 'Vikipēdijā',
				'Vikivārdnīca' => 'Vikivārdnīcā',
			],
		]; // lv

		$wgGrammarForms['pl'] = [
			'D.lp' => [
				'wikipedysta'  => 'wikipedysty',
				'Wikicytaty'   => 'Wikicytatów',
				'Wikipedia'    => 'Wikipedii',
				'Wikipodróże'  => 'Wikipodróży',
				'Wikisłownik'  => 'Wikisłownika',
				'Wikiźródła'   => 'Wikiźródeł',
				'użytkownik'   => 'użytkownika',
				'wikireporter' => 'wikireportera',
				'wikiskryba'   => 'wikiskryby',
				'Wikidane'     => 'Wikidanych',
			],
			'C.lp' => [
				'wikipedysta'  => 'wikipedyście',
				'Wikicytaty'   => 'Wikicytatom',
				'Wikipedia'    => 'Wikipedii',
				'Wikipodróże'  => 'Wikipodróżom',
				'Wikisłownik'  => 'Wikisłownikowi',
				'Wikiźródła'   => 'Wikiźródłom',
				'użytkownik'   => 'użytkownikowi',
				'wikireporter' => 'wikireporterowi',
				'wikiskryba'   => 'wikiskrybie',
				'Wikidane'     => 'Wikidanym',
			],
			'B.lp' => [
				'wikipedysta'  => 'wikipedystę',
				'Wikipedia'    => 'Wikipedię',
				'użytkownik'   => 'użytkownika',
				'wikireporter' => 'wikireportera',
				'wikiskryba'   => 'wikiskrybę',
			],
			'N.lp' => [
				'wikipedysta'  => 'wikipedystą',
				'Wikicytaty'   => 'Wikicytatami',
				'Wikipedia'    => 'Wikipedią',
				'Wikipodróże'  => 'Wikipodróżami',
				'Wikisłownik'  => 'Wikisłownikiem',
				'Wikiźródła'   => 'Wikiźródłami',
				'użytkownik'   => 'użytkownikiem',
				'wikireporter' => 'wikireporterem',
				'wikiskryba'   => 'wikiskrybą',
				'Wikidane'     => 'Wikidanymi',
			],
			'MS.lp' => [
				'wikipedysta'  => 'wikipedyście',
				'Wikicytaty'   => 'Wikicytatach',
				'Wikipedia'    => 'Wikipedii',
				'Wikipodróże'  => 'Wikipodróżach',
				'Wikisłownik'  => 'Wikisłowniku',
				'Wikiźródła'   => 'Wikiźródłach',
				'użytkownik'   => 'użytkowniku',
				'wikireporter' => 'wikireporterze',
				'wikiskryba'   => 'wikiskrybie',
				'Wikidane'     => 'Wikidanych',
			],
			'W.lp' => [
				'wikipedysta'  => 'wikipedysto',
				'Wikipedia'    => 'Wikipedio',
				'Wikisłownik'  => 'Wikisłowniku',
				'użytkownik'   => 'użytkowniku',
				'wikireporter' => 'wikireporterze',
				'wikiskryba'   => 'wikiskrybo',
			],
			'M.lm' => [
				'wikipedysta'  => 'wikipedyści',
				'użytkownik'   => 'użytkownicy',
				'wikireporter' => 'wikireporterzy',
				'wikiskryba'   => 'wikiskrybowie',
			],
			'D.lm' => [
				'wikipedysta'  => 'wikipedystów',
				'użytkownik'   => 'użytkowników',
				'wikireporter' => 'wikireporterów',
				'wikiskryba'   => 'wikiskrybów',
			],
			'C.lm' => [
				'wikipedysta'  => 'wikipedystom',
				'użytkownik'   => 'użytkownikom',
				'wikireporter' => 'wikireporterom',
				'wikiskryba'   => 'wikiskrybom',
			],
			'B.lm' => [
				'wikipedysta'  => 'wikipedystów',
				'użytkownik'   => 'użytkowników',
				'wikireporter' => 'wikireporterów',
				'wikiskryba'   => 'wikiskrybów',
			],
			'N.lm' => [
				'wikipedysta'  => 'wikipedystami',
				'użytkownik'   => 'użytkownikami',
				'wikireporter' => 'wikireporterami',
				'wikiskryba'   => 'wikiskrybami',
			],
			'MS.lm' => [
				'wikipedysta'  => 'wikipedystach',
				'użytkownik'   => 'użytkownikach',
				'wikireporter' => 'wikireporterach',
				'wikiskryba'   => 'wikiskrybach',
			],
			'W.lm' => [
				'wikipedysta'  => 'wikipedyści',
				'użytkownik'   => 'użytkownicy',
				'wikireporter' => 'wikireporterzy',
				'wikiskryba'   => 'wikiskrybowie',
			],
		]; // pl

		$wgGrammarForms['rmy'] = [
			// genitive (m.sg.)
			'genitive-m-sg' => [
				'Vikipidiya' => 'Vikipidiyako',
				'Vikcyonaro' => 'Vikcyonaresko',
			],
			// genitive (f.sg.)
			'genitive-f-sg' => [
				'Vikipidiya' => 'Vikipidiyaki',
				'Vikcyonaro' => 'Vikcyonareski',
			],
			// genitive (pl.)
			'genitive-pl' => [
				'Vikipidiya' => 'Vikipidiyake',
				'Vikcyonaro' => 'Vikcyonareske',
			],
			// dative
			'dativ' => [
				'Vikipidiya' => 'Wikipediji',
				'Vikcyonaro' => 'Vikcyonareske',
			],
			// locative
			'locative' => [
				'Vikipidiya' => 'Wikipedijo',
				'Vikcyonaro' => 'Vikcyonareste',
			],
			// ablative
			'ablative' => [
				'Vikipidiya' => 'o Wikipediji',
				'Vikcyonaro' => 'Vikcyonarestar',
			],
			// instrumental
			'instrumental' => [
				'Vikipidiya' => 'z Wikipedijo',
				'Vikcyonaro' => 'Vikcyonaresa',
			],
		]; // rmy

		$wgGrammarForms['sk'] = [
			'genitív' => [
				'Wikipédia'   => 'Wikipédie',
				'Wikislovník' => 'Wikislovníku',
				'Wikicitáty'  => 'Wikicitátov',
				'Wikiknihy'   => 'Wikikníh',
			],
			'datív' => [
				'Wikipédia'   => 'Wikipédii',
				'Wikislovník' => 'Wikislovníku',
				'Wikicitáty'  => 'Wikicitátom',
				'Wikiknihy'   => 'Wikiknihám',
			],
			'akuzatív' => [
				'Wikipédia'   => 'Wikipédiu',
				'Wikislovník' => 'Wikislovník',
				'Wikicitáty'  => 'Wikicitáty',
				'Wikiknihy'   => 'Wikiknihy',
			],
			'lokál' => [
				'Wikipédia'   => 'Wikipédii',
				'Wikislovník' => 'Wikislovníku',
				'Wikicitáty'  => 'Wikicitátoch',
				'Wikiknihy'   => 'Wikiknihách',
			],
			'inštrumentál' => [
				'Wikipédia'   => 'Wikipédiou',
				'Wikislovník' => 'Wikislovníkom',
				'Wikicitáty'  => 'Wikicitátmi',
				'Wikiknihy'   => 'Wikiknihami',
			],
		]; // sk

		$wgGrammarForms['sl'] = [
			// genitive
			'rodilnik' => [
				'Wikipedija'  => 'Wikipedije',
				'Wikiknjige'  => 'Wikiknjig',
				'Wikinovice'  => 'Wikinovic',
				'Wikinavedek' => 'Wikinavedka',
				'Wikivir'     => 'Wikivira',
				'Wikislovar'  => 'Wikislovarja',
			],
			// dative
			'dajalnik' => [
				'Wikipedija'  => 'Wikipediji',
				'Wikiknjige'  => 'Wikiknjigam',
				'Wikinovice'  => 'Wikinovicam',
				'Wikinavedek' => 'Wikinavedku',
				'Wikivir'     => 'Wikiviru',
				'Wikislovar'  => 'Wikislovarju',
			],
			// accusative
			'tožilnik' => [
				'Wikipedija'  => 'Wikipedijo',
				// no need to transform the others
			],
			// locative
			'mestnik' => [
				'Wikipedija'  => 'o Wikipediji',
				'Wikiknjige'  => 'o Wikiknjigah',
				'Wikinovice'  => 'o Wikinovicah',
				'Wikinavedek' => 'o Wikinavedku',
				'Wikivir'     => 'o Wikiviru',
				'Wikislovar'  => 'o Wikislovarju',
			],
			// instrumental
			'orodnik' => [
				'Wikipedija'  => 'z Wikipedijo',
				'Wikiknjige'  => 'z Wikiknjigami',
				'Wikinovice'  => 'z Wikinovicami',
				'Wikinavedek' => 'z Wikinavedkom',
				'Wikivir'     => 'z Wikivirom',
				'Wikislovar'  => 'z Wikislovarjem',
			],
		]; // sl

		$wgGrammarForms['uk'] = [
			// genitive
			'genitive' => [
				'Вікіпедія' => 'Вікіпедії',
				'Вікісловник' => 'Вікісловника',
				'Вікісховище' => 'Вікісховища',
				'Вікіпідручник' => 'Вікіпідручника',
				'Вікіцитати' => 'Вікіцитат',
				'Вікіджерела' => 'Вікіджерел',
				'Вікіновини' => 'Вікіновин',
				'Вікідані' => 'Вікіданих',
				'Вікімандри' => 'Вікімандрів',
			],
			// dative
			'dative' => [
				'Вікіпедія' => 'Вікіпедії',
				'Вікісловник' => 'Вікісловнику',
				'Вікісховище' => 'Вікісховищу',
				'Вікіпідручник' => 'Вікіпідручнику',
				'Вікіцитати' => 'Вікіцитатам',
				'Вікіджерела' => 'Вікіджерелам',
				'Вікіновини' => 'Вікіновинам',
				'Вікідані' => 'Вікіданим',
				'Вікімандри' => 'Вікімандрам',
			],
			// accusative
			'accusative' => [
				'Вікіпедія' => 'Вікіпедію',
				'Вікісловник' => 'Вікісловник',
				'Вікісховище' => 'Вікісховище',
				'Вікіпідручник' => 'Вікіпідручник',
				'Вікіцитати' => 'Вікіцитати',
				'Вікіджерела' => 'Вікіджерела',
				'Вікіновини' => 'Вікіновини',
				'Вікідані' => 'Вікідані',
				'Вікімандри' => 'Вікімандри',
			],
			// instrumental
			'instrumental' => [
				'Вікіпедія' => 'Вікіпедією',
				'Вікісловник' => 'Вікісловником',
				'Вікісховище' => 'Вікісховищем',
				'Вікіпідручник' => 'Вікіпідручником',
				'Вікіцитати' => 'Вікіцитатами',
				'Вікіджерела' => 'Вікіджерелами',
				'Вікіновини' => 'Вікіновинами',
				'Вікідані' => 'Вікіданими',
				'Вікімандри' => 'Вікімандрами',
			],
			// locative
			'locative' => [
				'Вікіпедія' => 'у Вікіпедії',
				'Вікісловник' => 'у Вікісловнику',
				'Вікісховище' => 'у Вікісховищі',
				'Вікіпідручник' => 'у Вікіпідручнику',
				'Вікіцитати' => 'у Вікіцитатах',
				'Вікіджерела' => 'у Вікіджерелах',
				'Вікіновини' => 'у Вікіновинах',
				'Вікідані' => 'у Вікіданих',
				'Вікімандри' => 'у Вікімандрах',
			],
			// vocative
			'vocative' => [
				'Вікіпедія' => 'Вікіпедіє',
				'Вікісловник' => 'Вікісловнику',
				'Вікісховище' => 'Вікісховище',
				'Вікіпідручник' => 'Вікіпідручнику',
				'Вікіцитати' => 'Вікіцитати',
				'Вікіджерела' => 'Вікіджерела',
				'Вікіновини' => 'Вікіновини',
				'Вікідані' => 'Вікідані',
				'Вікімандри' => 'Вікімандри',
			],
		]; // uk
	}

	/**
	 * Handler for the GetBetaFeaturePreferences hook.
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/GetBetaFeaturePreferences
	 *
	 * @param $user User to get preferences for
	 * @param array &$preferences Preferences configuration
	 *
	 * @return bool true in all cases
	 */
	public static function getBetaFeaturePreferences( User $user, array &$preferences ) {
		global $wgExtensionAssetsPath, $wgEnableRcFiltersBetaFeature;
		$ores = self::isOresAvailable();

		if ( $wgEnableRcFiltersBetaFeature ) {
			$preferences['rcenhancedfilters'] = [
				'label-message' => 'eri-rcfilters-beta-label',
				'desc-message' => $ores
					? 'eri-rcfilters-beta-description-ores' : 'eri-rcfilters-beta-description',
				'screenshot' => [
					'rtl' => $wgExtensionAssetsPath .
						'/WikimediaMessages/modules/images/betafeatures-icon-RCFilters-rtl.svg',
					'ltr' => $wgExtensionAssetsPath .
						'/WikimediaMessages/modules/images/betafeatures-icon-RCFilters-ltr.svg',
				],
				'info-link' => 'https://www.mediawiki.org/wiki/' .
					'Special:MyLanguage/Edit_Review_Improvements/Filters_for_Special:Recent_Changes',
				'discussion-link' => 'https://www.mediawiki.org/wiki/' .
					'Talk:Edit_Review_Improvements/New_filters_for_edit_review',
			];
		}

		return true;
	}

	/**
	 * Check if one or both of the 'damaging' and 'goodfaith' models are
	 * available on the current wiki.
	 *
	 * @return bool
	 */
	private static function isOresAvailable() {
		if ( !class_exists( 'ORES\\Hooks' ) ) {
			return false;
		}
		return ORES\Hooks::isModelEnabled( 'damaging' ) || ORES\Hooks::isModelEnabled( 'goodfaith' );
	}

	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		if ( !class_exists( 'GuidedTourHooks' ) ) {
			return;
		}
		$title = $skin->getTitle();
		$user = $out->getUser();

		if (
			$title->isSpecial( 'Recentchanges' ) &&
			$user->isLoggedIn()
		) {
			if ( $user->getOption( 'rcenhancedfilters' ) ) {
				if ( !$user->getOption( 'rcenhancedfilters-seen-tour' ) ) {
					GuidedTourLauncher::launchTourByCookie( 'RcFiltersBeta', 'Welcome' );
					$out->addJsConfigVars( 'wgRCFiltersORESAvailable', self::isOresAvailable() );
				}

				if ( !$user->getOption( 'rcenhancedfilters-tried-highlight' ) ) {
					$out->addModules( 'ext.guidedTour.tour.RcFiltersHighlight' );
				}

				if ( $user->getOption( 'rcenhancedfilters-show-invite-confirmation' ) ) {
					GuidedTourLauncher::launchTourByCookie( 'RcFiltersInvite', 'Confirm' );
				}
			} elseif (
				!$user->getOption( 'rcenhancedfilters-seen-invite' ) &&
				!$user->getOption( 'rcenhancedfilters-seen-tour' )
			) {
				GuidedTourLauncher::launchTourByCookie( 'RcFiltersInvite', 'Invite' );
			}
		}
	}

	public static function onResourceLoaderRegisterModules( ResourceLoader &$resourceLoader ) {
		if ( class_exists( 'GuidedTourHooks' ) ) {

			$resourceLoader->register( 'ext.guidedTour.tour.RcFiltersBeta', [
				'localBasePath' => __DIR__ . '/modules',
				'remoteExtPath' => 'WikimediaMessages/modules',
				'scripts' => 'rcfilters-beta-tour.js',
				'styles' => 'rcfilters-beta-tour.less',
				'messages' => [
					'eri-rcfilters-tour-welcome-title',
					'eri-rcfilters-tour-welcome-description',
					'eri-rcfilters-tour-welcome-no-ores-description',
					'eri-rcfilters-tour-welcome-button',
				],
				'dependencies' => [
					'ext.guidedTour'
				],
			] );

			$resourceLoader->register( 'ext.guidedTour.tour.RcFiltersHighlight', [
				'localBasePath' => __DIR__ . '/modules',
				'remoteExtPath' => 'WikimediaMessages/modules',
				'scripts' => [
					'rcfilters-highlight-tour-hooks.js',
					'rcfilters-highlight-tour.js',
				],
				'styles' => 'rcfilters-highlight-tour.less',
				'messages' => [
					'eri-rcfilters-tour-highlight-title',
					'eri-rcfilters-tour-highlight-description',
					'eri-rcfilters-tour-highlight-button',
				],
				'dependencies' => [
					'ext.guidedTour'
				],
			] );

			$resourceLoader->register( 'ext.guidedTour.tour.RcFiltersInvite', [
				'localBasePath' => __DIR__ . '/modules',
				'remoteExtPath' => 'WikimediaMessages/modules',
				'scripts' => [
					'rcfilters-invite-tour.js',
				],
				'styles' => 'rcfilters-invite-tour.less',
				'messages' => [
					'eri-rcfilters-tour-invite-title',
					'eri-rcfilters-tour-invite-description',
					'eri-rcfilters-tour-invite-learnmore-link-label',
					'eri-rcfilters-tour-invite-yes-button',
					'eri-rcfilters-tour-invite-no-button',
					'eri-rcfilters-tour-confirm-title',
					'eri-rcfilters-tour-confirm-description',
				],
				'dependencies' => [
					'ext.guidedTour'
				],
			] );

		}

		return true;
	}

	/**
	 * Register RC Filters preferences
	 *
	 * @param $user User object
	 * @param &$preferences array Preferences object
	 * @return bool
	 */
	public static function onGetPreferences( $user, &$preferences ) {
		$preferences['rcenhancedfilters-seen-tour'] = [
			'type' => 'api',
		];

		$preferences['rcenhancedfilters-tried-highlight'] = [
			'type' => 'api',
		];

		$preferences['rcenhancedfilters-seen-invite'] = [
			'type' => 'api',
		];

		$preferences['rcenhancedfilters-seen-highlight-button-counter'] = [
			'type' => 'api',
		];

		$preferences['rcenhancedfilters-show-invite-confirmation'] = [
			'type' => 'api',
		];

		return true;
	}
}
