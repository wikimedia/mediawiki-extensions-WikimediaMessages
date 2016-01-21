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
			'centralauth-contribs-locked',
			'centralauth-uwbr-intro',
			'centralauth-uwbr-registration-nodate',
			'createacct-helpusername',
			'createacct-imgcaptcha-help',
			'feedback-termsofuse',
			'globalrenamequeue-email-body-approved',
			'globalrenamequeue-email-body-rejected',
			'mwoauthserver-invalid-user',
			'privacypage',
			'sidebar',
			'sulrenamewarning-usenew',
			'ipb-confirmhideuser', // T121639
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
	 * Add a "Developers"  (T35464) and "Cookie statement" (T124366) link to the footer of every page
	 *
	 * @param $skin SkinTemplate (from includes/SkinTemplate.php)
	 * @param $template QuickTemplate (from includes/SkinTemplate.php)
	 *
	 * @return bool
	 */
	public static function onSkinTemplateOutputPageBeforeExec( &$skin, &$template ) {
		$devDestination = Skin::makeInternalOrExternalUrl( $skin->msg( 'wikimedia-developers-url' )->inContentLanguage()->text() );
		$devLink = Html::element(
			'a',
			array( 'href' => $devDestination ),
			$skin->msg( 'wikimedia-developers' )->text()
		);
		$template->set( 'developers', $devLink );
		$template->data['footerlinks']['places'][] = 'developers';
		$cookieDestination = Skin::makeInternalOrExternalUrl( $skin->msg( 'wikimedia-cookiestatement-page' )->inContentLanguage()->text() );
		$cookieLink = Html::element(
			'a',
			array( 'href' => $cookieDestination ),
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

		$wgGrammarForms['ang'] = array(
			# accusative
			'wrēgendlīc' => array(
				'Wikipǣdia' => 'Wikipǣdie',
				'Wikiwordbōc' => 'Wikiwordbōc',
			),
			# genitive
			'geāgniendlīc' => array(
				'Wikipǣdia' => 'Wikipǣdie',
				'Wikiwordbōc' => 'Wikiwordbēc',
			),
			# dative
			'forgifendlīc' => array(
				'Wikipǣdia' => 'Wikipǣdie',
				'Wikiwordbōc' => 'Wikiwordbēc',
			),
			# instrumental
			'tōllīc' => array(
				'Wikipǣdia' => 'Wikipǣdie',
				'Wikiwordbōc' => 'Wikiwordbēc',
			),
		); # ang

		$wgGrammarForms['be'] = array(
			# genitive
			'родны' => array(
				'ВікіВіды'    => 'ВікіВідаў',
				'ВікіКнігі'   => 'ВікіКніг',
				'Вікікрыніцы' => 'Вікікрыніц',
				'ВікіНавіны'  => 'ВікіНавін',
				'Вікіслоўнік' => 'Вікіслоўніка',
				'Вікіпедыя'   => 'Вікіпедыі',
			),
			# accusative
			'вінавальны' => array(
				'Вікіпедыя'   => 'Вікіпедыю',
			),
			# prepositional
			'месны' => array(
				'ВікіВіды'    => 'ВікіВідах',
				'ВікіКнігі'   => 'ВікіКнігах',
				'Вікікрыніцы' => 'Вікікрыніцах',
				'ВікіНавіны'  => 'ВікіНавінах',
				'Вікіслоўнік' => 'Вікіслоўніку',
				'Вікіпедыя'   => 'Вікіпедыі',
			),
		); # be

		$wgGrammarForms['be-tarask'] = array(
			# genitive
			'родны' => array(
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
			),
			# dative
			'давальны' => array(
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
			),
			# accusative
			'вінавальны' => array(
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
			),
			# instrumental
			'творны' => array(
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
			),
			# prepositional
			'месны' => array(
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
			),
		); # be-tarask

		$wgGrammarForms['bs'] = array(
			# genitive
			'genitiv' => array(
				'Vikirječnik' => 'Vikirječnika',
				'Wikicitati'  => 'Wikicitata',
				'Wikiizvor'   => 'Wikiizvora',
				'Wikiknjige'  => 'Wikiknjiga',
				'Wikipedia'   => 'Wikipedije',
			),
			# dative
			'dativ' => array(
				'Vikirječnik' => 'Vikirječniku',
				'Wikicitati'  => 'Wikicitatima',
				'Wikiizvor'   => 'Wikiizvoru',
				'Wikiknjige'  => 'Wikiknjigama',
				'Wikipedia'   => 'Wikipediji',
				'Wikivijesti' => 'Wikivijestima',
			),
			# akusative
			'akuzativ' => array(
				'Vikirječnik' => 'Vikirječnika',
				'Wikicitati'  => 'Wikicitate',
				'Wikiizvor'   => 'Wikiizvora',
				'Wikipedia'   => 'Wikipediju',
			),
			# vocative
			'vokativ' => array(
				'Vikirječnik' => 'Vikirječniče',
				'Wikiizvor'   => 'Wikizivoru',
				'Wikipedia'   => 'Wikipedijo',
			),
			# instrumental
			'instrumental' => array(
				'Vikirječnik' => 's Vikirječnikom',
				'Wikicitati'  => 's Wikicitatima',
				'Wikiizvor'   => 's Wikiizvorom',
				'Wikiknjige'  => 's Wikiknjigama',
				'Wikipedia'   => 's Wikipediom',
				'Wikivijesti' => 's Wikivijestima',
			),
			# lokative
			'lokativ' => array(
				'Vikirječnik' => 'o Vikirječniku',
				'Wikicitati'  => 'o Wikicitatima',
				'Wikiizvor'   => 'o Wikiizvoru',
				'Wikiknjige'  => 'o Wikiknjigama',
				'Wikipedia'   => 'o Wikipediji',
				'Wikivijesti' => 'o Wikivijestima',
			),
		); # bs

		$wgGrammarForms['cs'] = array(
			# only forms different than default/given
			'1sg' => array(
				'Wikibooks'   => 'Wikiknihy',
				'Wikinews'    => 'Wikizprávy',
				'Wikipedia'   => 'Wikipedie',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroje',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzita',
				'Wikivoyage'  => 'Wikicesty',
				'Wiktionary'  => 'Wikislovník',
			),
			'2sg' => array(
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
			),
			'3sg' => array(
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
			),
			'4sg' => array(
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
			),
			'5sg' => array(
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
			),
			'6sg' => array(
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
			),
			'7sg' => array(
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
			),
			'1pl' => array(
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
			),
			'2pl' => array(
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
			),
			'3pl' => array(
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
			),
			'4pl' => array(
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
			),
			'5pl' => array(
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
			),
			'6pl' => array(
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
			),
			'7pl' => array(
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
			),
		); # cs

		$wgGrammarForms['dsb'] = array(
			# genitive
			'genitiw' => array(
				'Wikipedija'  => 'Wikipedije',
				'Wikiknihi'   => 'Wikiknih',
				'Wikinowiny'  => 'Wikinowin',
				'Wikižórło'   => 'Wikižórła',
				'Wikicitaty'  => 'Wikicitatow',
				'Wikisłownik' => 'Wikisłownika',
			),
			# dative
			'datiw' => array(
				'Wikipedija'  => 'Wikipediji',
				'Wikiknihi'   => 'Wikikniham',
				'Wikinowiny'  => 'Wikinowinam',
				'Wikižórło'   => 'Wikižórłu',
				'Wikicitaty'  => 'Wikicitatam',
				'Wikisłownik' => 'Wikisłownikej',
			),
			# akuzative
			'akuzativ' => array(
				'Wikipedija'  => 'Wikipediju',
				'Wikiknihi'   => 'Wikiknknihi',
			),
			# instrumental
			'instrumental' => array(
				'Wikipedija'  => 'Wikipediju',
				'Wikiknihi'   => 'Wikiknihami',
				'Wikinowiny'  => 'Wikinowinami',
				'Wikižórło'   => 'Wikižórłom',
				'Wikicitaty'  => 'Wikicitatami',
				'Wikisłownik' => 'Wikisłownikom',
			),
			# lokative
			'lokatiw' => array(
				'Wikipedija'  => 'Wikipediji',
				'Wikiknihi'   => 'Wikiknihach',
				'Wikinowiny'  => 'Wikinowinach',
				'Wikižórło'   => 'Wikižórłu',
				'Wikicitaty'  => 'Wikicitatach',
				'Wikisłownik' => 'Wikisłowniku',
			),
		); # dsb

		$wgGrammarForms['et'] = array(
			'genitive' => array(
				'Vikisõnastik'  => 'Vikisõnastiku',
				'Vikitekstid'   => 'Vikitekstide',
				'Vikitsitaadid' => 'Vikitsitaatide',
				'Vikiõpikud'    => 'Vikiõpikute',
			),
			'partitive' => array(
				'Vikipeedia'    => 'Vikipeediat',
				'Vikisõnastik'  => 'Vikisõnastikku',
				'Vikitekstid'   => 'Vikitekste',
				'Vikitsitaadid' => 'Vikitsitaate',
				'Vikiõpikud'    => 'Vikiõpikuid',
			),
			'illative' => array(
				'Vikipeedia'    => 'Vikipeediasse',
				'Vikisõnastik'  => 'Vikisõnastikku',
				'Vikitekstid'   => 'Vikitekstidesse',
				'Vikitsitaadid' => 'Vikitsitaatidesse',
				'Vikiõpikud'    => 'Vikiõpikutesse',
			),
			'inessive' => array(
				'Vikipeedia'    => 'Vikipeedias',
				'Vikisõnastik'  => 'Vikisõnastikus',
				'Vikitekstid'   => 'Vikitekstides',
				'Vikitsitaadid' => 'Vikitsitaatides',
				'Vikiõpikud'    => 'Vikiõpikutes',
			),
			'elative' => array(
				'Vikipeedia'    => 'Vikipeediast',
				'Vikisõnastik'  => 'Vikisõnastikust',
				'Vikitekstid'   => 'Vikitekstidest',
				'Vikitsitaadid' => 'Vikitsitaatidest',
				'Vikiõpikud'    => 'Vikiõpikutest',
			),
		); # et

		$wgGrammarForms['fi'] = array(
			'genitive' => array(
				'Wikiuutiset' => 'Wikiuutisten',
				'Wikisitaatit' => 'Wikisitaattien',
				'Wikimedia Suomi' => 'Wikimedia Suomen',
			),
			'partitive' => array(
				'Wikiuutiset' => 'Wikiuutisia',
				'Wikisitaatit' => 'Wikisitaatteja',
				'Wikimedia Suomi' => 'Wikimedia Suomea',
			),
			'elative' => array(
				'Wikiuutiset' => 'Wikiuutisista',
				'Wikisitaatit' => 'Wikisitaateista',
				'Wikimedia Suomi' => 'Wikimedia Suomesta',
			),
			'inessive' => array(
				'Wikiuutiset' => 'Wikiuutisissa',
				'Wikisitaatit' => 'Wikisitaateissa',
				'Wikimedia Suomi' => 'Wikimedia Suomessa',
			),
			'illative' => array(
				'Wikiuutiset' => 'Wikiuutisiin',
				'Wikisitaatit' => 'Wikisitaatteihin',
				'Wikimedia Suomi' => 'Wikimedia Suomeen',
			),
		); # fi

		$wgGrammarForms['ga'] = array(
			'genitive' => array(
				'Vicipéid'     => 'Vicipéide',
				'Vicífhoclóir' => 'Vicífhoclóra',
				'Vicíleabhair' => 'Vicíleabhar',
				'Vicíshliocht' => 'Vicíshleachta',
				'Vicífhoinse'  => 'Vicífhoinse',
				'Vicíghnéithe' => 'Vicíghnéithe',
				'Vicínuacht'   => 'Vicínuachta',
			),
		); # ga

		$wgGrammarForms['gsw'] = array(
			# dative
			'dativ' => array(
				'Wikipedia'       => 'vo de Wikipedia',
				'Wikinorchrichte' => 'vo de Wikinochrichte',
				'Wiktionaire'     => 'vom Wiktionaire',
				'Wikibuecher'     => 'vo de Wikibuecher',
				'Wikisprüch'      => 'vo de Wikisprüch',
				'Wikiquälle'      => 'vo de Wikiquälle',
			),
			# accusative
			'akkusativ' => array(
				'Wikipedia'       => 'd Wikipedia',
				'Wikinorchrichte' => 'd Wikinorchrichte',
				'Wiktionaire'     => 's Wiktionaire',
				'Wikibuecher'     => 'd Wikibuecher',
				'Wikisprüch'      => 'd Wikisprüch',
				'Wikiquälle'      => 'd Wikiquälle',
			),
			# nominative
			'nominativ' => array(
				'Wikipedia'       => 'd Wikipedia',
				'Wikinorchrichte' => 'd Wikinorchrichte',
				'Wiktionaire'     => 's Wiktionaire',
				'Wikibuecher'     => 'd Wikibuecher',
				'Wikisprüch'      => 'd Wikisprüch',
				'Wikiquälle'      => 'd Wikiquälle',
			),
		); # gsw

		$wgGrammarForms['hsb'] = array(
			# genitive
			'genitiw' => array(
				'Wikipedija'  => 'Wikipedije',
				'Wikiknihi'   => 'Wikiknih',
				'Wikinowiny'  => 'Wikinowin',
				'Wikižórło'   => 'Wikižórła',
				'Wikicitaty'  => 'Wikicitatow',
				'Wikisłownik' => 'Wikisłownika',
			),
			# dative
			'datiw' => array(
				'Wikipedija'  => 'Wikipediji',
				'Wikiknihi'   => 'Wikikniham',
				'Wikinowiny'  => 'Wikinowinam',
				'Wikižórło'   => 'Wikižórłu',
				'Wikicitaty'  => 'Wikicitatam',
				'Wikisłownik' => 'Wikisłownikej',
			),
			# akuzative
			'akuzativ' => array(
				'Wikipedija'  => 'Wikipediju',
				'Wikiknihi'   => 'Wikiknknihi',
			),
			# instrumental
			'instrumental' => array(
				'Wikipedija'  => 'Wikipediju',
				'Wikiknihi'   => 'Wikiknihami',
				'Wikinowiny'  => 'Wikinowinami',
				'Wikižórło'   => 'Wikižórłom',
				'Wikicitaty'  => 'Wikicitatami',
				'Wikisłownik' => 'Wikisłownikom',
			),
			# lokative
			'lokatiw' => array(
				'Wikipedija'  => 'Wikipediji',
				'Wikiknihi'   => 'Wikiknihach',
				'Wikinowiny'  => 'Wikinowinach',
				'Wikižórło'   => 'Wikižórłu',
				'Wikicitaty'  => 'Wikicitatach',
				'Wikisłownik' => 'Wikisłowniku',
			),
		); # hsb

		$wgGrammarForms['hu'] = array(
			'rol' => array(
				'Wikipédia'   => 'Wikipédiáról',
				'Wikidézet'   => 'Wikidézetről',
				'Wikiszótár'  => 'Wikiszótárról',
				'Wikikönyvek' => 'Wikikönyvekről',
			),
			'ba' => array(
				'Wikipédia'   => 'Wikipédiába',
				'Wikidézet'   => 'Wikidézetbe',
				'Wikiszótár'  => 'Wikiszótárba',
				'Wikikönyvek' => 'Wikikönyvekbe',
			),
			'k' => array(
				'Wikipédia'   => 'Wikipédiák',
				'Wikidézet'   => 'Wikidézetek',
				'Wikiszótár'  => 'Wikiszótárak',
			),
		); # hu

		$wgGrammarForms['la'] = array(
			'genitive' => array(
				'Vicimedia Communia' => 'Vicimediorum Communium',
			),
			'ablative' => array(
				'Vicimedia Communia' => 'Vicimediis Communibus',
			),
		); # la

		$wgGrammarForms['lv'] = array(
			'ģenitīvs' => array(
				'Vikipēdija'   => 'Vikipēdijas',
				'Vikivārdnīca' => 'Vikivārdnīcas',
			),
			'datīvs' => array(
				'Vikipēdija'   => 'Vikipēdijai',
				'Vikivārdnīca' => 'Vikivārdnīcai',
			),
			'akuzatīvs' => array(
				'Vikipēdija'   => 'Vikipēdiju',
				'Vikivārdnīca' => 'Vikivārdnīcu',
			),
			'lokatīvs' => array(
				'Vikipēdija'   => 'Vikipēdijā',
				'Vikivārdnīca' => 'Vikivārdnīcā',
			),
		); # lv

		$wgGrammarForms['pl'] = array(
			'D.lp' => array(
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
			),
			'C.lp' => array(
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
			),
			'B.lp' => array(
				'wikipedysta'  => 'wikipedystę',
				'Wikipedia'    => 'Wikipedię',
				'użytkownik'   => 'użytkownika',
				'wikireporter' => 'wikireportera',
				'wikiskryba'   => 'wikiskrybę',
			),
			'N.lp' => array(
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
			),
			'MS.lp' => array(
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
			),
			'W.lp' => array(
				'wikipedysta'  => 'Wikipedysto',
				'Wikipedia'    => 'Wikipedio',
				'Wikisłownik'  => 'Wikisłowniku',
				'użytkownik'   => 'Użytkowniku',
				'wikireporter' => 'Wikireporterze',
				'wikiskryba'   => 'Wikiskrybo',
			),
			'M.lm' => array(
				'wikipedysta'  => 'wikipedyści',
				'użytkownik'   => 'użytkownicy',
				'wikireporter' => 'wikireporterzy',
				'wikiskryba'   => 'wikiskrybowie',
			),
			'D.lm' => array(
				'wikipedysta'  => 'wikipedystów',
				'użytkownik'   => 'użytkowników',
				'wikireporter' => 'wikireporterów',
				'wikiskryba'   => 'wikiskrybów',
			),
			'C.lm' => array(
				'wikipedysta'  => 'wikipedystom',
				'użytkownik'   => 'użytkownikom',
				'wikireporter' => 'wikireporterom',
				'wikiskryba'   => 'wikiskrybom',
			),
			'B.lm' => array(
				'wikipedysta'  => 'wikipedystów',
				'użytkownik'   => 'użytkowników',
				'wikireporter' => 'wikireporterów',
				'wikiskryba'   => 'wikiskrybów',
			),
			'N.lm' => array(
				'wikipedysta'  => 'wikipedystami',
				'użytkownik'   => 'użytkownikami',
				'wikireporter' => 'wikireporterami',
				'wikiskryba'   => 'wikiskrybami',
			),
			'MS.lm' => array(
				'wikipedysta'  => 'wikipedystach',
				'użytkownik'   => 'użytkownikach',
				'wikireporter' => 'wikireporterach',
				'wikiskryba'   => 'wikiskrybach',
			),
			'W.lm' => array(
				'wikipedysta'  => 'Wikipedyści',
				'użytkownik'   => 'Użytkownicy',
				'wikireporter' => 'Wikireporterzy',
				'wikiskryba'   => 'Wikiskrybowie',
			),
		); # pl

		$wgGrammarForms['rmy'] = array(
			# genitive (m.sg.)
			'genitive-m-sg' => array(
				'Vikipidiya' => 'Vikipidiyako',
				'Vikcyonaro' => 'Vikcyonaresko',
			),
			# genitive (f.sg.)
			'genitive-f-sg' => array(
				'Vikipidiya' => 'Vikipidiyaki',
				'Vikcyonaro' => 'Vikcyonareski',
			),
			# genitive (pl.)
			'genitive-pl' => array(
				'Vikipidiya' => 'Vikipidiyake',
				'Vikcyonaro' => 'Vikcyonareske',
			),
			# dative
			'dativ' => array(
				'Vikipidiya' => 'Wikipediji',
				'Vikcyonaro' => 'Vikcyonareske',
			),
			# locative
			'locative' => array(
				'Vikipidiya' => 'Wikipedijo',
				'Vikcyonaro' => 'Vikcyonareste',
			),
			# ablative
			'ablative' => array(
				'Vikipidiya' => 'o Wikipediji',
				'Vikcyonaro' => 'Vikcyonarestar',
			),
			# instrumental
			'instrumental' => array(
				'Vikipidiya' => 'z Wikipedijo',
				'Vikcyonaro' => 'Vikcyonaresa',
			),
		); # rmy

		$wgGrammarForms['sk'] = array(
			'genitív' => array(
				'Wikipédia'   => 'Wikipédie',
				'Wikislovník' => 'Wikislovníku',
				'Wikicitáty'  => 'Wikicitátov',
				'Wikiknihy'   => 'Wikikníh',
			),
			'datív' => array(
				'Wikipédia'   => 'Wikipédii',
				'Wikislovník' => 'Wikislovníku',
				'Wikicitáty'  => 'Wikicitátom',
				'Wikiknihy'   => 'Wikiknihám',
			),
			'akuzatív' => array(
				'Wikipédia'   => 'Wikipédiu',
				'Wikislovník' => 'Wikislovník',
				'Wikicitáty'  => 'Wikicitáty',
				'Wikiknihy'   => 'Wikiknihy',
			),
			'lokál' => array(
				'Wikipédia'   => 'Wikipédii',
				'Wikislovník' => 'Wikislovníku',
				'Wikicitáty'  => 'Wikicitátoch',
				'Wikiknihy'   => 'Wikiknihách',
			),
			'inštrumentál' => array(
				'Wikipédia'   => 'Wikipédiou',
				'Wikislovník' => 'Wikislovníkom',
				'Wikicitáty'  => 'Wikicitátmi',
				'Wikiknihy'   => 'Wikiknihami',
			),
		); # sk

		$wgGrammarForms['sl'] = array(
			# genitive
			'rodilnik' => array(
				'Wikipedija'  => 'Wikipedije',
				'Wikiknjige'  => 'Wikiknjig',
				'Wikinovice'  => 'Wikinovic',
				'Wikinavedek' => 'Wikinavedka',
				'Wikivir'     => 'Wikivira',
				'Wikislovar'  => 'Wikislovarja',
			),
			# dative
			'dajalnik' => array(
				'Wikipedija'  => 'Wikipediji',
				'Wikiknjige'  => 'Wikiknjigam',
				'Wikinovice'  => 'Wikinovicam',
				'Wikinavedek' => 'Wikinavedku',
				'Wikivir'     => 'Wikiviru',
				'Wikislovar'  => 'Wikislovarju',
			),
			# accusative
			'tožilnik' => array(
				'Wikipedija'  => 'Wikipedijo',
				# no need to transform the others
			),
			# locative
			'mestnik' => array(
				'Wikipedija'  => 'o Wikipediji',
				'Wikiknjige'  => 'o Wikiknjigah',
				'Wikinovice'  => 'o Wikinovicah',
				'Wikinavedek' => 'o Wikinavedku',
				'Wikivir'     => 'o Wikiviru',
				'Wikislovar'  => 'o Wikislovarju',
			),
			# instrumental
			'orodnik' => array(
				'Wikipedija'  => 'z Wikipedijo',
				'Wikiknjige'  => 'z Wikiknjigami',
				'Wikinovice'  => 'z Wikinovicami',
				'Wikinavedek' => 'z Wikinavedkom',
				'Wikivir'     => 'z Wikivirom',
				'Wikislovar'  => 'z Wikislovarjem',
			),
		); # sl

		$wgGrammarForms['uk'] = array(
			# genitive
			'genitive' => array(
				'Вікіпедія' => 'Вікіпедії',
				'Вікісловник' => 'Вікісловника',
				'Вікісховище' => 'Вікісховища',
				'Вікіпідручник' => 'Вікіпідручника',
				'Вікіцитати' => 'Вікіцитат',
				'Вікіджерела' => 'Вікіджерел',
				'Вікіновини' => 'Вікіновин',
				'Вікідані' => 'Вікіданих',
				'Вікімандри' => 'Вікімандрів',
			),
			# dative
			'dative' => array(
				'Вікіпедія' => 'Вікіпедії',
				'Вікісловник' => 'Вікісловнику',
				'Вікісховище' => 'Вікісховищу',
				'Вікіпідручник' => 'Вікіпідручнику',
				'Вікіцитати' => 'Вікіцитатам',
				'Вікіджерела' => 'Вікіджерелам',
				'Вікіновини' => 'Вікіновинам',
				'Вікідані' => 'Вікіданим',
				'Вікімандри' => 'Вікімандрам',
			),
			# accusative
			'accusative' => array(
				'Вікіпедія' => 'Вікіпедію',
				'Вікісловник' => 'Вікісловник',
				'Вікісховище' => 'Вікісховище',
				'Вікіпідручник' => 'Вікіпідручник',
				'Вікіцитати' => 'Вікіцитати',
				'Вікіджерела' => 'Вікіджерела',
				'Вікіновини' => 'Вікіновини',
				'Вікідані' => 'Вікідані',
				'Вікімандри' => 'Вікімандри',
			),
			# instrumental
			'instrumental' => array(
				'Вікіпедія' => 'Вікіпедією',
				'Вікісловник' => 'Вікісловником',
				'Вікісховище' => 'Вікісховищем',
				'Вікіпідручник' => 'Вікіпідручником',
				'Вікіцитати' => 'Вікіцитатами',
				'Вікіджерела' => 'Вікіджерелами',
				'Вікіновини' => 'Вікіновинами',
				'Вікідані' => 'Вікіданими',
				'Вікімандри' => 'Вікімандрами',
			),
			# locative
			'locative' => array(
				'Вікіпедія' => 'у Вікіпедії',
				'Вікісловник' => 'у Вікісловнику',
				'Вікісховище' => 'у Вікісховищі',
				'Вікіпідручник' => 'у Вікіпідручнику',
				'Вікіцитати' => 'у Вікіцитатах',
				'Вікіджерела' => 'у Вікіджерелах',
				'Вікіновини' => 'у Вікіновинах',
				'Вікідані' => 'у Вікіданих',
				'Вікімандри' => 'у Вікімандрах',
			),
			# vocative
			'vocative' => array(
				'Вікіпедія' => 'Вікіпедіє',
				'Вікісловник' => 'Вікісловнику',
				'Вікісховище' => 'Вікісховище',
				'Вікіпідручник' => 'Вікіпідручнику',
				'Вікіцитати' => 'Вікіцитати',
				'Вікіджерела' => 'Вікіджерела',
				'Вікіновини' => 'Вікіновини',
				'Вікідані' => 'Вікідані',
				'Вікімандри' => 'Вікімандри',
			),
		); # uk
	}
}
