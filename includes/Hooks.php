<?php

// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName
// Need to be able to define ::onUploadForm_initial

namespace MediaWiki\Extension\WikimediaMessages;

use ErrorPageError;
use HtmlArmor;
use MediaWiki\Cache\Hook\MessageCacheFetchOverridesHook;
use MediaWiki\Config\Config;
use MediaWiki\Config\ConfigException;
use MediaWiki\Config\ServiceOptions;
use MediaWiki\Extension\WikimediaMessages\LogFormatter\WMUserMergeLogFormatter;
use MediaWiki\Hook\EditPageCopyrightWarningHook;
use MediaWiki\Hook\SidebarBeforeOutputHook;
use MediaWiki\Hook\SkinAddFooterLinksHook;
use MediaWiki\Hook\SkinCopyrightFooterMessageHook;
use MediaWiki\Hook\SkinTemplateNavigation__UniversalHook;
use MediaWiki\Hook\UploadForm_initialHook;
use MediaWiki\Html\Html;
use MediaWiki\Linker\Linker;
use MediaWiki\Linker\LinkRenderer;
use MediaWiki\MainConfigNames;
use MediaWiki\Message\Message;
use MediaWiki\Output\Hook\BeforePageDisplayHook;
use MediaWiki\Output\OutputPage;
use MediaWiki\Permissions\PermissionManager;
use MediaWiki\Registration\ExtensionRegistry;
use MediaWiki\ResourceLoader\Hook\ResourceLoaderRegisterModulesHook;
use MediaWiki\ResourceLoader\ResourceLoader;
use MediaWiki\SpecialPage\Hook\SpecialPageBeforeExecuteHook;
use MediaWiki\SpecialPage\SpecialPage;
use MediaWiki\Specials\SpecialUpload;
use MediaWiki\Title\Title;
use MediaWiki\User\Options\UserOptionsLookup;
use MessageCache;
use MessageLocalizer;
use MobileContext;
use Skin;
use SkinTemplate;
use Wikimedia\IPUtils;
use Wikimedia\Message\MessageSpecifier;

/**
 * Hooks for WikimediaMessages extension
 *
 * @file
 * @ingroup Extensions
 */
class Hooks implements
	BeforePageDisplayHook,
	EditPageCopyrightWarningHook,
	MessageCacheFetchOverridesHook,
	ResourceLoaderRegisterModulesHook,
	SidebarBeforeOutputHook,
	SkinAddFooterLinksHook,
	SkinCopyrightFooterMessageHook,
	SkinTemplateNavigation__UniversalHook,
	SpecialPageBeforeExecuteHook,
	UploadForm_initialHook
{

	public const CONSTRUCTOR_OPTIONS = [
		MainConfigNames::DBname,
		MainConfigNames::ForceUIMsgAsContentMsg,
		'WikimediaMessagesLicensing',
		MainConfigNames::LanguageCode,
		MainConfigNames::RightsText,
		MainConfigNames::RightsPage,
		MainConfigNames::RightsUrl,
	];

	private ExtensionRegistry $extensionRegistry;
	private LinkRenderer $linkRenderer;
	private PermissionManager $permissionManager;
	private ServiceOptions $options;
	private UserOptionsLookup $userOptionsLookup;
	private ?MobileContext $mobileContext;

	public function __construct(
		ExtensionRegistry $extensionRegistry,
		LinkRenderer $linkRenderer,
		PermissionManager $permissionManager,
		ServiceOptions $options,
		UserOptionsLookup $userOptionsLookup,
		?MobileContext $mobileContext = null
	) {
		$options->assertRequiredOptions( self::CONSTRUCTOR_OPTIONS );
		$this->extensionRegistry = $extensionRegistry;
		$this->linkRenderer = $linkRenderer;
		$this->permissionManager = $permissionManager;
		$this->options = $options;
		$this->userOptionsLookup = $userOptionsLookup;
		$this->mobileContext = $mobileContext;
	}

	public static function factory(
		LinkRenderer $linkRenderer,
		Config $mainConfig,
		PermissionManager $permissionManager,
		UserOptionsLookup $userOptionsLookup,
		?MobileContext $mobileContext = null
	): self {
		return new self(
			ExtensionRegistry::getInstance(),
			$linkRenderer,
			$permissionManager,
			new ServiceOptions( self::CONSTRUCTOR_OPTIONS, $mainConfig ),
			$userOptionsLookup,
			$mobileContext
		);
	}

	/**
	 * When core requests certain messages, change the key to a Wikimedia version.
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/MessageCacheFetchOverrides
	 * @param string[] &$keys
	 */
	public function onMessageCacheFetchOverrides( array &$keys ): void {
		global $wmgRealm;

		static $keysToOverride = [
			'acct_creation_throttle_hit',
			'centralauth-contribs-locked',
			// T216347
			'centralauth-login-error-locked',
			// T86741
			'centralauth-groupname',
			// T345549
			'checkuser-api-useragent-clienthints-explanation',
			'checkuser-toollinks',
			// T327281
			'checkuser-tempaccount-enable-preference-description',
			// T362548
			'checkuser-investigateblock-warning-ips-and-users-in-targets',
			'createacct-helpusername',
			'createacct-imgcaptcha-help',
			// T139797
			'delete-toobig',
			'feedback-termsofuse',
			'globalblocking-blockedtext-ip',
			'globalblocking-blockedtext-range',
			'globalblocking-blockedtext-xff',
			'globalblocking-blockedtext-user',
			'globalblocking-blockedtext-autoblock',
			'globalblocking-blockedtext-autoblock-xff',
			'globalrenamequeue-email-body-approved',
			'globalrenamequeue-email-body-rejected',
			'interfaceadmin-info',
			// T121639
			'ipb-confirmhideuser',
			'mwoauth-form-privacypolicy-link',
			// T252375
			'mobile-frontend-terms-url',
			'mwoauthserver-invalid-user',
			// T226059
			'oathauth-step1-test',
			// T189924
			'oathauth-hint',
			// T272412
			'prefs-user-downloaddata-help-message',
			'privacypage',
			'sidebar',
			// T140941
			'sitematrix',
			'sitematrix-others',
			'sitematrix-summary',
			'sulrenamewarning-usenew',
			// T248367
			'webauthn-module-description',
			// T248367
			'webauthn-ui-login-prompt',
			// T218160
			'log-action-filter-usermerge',
			'log-action-filter-usermerge-mergeuser',
			'log-action-filter-usermerge-deleteuser',
			'notification-body-oathauth-disable-other',
			'oathauth-notifications-disable-helplink',
			// T307493
			'ipinfo-source-geoip2',
			'ipinfo-infobox-use-terms',
			'ipinfo-preference-use-agreement',
			'similareditors-error-default',
			// T348926
			'jsonconfig-license-copyrightwarning',
			'jsonconfig-license-copyrightwarning-license-unset',
			'jsonconfig-license-notice',
			'jsonconfig-license-notice-license-unset',
			// T340115
			'campaignevents-edit-field-clickwrap-checkbox-label',
			// T322209
			'campaignevents-edit-form-questions-pii-notice',
			// T357869
			'pt-movepage-page-count-limit',
		];

		static $allbutmetawikikeys = [
			// T221526
			'apierror-urlshortener-disabled',
			// T230253
			'apierror-urlshortener-permissiondenied',
			// T331743
			'centralauth-admin-log-otherwiki',
			// T230253
			'urlshortener-badaccessgroups',
			// T221526
			'urlshortener-disabled',
		];

		// Temporarily override grouppage-suppress to grouppage-oversight,
		// to avoid breaking links. See T112147.
		$keys['grouppage-suppress'] = 'grouppage-oversight';

		if ( $wmgRealm === 'labs' ) {
			$keys['privacypage'] = 'wikimedia-privacypage-labs';
		}

		$languageCode = $this->options->get( MainConfigNames::LanguageCode );

		$transformationCallback = static function ( string $key, MessageCache $cache ) use ( $languageCode ): string {
			$transformedKey = "wikimedia-$key";

			// MessageCache uses ucfirst if ord( key ) is < 128, which is true of all
			// of the above.  Revisit if non-ASCII keys are used.
			$ucKey = ucfirst( $key );

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
				$cache->getMsgFromNamespace( $ucKey, $languageCode ) === false
			) {
				return $transformedKey;
			}

			return $key;
		};

		foreach ( $keysToOverride as $key ) {
			$keys[$key] = $transformationCallback;
		}

		if ( $this->options->get( MainConfigNames::DBname ) !== 'metawiki' ) {
			foreach ( $allbutmetawikikeys as $key ) {
				$keys[$key] = $transformationCallback;
			}
		}

		$licensing = $this->options->get( 'WikimediaMessagesLicensing' );
		$rightsText = $this->options->get( MainConfigNames::RightsText );

		switch ( $licensing ) {
			case 'mediawiki':
				$keys['mobile-frontend-license-links'] = 'mediawiki.org-mobile-license-links';
				break;
			case 'wikidata':
				$keys['mobile-frontend-license-links'] = 'wikidata-mobile-license-links';
				break;
			case 'wikifunctions':
				$keys['mobile-frontend-license-links'] = 'wikifunctions-mobile-license-links';
				break;
			case 'commons':
			case 'standard':
				$keys['mobile-frontend-license-links'] = 'wikimedia-mobile-license-links';
				break;
			case 'wikinews':
				// This is necessary because MobileFrontend doesn't always display the license based on
				// config settings (T296791)
				if ( $rightsText === 'Creative Commons Attribution 3.0' ) {
					$keys['mobile-frontend-license-links'] = 'wikinews-mobile-license-links-ccby30';
				} else {
					$keys['mobile-frontend-license-links'] = 'wikinews-mobile-license-links';
				}
				break;
			default:
				throw new ConfigException( "Unknown value for WikimediaMessagesLicensing: '$licensing'" );
		}

		$keys['mainpage-title-loggedin'] = function ( string $key ): string {
			return ( $this->mobileContext && $this->mobileContext->shouldDisplayMobileView() ) ?
				'wikimedia-mobile-mainpage-title-loggedin' : $key;
		};
	}

	private function getShortRightsLink(): string {
		$rightsText = $this->options->get( MainConfigNames::RightsText );
		$rightsPage = $this->options->get( MainConfigNames::RightsPage );
		$rightsUrl = $this->options->get( MainConfigNames::RightsUrl );
		$commonLicenses = [
			'Creative Commons Attribution-Share Alike 4.0' => 'CC BY-SA 4.0',
			'Creative Commons Attribution-Share Alike 3.0' => 'CC BY-SA 3.0',
			'Creative Commons Attribution 3.0' => 'CC BY 3.0',
			'Creative Commons Attribution 2.5' => 'CC BY 2.5',
		];
		if ( isset( $commonLicenses[$rightsText] ) ) {
			$rightsText = $commonLicenses[$rightsText];
		}
		if ( $rightsPage ) {
			$title = Title::newFromText( $rightsPage );
			$link = $this->linkRenderer->makeKnownLink( $title, new HtmlArmor( $rightsText ), [] );
		} elseif ( $rightsUrl ) {
			$link = Linker::makeExternalLink( $rightsUrl, $rightsText, true, '', [] );
		} else {
			$link = $rightsText;
		}
		return $link;
	}

	/**
	 * Override for copyright message in skin footer.
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/SkinCopyrightFooterMessage
	 *
	 * @param Title $title
	 * @param string $type
	 * @param MessageSpecifier &$msgSpec
	 */
	public function onSkinCopyrightFooterMessage( $title, $type, &$msgSpec ) {
		if ( $type === 'history' ) {
			return;
		}

		$licensing = $this->options->get( 'WikimediaMessagesLicensing' );
		$isMobile = $this->mobileContext && $this->mobileContext->shouldDisplayMobileView();

		switch ( $licensing ) {
			case 'wikidata':
				// Wikidata is licensed under CC-BY-SA 4.0 only, no GFDL. (Also, the data is under CC0.)
				$msgSpec = Message::newFromSpecifier( 'wikidata-copyright-footer' );
				break;
			case 'mediawiki':
				// MediaWiki.org has a special licence for the Help: namespace.
				$msgSpec = Message::newFromSpecifier( 'mediawiki.org-copyright-footer' );
				break;
			case 'commons':
				// Commons has a special licence for the structured data.
				// TODO: Should we also mention the special Data: namespace?
				$msgSpec = Message::newFromSpecifier( 'wikimedia-commons-copyright-footer' );
				break;
			case 'standard':
				// Almost all Wikimedia wikis using CC-BY-SA 4.0 are also dual-licensed under GFDL.
				$msgSpec = $isMobile
					? Message::newFromSpecifier( 'mobile-frontend-copyright' )->rawParams( $this->getShortRightsLink() )
					: Message::newFromSpecifier( 'wikimedia-copyright-footer' );
				break;
			case 'wikinews':
				// Use the default MediaWiki message. (It's overridden locally on most Wikinewses.)
				$msgSpec = $isMobile
					? Message::newFromSpecifier( 'mobile-frontend-copyright' )->rawParams( $this->getShortRightsLink() )
					: $msgSpec;
				break;
			case 'wikifunctions':
				// Wikifunctions like Wikidata is licensed under CC-BY-SA 4.0 only, no GFDL. The data is
				// under CC0. The code is under Apache 2.0.
				$msgSpec = Message::newFromSpecifier( 'wikifunctions-site-footer-copyright-footer' );
				break;
			default:
				throw new ConfigException( "Unknown value for WikimediaMessagesLicensing: '$licensing'" );
		}
	}

	/**
	 * Override for copyright message on edit page.
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/EditPageCopyrightWarning
	 *
	 * @param Title $title
	 * @param array &$msg
	 */
	public function onEditPageCopyrightWarning( $title, &$msg ) {
		$licensing = $this->options->get( 'WikimediaMessagesLicensing' );

		switch ( $licensing ) {
			case 'wikidata':
			case 'wikifunctions':
				// Wikidata and Wikifunctions are licensed under CC-BY-SA 4.0 only, no GFDL.
				$msg = [ 'wikimedia-copyrightwarning-ccbysa40only' ];
				break;
			case 'mediawiki':
				// MediaWiki.org pages are dual-licensed under CC-BY-SA 4.0 and GFDL, except for the Help: namespace.
				$msg = [ 'mediawiki.org-copyrightwarning' ];
				break;
			case 'commons':
			case 'standard':
				// Almost all Wikimedia wikis using CC-BY-SA 4.0 are also dual-licensed under GFDL.
				$msg = [ 'wikimedia-copyrightwarning' ];
				break;
			case 'wikinews':
				// Use the default MediaWiki message. (It's overridden locally on most Wikinewses.)
				break;
			default:
				throw new ConfigException( "Unknown value for WikimediaMessagesLicensing: '$licensing'" );
		}
	}

	/**
	 * Override for copyright messages (DiscussionTools extension).
	 *
	 * @param array &$messages
	 * @param MessageLocalizer $context
	 * @param Config $config
	 */
	public static function onDiscussionToolsTermsOfUseMessages(
		array &$messages, MessageLocalizer $context, Config $config
	) {
		$licensing = $config->get( 'WikimediaMessagesLicensing' );

		switch ( $licensing ) {
			case 'wikidata':
			case 'wikifunctions':
				// Do not use $wgRightsText or $wgRightsPage, as they are customized for the API (T112606).
				$rightsUrl = $config->get( 'RightsUrl' );
				$rightsText = 'Creative Commons Attribution-Share Alike 4.0';
				$links = [ "[$rightsUrl $rightsText]", 1 ];
				break;
			case 'wikinews':
				// Add the license name to the terms-of-use message
				$rightsUrl = $config->get( 'RightsUrl' );
				$rightsText = $config->get( 'RightsText' );
				$links = [ "[$rightsUrl $rightsText]", 1 ];
				break;
			case 'commons':
			case 'mediawiki':
			case 'standard':
				// Add the license names to the terms-of-use message - dual-licensed wikis
				$links = [ $context->msg( 'wikimedia-license-links' )->plain(), 2 ];
				break;
			default:
				throw new ConfigException( "Unknown value for WikimediaMessagesLicensing: '$licensing'" );
		}

		$messages['reply'] = array_merge( [ 'wikimedia-discussiontools-replywidget-terms-click',
			$context->msg( 'discussiontools-replywidget-reply' )->text() ], $links );
		$messages['newtopic'] = array_merge( [ 'wikimedia-discussiontools-replywidget-terms-click',
			$context->msg( 'discussiontools-replywidget-newtopic' )->text() ], $links );
	}

	/**
	 * Override for copyright messages (Flow extension).
	 *
	 * @param array &$messages
	 * @param MessageLocalizer $context
	 * @param Config $config
	 */
	public static function onFlowTermsOfUseMessages(
		array &$messages, MessageLocalizer $context, Config $config
	) {
		$licensing = $config->get( 'WikimediaMessagesLicensing' );

		switch ( $licensing ) {
			case 'wikidata':
			case 'wikifunctions':
				// Do not use $wgRightsText or $wgRightsPage, as they are customized for the API (T112606).
				$rightsUrl = $config->get( 'RightsUrl' );
				$rightsText = 'Creative Commons Attribution-Share Alike 4.0';
				$links = [ "[$rightsUrl $rightsText]", 1 ];
				break;
			case 'wikinews':
				// Add the license name to the terms-of-use message
				$rightsUrl = $config->get( 'RightsUrl' );
				$rightsText = $config->get( 'RightsText' );
				$links = [ "[$rightsUrl $rightsText]", 1 ];
				break;
			case 'commons':
			case 'mediawiki':
			case 'standard':
				// Add the license names to the terms-of-use message - dual-licensed wikis
				$links = [ $context->msg( 'wikimedia-license-links' )->plain(), 2 ];
				break;
			default:
				throw new ConfigException( "Unknown value for WikimediaMessagesLicensing: '$licensing'" );
		}

		$messages['edit'] = array_merge( [ 'wikimedia-flow-terms-of-use-edit' ], $links );
		$messages['lock-topic'] = array_merge( [ 'wikimedia-flow-terms-of-use-lock-topic' ], $links );
		$messages['new-topic'] = array_merge( [ 'wikimedia-flow-terms-of-use-new-topic' ], $links );
		$messages['reply'] = array_merge( [ 'wikimedia-flow-terms-of-use-reply' ], $links );
		$messages['summarize'] = array_merge( [ 'wikimedia-flow-terms-of-use-summarize' ], $links );
		$messages['unlock-topic'] = array_merge( [ 'wikimedia-flow-terms-of-use-unlock-topic' ], $links );
	}

	/**
	 * Add links to the footer of every page:
	 *   - "Developers" (T35464),
	 *   - "Statistics" (T235803), and
	 *   - "Cookie statement" (T124366)
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/SkinAddFooterLinks
	 *
	 * @param Skin $skin
	 * @param string $key
	 * @param array &$footerLinks
	 */
	public function onSkinAddFooterLinks( Skin $skin, string $key, array &$footerLinks ) {
		if ( $key !== 'places' ) {
			return;
		}
		$devDestination = Skin::makeInternalOrExternalUrl(
			$skin->msg( 'wikimedia-developers-url' )->inContentLanguage()->text()
		);
		$footerLinks['developers'] = Html::element(
			'a',
			[ 'href' => $devDestination ],
			$skin->msg( 'wikimedia-developers' )->text()
		);

		$statsDestination = Skin::makeInternalOrExternalUrl(
			$skin->msg(
				'wikimedia-statslink-url', $skin->getConfig()->get( 'ServerName' )
			)->inContentLanguage()->text()
		);
		$footerLinks['statslink'] = Html::element(
			'a',
			[ 'href' => $statsDestination ],
			$skin->msg( 'wikimedia-statslink' )->text()
		);

		$cookieDestination = Skin::makeInternalOrExternalUrl(
			$skin->msg( 'wikimedia-cookiestatement-page' )->inContentLanguage()->text()
		);
		$footerLinks['cookiestatement'] = Html::element(
			'a',
			[ 'href' => $cookieDestination ],
			$skin->msg( 'wikimedia-cookiestatement' )->text()
		);
	}

	/**
	 * Change which message is shown when TorBlock triggers (TorBlock extension)
	 *
	 * @todo FIXME: Should have a specific message for WMF projects (T44231)
	 *
	 * @todo once TorBlock updates to use hook interfaces that can be implemented,
	 * convert to using this class as a hook handler and make non-static with DI
	 *
	 * @param string &$msg The message key
	 */
	public static function onTorBlockBlockedMsg( &$msg ) {
		$msg = 'wikimedia-torblock-blocked';
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
	 * @param SpecialUpload $upload
	 * @throws ErrorPageError
	 */
	public function onUploadForm_initial( $upload ) {
		$forceUIMsgAsContentMsg = $this->options->get( MainConfigNames::ForceUIMsgAsContentMsg );

		// TODO inject something to replace use of wfMessage
		if ( !in_array( 'licenses', $forceUIMsgAsContentMsg )
			&& wfMessage( 'licenses' )->inContentLanguage()->isDisabled()
		) {
			throw new ErrorPageError( 'uploaddisabled', 'wikimedia-upload-nolicenses' );
		}
	}

	/**
	 * Override `$wgGrammarForms` for Wikimedia sites as a more convenient form
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
		];

		$wgGrammarForms['be'] = [
			// genitive
			'родны' => [
				'Віківіды'    => 'Віківідаў',
				'Вікіданыя'   => 'Вікіданых',
				'Вікікнігі'   => 'Вікікніг',
				'Вікікрыніцы' => 'Вікікрыніц',
				'Вікінавіны'  => 'Вікінавін',
				'Вікіслоўнік' => 'Вікіслоўніка',
				'Вікіпедыя'   => 'Вікіпедыі',
			],
			// accusative
			'вінавальны' => [
				'Вікіпедыя'   => 'Вікіпедыю',
			],
			// prepositional
			'месны' => [
				'Віківіды'    => 'Віківідах',
				'Вікіданыя'   => 'Вікіданых',
				'Вікікнігі'   => 'Вікікнігах',
				'Вікікрыніцы' => 'Вікікрыніцах',
				'Вікінавіны'  => 'Вікінавінах',
				'Вікіслоўнік' => 'Вікіслоўніку',
				'Вікіпедыя'   => 'Вікіпедыі',
			],
		];

		$wgGrammarForms['be-tarask'] = [
			// genitive
			'родны' => [
				'Віківіды'    => 'Віківідаў',
				'Вікізьвесткі' => 'Вікізьвестак',
				'Вікікнігі'   => 'Вікікніг',
				'Вікікрыніцы' => 'Вікікрыніц',
				'Вікімэдыя'   => 'Вікімэдыі',
				'Вікінавіны'  => 'Вікінавін',
				'Вікіпэдыя'   => 'Вікіпэдыі',
				'Вікіслоўнік' => 'Вікіслоўніка',
				'Вікісховішча' => 'Вікісховішча',
				'Фундацыя «Вікімэдыя»' => 'Фундацыі «Вікімэдыя»',
			],
			// dative
			'давальны' => [
				'Віківіды'    => 'Віківідам',
				'Вікізьвесткі' => 'Вікізьвесткам',
				'Вікікнігі'   => 'Вікікнігам',
				'Вікікрыніцы' => 'Вікікрыніцам',
				'Вікімэдыя'   => 'Вікімэдыі',
				'Вікінавіны'  => 'Вікінавінам',
				'Вікіпэдыя'   => 'Вікіпэдыі',
				'Вікіслоўнік' => 'Вікіслоўніку',
				'Вікісховішча' => 'Вікісховішчу',
				'Фундацыя «Вікімэдыя»' => 'Фундацыі «Вікімэдыя»',
			],
			// accusative
			'вінавальны' => [
				'Віківіды'    => 'Віківіды',
				'Вікізьвесткі' => 'Вікізьвесті',
				'Вікікнігі'   => 'Вікікнігі',
				'Вікікрыніцы' => 'Вікікрыніцы',
				'Вікімэдыя'   => 'Вікімэдыю',
				'Вікінавіны'  => 'Вікінавіны',
				'Вікіпэдыя'   => 'Вікіпэдыю',
				'Вікіслоўнік' => 'Вікіслоўнік',
				'Вікісховішча' => 'Вікісховішча',
				'Фундацыя «Вікімэдыя»' => 'Фундацыю «Вікімэдыя»',
			],
			// instrumental
			'творны' => [
				'Віківіды'    => 'Віківідамі',
				'Вікізьвесткі' => 'Вікізьвесткамі',
				'Вікікнігі'   => 'Вікікнігамі',
				'Вікікрыніцы' => 'Вікікрыніцамі',
				'Вікімэдыя'   => 'Вікімэдыяй',
				'Вікінавіны'  => 'Вікінавінамі',
				'Вікіпэдыя'   => 'Вікіпэдыяй',
				'Вікіслоўнік' => 'Вікіслоўнікам',
				'Вікісховішча' => 'Вікісховішчам',
				'Фундацыя «Вікімэдыя»' => 'Фундацыяй «Вікімэдыя»',
			],
			// prepositional
			'месны' => [
				'Віківіды'    => 'Віківідах',
				'Вікізьвесткі' => 'Вікізьвестках',
				'Вікікнігі'   => 'Вікікнігах',
				'Вікікрыніцы' => 'Вікікрыніцах',
				'Вікімэдыя'   => 'Вікімэдыі',
				'Вікінавіны'  => 'Вікінавінах',
				'Вікіпэдыя'   => 'Вікіпэдыі',
				'Вікіслоўнік' => 'Вікіслоўніку',
				'Вікісховішча' => 'Вікісховішчы',
				'Фундацыя «Вікімэдыя»' => 'Фундацыі «Вікімэдыя»',
			],
		];

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
				'Vikirječnik' => 'Wikirječnikom',
				'Wikicitati'  => 'Wikicitatima',
				'Wikiizvor'   => 'Wikiizvorom',
				'Wikiknjige'  => 'Wikiknjigama',
				// T130141
				'Wikipedia'   => 'Wikipedijom',
				'Wikipodaci'  => 'Wikipodacima',
				'Wikivijesti' => 'Wikivijestima',
				'Wikimedia Commons' => 'Wikimedia Commonsom',
			],
			// locative
			'lokativ' => [
				'Vikirječnik' => 'Wikirječniku',
				'Wikicitati'  => 'Wikicitatima',
				'Wikiizvor'   => 'Wikiizvoru',
				'Wikiknjige'  => 'Wikiknjigama',
				'Wikipedia'   => 'Wikipediji',
				'Wikipodaci'  => 'Wikipodacima',
				'Wikivijesti' => 'Wikivijestima',
				'Wikimedia Commons' => 'Wikimedia Commonsu',
			],
		];

		$wgGrammarForms['cs'] = [
			// only forms different than default/given
			'1sg' => [
				'Wikibooks'   => 'Wikiknihy',
				'Wikifunctions' => 'Wikifunkce',
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
				'Wikifunctions' => 'Wikifunkcí',
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
				'Wikifunkce'  => 'Wikifunkcí',
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
				'Wikifunctions' => 'Wikifunkcím',
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
				'Wikifunkce'  => 'Wikifunkcím',
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
				'Wikifunctions' => 'Wikifunkce',
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
				'Wikifunctions' => 'Wikifunkce',
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
				'Wikifunctions' => 'Wikifunkcích',
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
				'Wikifunkce'  => 'Wikifunkcích',
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
				'Wikifunctions' => 'Wikifunkcemi',
				'Wikinews'    => 'Wikizprávami',
				'Wikipedia'   => 'Wikipedií',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroji',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzitou',
				'Wikivoyage'  => 'Wikicestami',
				'Wiktionary'  => 'Wikislovníkem',
				'Wikicesty'   => 'Wikicestami',
				'Wikifunkce'  => 'Wikifunkcemi',
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
				'Wikifunctions' => 'Wikifunkce',
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
				'Wikifunctions' => 'Wikifunkcí',
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
				'Wikifunkce'  => 'Wikifunkcí',
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
				'Wikifunctions' => 'Wikifunkcím',
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
				'Wikifunkce'  => 'Wikifunkcím',
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
				'Wikifunctions' => 'Wikifunkce',
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
				'Wikifunctions' => 'Wikifunkce',
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
				'Wikifunctions' => 'Wikifunkcích',
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
				'Wikifunkce'  => 'Wikifunkcích',
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
				'Wikifunctions' => 'Wikifunkcemi',
				'Wikinews'    => 'Wikizprávami',
				'Wikipedia'   => 'Wikipediemi',
				'Wikiquote'   => 'Wikicitáty',
				'Wikisource'  => 'Wikizdroji',
				'Wikispecies' => 'Wikidruhy',
				'Wikiversity' => 'Wikiverzitami',
				'Wikivoyage'  => 'Wikicestami',
				'Wiktionary'  => 'Wikislovníky',
				'Wikicesty'   => 'Wikicestami',
				'Wikifunkce'  => 'Wikifunkcemi',
				'Wikiknihy'   => 'Wikiknihami',
				'Wikipedie'   => 'Wikipediemi',
				'Wikislovník' => 'Wikislovníky',
				'Wikiverzita' => 'Wikiverzitami',
				'Wikizdroje'  => 'Wikizdroji',
				'Wikizprávy'  => 'Wikizprávami',
			],
		];

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
		];

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
		];

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
		];

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
		];

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
		];

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
		];

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
		];
		// T289767
		$wgGrammarForms['ks'] = [
			// ergative
			'کرٛاوَل' => [
				'وِکیٖلۄغَتھ' => 'وِکیٖلۄغتَن',
			],
			// dative
			'دُکرٛٲوؠ' => [
				'وِکیٖلۄغَتھ' => 'وِکیٖلۄغتَس',
			],
			// ablative
			'آیِتؠ' => [
				'وِکیٖلۄغَتھ' => 'وِکیٖلۄغتہٕ',
			],
		];
		$wgGrammarForms['la'] = [
			'genitive' => [
				'Vicimedia Communia' => 'Vicimediorum Communium',
			],
			'ablative' => [
				'Vicimedia Communia' => 'Vicimediis Communibus',
			],
		];

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
		];

		$wgGrammarForms['pl'] = [
			'D.lp' => [
				'Wikicytaty'   => 'Wikicytatów',
				'Wikipedia'    => 'Wikipedii',
				'Wikipodróże'  => 'Wikipodróży',
				'Wikisłownik'  => 'Wikisłownika',
				'Wikiźródła'   => 'Wikiźródeł',
				'Wikidane'     => 'Wikidanych',
				'Wikimania'    => 'Wikimanii',
				'Wikifunkcje'  => 'Wikifunkcji',
			],
			'C.lp' => [
				'Wikicytaty'   => 'Wikicytatom',
				'Wikipedia'    => 'Wikipedii',
				'Wikipodróże'  => 'Wikipodróżom',
				'Wikisłownik'  => 'Wikisłownikowi',
				'Wikiźródła'   => 'Wikiźródłom',
				'Wikidane'     => 'Wikidanym',
				'Wikimania'    => 'Wikimanii',
				'Wikifunkcje'  => 'Wikifunkcjom',
			],
			'B.lp' => [
				'Wikipedia'    => 'Wikipedię',
				'Wikimania'    => 'Wikimanię',
			],
			'N.lp' => [
				'Wikicytaty'   => 'Wikicytatami',
				'Wikipedia'    => 'Wikipedią',
				'Wikipodróże'  => 'Wikipodróżami',
				'Wikisłownik'  => 'Wikisłownikiem',
				'Wikiźródła'   => 'Wikiźródłami',
				'Wikidane'     => 'Wikidanymi',
				'Wikimania'    => 'Wikimanią',
				'Wikifunkcje'  => 'Wikifunkcjami',
			],
			'MS.lp' => [
				'Wikicytaty'   => 'Wikicytatach',
				'Wikipedia'    => 'Wikipedii',
				'Wikipodróże'  => 'Wikipodróżach',
				'Wikisłownik'  => 'Wikisłowniku',
				'Wikiźródła'   => 'Wikiźródłach',
				'Wikidane'     => 'Wikidanych',
				'Wikimania'    => 'Wikimanii',
				'Wikifunkcje'  => 'Wikifunkcjach',
			],
			'W.lp' => [
				'Wikipedia'    => 'Wikipedio',
				'Wikisłownik'  => 'Wikisłowniku',
				'Wikimania'    => 'Wikimanio',
			],
		];

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
		];

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
		];

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
		];

		$wgGrammarForms['sr-ec'] =
		$wgGrammarForms['sr-cyrl'] = [
			// genitive
			'генитив' => [
				'Викиречник'  => 'Викиречника',
				'Викицитат'   => 'Викицитата',
				'Викизворник' => 'Викизворника',
				'Викикњиге'   => 'Викикњига',
				'Википедија'  => 'Википедије',
				'Википодаци'  => 'Википодатака',
				'Викимедијина остава' => 'Викимедијине оставе',
				'Викиверзитет' => 'Викиверзитета',
			],
			// dative
			'датив' => [
				'Викиречник'  => 'Викиречнику',
				'Викицитат'   => 'Викицитату',
				'Викизворник' => 'Викизворнику',
				'Викикњиге'   => 'Викикњигама',
				'Википедија'  => 'Википедији',
				'Википодаци'  => 'Википодацима',
				'Викиновости'   => 'Викиновистима',
				'Викимедијина остава' => 'Викимедијиној остави',
				'Викиверзитет' => 'Викиверзитету',
			],
			// accusative
			'акузатив' => [
				'Викиречник'  => 'Викиречник',
				'Викицитат'   => 'Викицитат',
				'Викизворник' => 'Викизворник',
				'Википедија'  => 'Википедију',
				'Википодаци'  => 'Википодатке',
			],
			// vocative
			'вокатив' => [
				'Викиречник'  => 'Викиречниче',
				'Викизворник' => 'Викизворниче',
				'Википедија'  => 'Википедијо',
				'Викимедијина остава' => 'Викимедијина оставо',
				'Викиверзитет' => 'Викиверзитету',
			],
			// instrumental
			'инструментал' => [
				'Викиречник'  => 'Викиречником',
				'Викицитат'   => 'Викицитатом',
				'Викизворник' => 'Викизворником',
				'Викикњиге'   => 'Викикњигама',
				'Википедија'  => 'Википедијом',
				'Википодаци'  => 'Википодацима',
				'Викиновости'   => 'Викиновостима',
				'Викимедијина остава' => 'Викимедијином оставом',
				'Викиверзитет' => 'Викиверзитетом',
			],
			// locative
			'локатив' => [
				'Викиречник'  => 'Викиречнику',
				'Викицитат'   => 'Викицитату',
				'Викизворник' => 'Викизворнику',
				'Викикњиге'   => 'Викикњигама',
				'Википедија'  => 'Википедији',
				'Википодаци'  => 'Википодацима',
				'Викиновости'   => 'Викиновостима',
				'Викимедијина остава' => 'Викимедијиној остави',
				'Викиверзитет' => 'Викиверзитету',
			],
		];

		$wgGrammarForms['sr-el'] =
		$wgGrammarForms['sr-latn'] = [
			// genitive
			'genitiv' => [
				'Vikirečnik'  => 'Vikirečnika',
				'Vikicitat'   => 'Vikicitata',
				'Vikizvornik' => 'Vikizvornika',
				'Vikiknjige'  => 'Vikiknjiga',
				'Vikipedija'  => 'Vikipedije',
				'Vikipodaci'  => 'Vikipodataka',
				'Vikimedijina ostava' => 'Vikimedijine ostave',
				'Vikiverzitet' => 'Vikiverziteta',
			],
			// dative
			'dativ' => [
				'Vikirečnik'  => 'Vikirečniku',
				'Vikicitat'   => 'Vikicitatu',
				'Vikizvornik' => 'Vikizvorniku',
				'Vikiknjige'  => 'Vikiknjigama',
				'Vikipedija'  => 'Vikipediji',
				'Vikipodaci'  => 'Vikipodacima',
				'Vikinovosti'   => 'Vikinovostima',
				'Vikimedijina ostava' => 'Vikimedijinoj ostavi',
				'Vikiverzitet' => 'Vikiverzitetu',
			],
			// accusative
			'akuzativ' => [
				'Vikirečnik'  => 'Vikirečnik',
				'Vikicitat'   => 'Vikicitat',
				'Vikizvornik' => 'Vikizvornik',
				'Vikipedija'  => 'Vikipediju',
				'Vikipodaci'  => 'Vikipodatke',
			],
			// vocative
			'vokativ' => [
				'Vikirečnik'  => 'Vikirečniče',
				'Vikizvornik' => 'Vikizvorniče',
				'Vikipedija'  => 'Vikipedijo',
				'Vikimedijina ostava' => 'Vikimedijina ostavo',
				'Vikiverzitet' => 'Vikiverzitetu',
			],
			// instrumental
			'instrumental' => [
				'Vikirečnik'  => 'Vikirečnikom',
				'Vikicitat'   => 'Vikicitatom',
				'Vikizvornik' => 'Vikizvornikom',
				'Vikiknjige'  => 'Vikiknjigama',
				'Vikipedija'  => 'Vikipedijom',
				'Vikipodaci'  => 'Vikipodacima',
				'Vikinovosti'   => 'Vikinovostima',
				'Vikimedijina ostava' => 'Vikimedijinom ostavom',
				'Vikiverzitet' => 'Vikiverzitetom',
			],
			// locative
			'lokativ' => [
				'Vikirečnik'  => 'Vikirečniku',
				'Vikicitat'   => 'Vikicitatu',
				'Vikizvornik' => 'Vikizvorniku',
				'Vikiknjige'  => 'Vikiknjigama',
				'Vikipedija'  => 'Vikipediji',
				'Vikipodaci'  => 'Vikipodacima',
				'Vikinovosti'   => 'Vikinovostima',
				'Vikimedijina ostava' => 'Vikimedijinoj ostavi',
				'Vikiverzitet' => 'Vikiverzitetu',
			],
		];

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
		];

		// Avoid weirdness if both extensions are loaded at the same time.
		if ( !ExtensionRegistry::getInstance()->isLoaded( 'UserMerge' ) ) {
			global $wgLogTypes, $wgLogNames, $wgLogHeaders, $wgLogActionsHandlers, $wgActionFilteredLogs;

			$wgLogTypes[] = 'usermerge';
			$wgLogNames['usermerge'] = 'wikimedia-usermerge-logpage';
			$wgLogHeaders['usermerge'] = 'wikimedia-usermerge-logpagetext';

			$wgLogActionsHandlers['usermerge/*'] = WMUserMergeLogFormatter::class;
			$wgActionFilteredLogs['usermerge'] = [
				'mergeuser'  => [ 'mergeuser' ],
				'deleteuser' => [ 'deleteuser' ],
			];
		}
	}

	/**
	 * Allows last minute changes to the output page, e.g. adding of CSS or JavaScript by extensions.
	 *
	 * @param OutputPage $out The Output page object
	 * @param Skin $skin Skin object that will be used to generate the page
	 */
	public function onBeforePageDisplay( $out, $skin ): void {
		$skins = $out->getConfig()->get( 'WikimediaStylesSkins' );

		if ( in_array( $skin->getSkinName(), $skins ) ) {
			$out->addModuleStyles( [ 'ext.wikimediamessages.styles' ] );
		}
	}

	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/ResourceLoaderRegisterModules
	 *
	 * @param ResourceLoader $resourceLoader
	 */
	public function onResourceLoaderRegisterModules( ResourceLoader $resourceLoader ): void {
		if ( $this->extensionRegistry->isLoaded( 'IPInfo' ) ) {
			$resourceLoader->register( 'ext.wikimediaMessages.ipInfo.hooks', [
				'localBasePath' => dirname( __DIR__ ) . '/modules/ext.wikimediaMessages.ipInfo.hooks',
				'remoteExtPath' => 'WikimediaMessages/modules/ext.wikimediaMessages.ipInfo.hooks',
				'scripts' => 'infobox.js',
				'styles' => 'infobox.less',
				'messages' => [
					'ipinfo-global-contributions-url-label',
					'ipinfo-global-contributions-url',
					'ipinfo-xtools-url-label',
					'ipinfo-xtools-url',
				],
				'dependencies' => [
					'ext.ipInfo',
				],
			] );
		}
	}

	/**
	 * Handle SpecialPageBeforeExecute hook
	 *
	 * @param SpecialPage $special
	 * @param string|null $subPage
	 */
	public function onSpecialPageBeforeExecute( $special, $subPage ) {
		$this->addIPInfoLinks( $special, $subPage );
	}

	/**
	 * @param SpecialPage $special
	 * @param string|null $subPage
	 */
	private function addIPInfoLinks( $special, $subPage ): void {
		if (
			$special->getName() !== 'Contributions' &&
			$special->getName() !== 'DeletedContributions'
		) {
			return;
		}

		// Return if target is not an IP address
		if ( $subPage === null || !IPUtils::isValid( $subPage ) ) {
			return;
		}

		$accessingUser = $special->getUser();
		$isBetaFeaturesLoaded = $this->extensionRegistry->isLoaded( 'BetaFeatures' );

		// Check the same permissions and preferences as
		// MediaWiki\IPInfo\HookHandler\InfoboxHandler
		if (
			!$this->permissionManager->userHasRight( $accessingUser, 'ipinfo' ) ||
			( $isBetaFeaturesLoaded &&
				!$this->userOptionsLookup->getOption( $accessingUser, 'ipinfo-beta-feature-enable' ) )
		) {
			return;
		}

		$special->getOutput()->addModules( 'ext.wikimediaMessages.ipInfo.hooks' );
	}

	/**
	 * Whether or not the donate link should be moved from the sidebar to the user menu
	 *
	 * @param Skin $skin
	 * @return bool
	 */
	public function shouldMoveDonateLink( $skin ): bool {
		$config = $skin->getConfig();
		$user = $skin->getUser();

		if (
			$skin->getSkinName() === 'vector-2022' &&
			$config->get( 'WikimediaMessagesAnonDonateLink' ) &&
			$user->isAnon()
		) {
			return true;
		}
		return false;
	}

	/**
	 * Add a donate link to the user links menu for anonymous users on vector '22, if feature flag is turned on
	 *
	 * @param SkinTemplate $skin
	 * @param array &$links
	 */
	public function onSkinTemplateNavigation__Universal( $skin, &$links ): void {
		$context = $skin->getContext();
		if ( $this->shouldMoveDonateLink( $skin ) ) {
			$sitesupport = [ 'sitesupport' => [
				'text' => $context->msg( 'sitesupport' )->text(),
				'href' => $context->msg( 'sitesupport-url' )->text(),
				'title' => $context->msg( 'tooltip-n-sitesupport' )->text(),
			] ];
			// Ensure donate link goes before other links
			if ( array_key_exists( 'user-menu', $links ) ) {
				$links['user-menu'] = $sitesupport + $links['user-menu'];
			}
		}
	}

	/**
	 * Remove the donate link for anonymous users on vector '22, if the feature flag is turned on
	 *
	 * @param Skin $skin
	 * @param array &$sidebar
	 */
	public function onSidebarBeforeOutput( $skin, &$sidebar ): void {
		// we want to be sure we're only removing this link if it's going to appear elsewhere
		if ( $this->shouldMoveDonateLink( $skin ) ) {
			// the donate link is not guaranteed to be in a particular section, so we must traverse them all
			foreach ( $sidebar as $section => $links ) {
				// every other array length is bounded by practicality, but skip looping over language for peformance
				if ( $section === 'LANGUAGES' ) {
					continue;
				}

				foreach ( $links as $index => $link ) {
					if ( isset( $link['id'] ) && $link['id'] === 'n-sitesupport' ) {
						unset( $sidebar[$section][$index] );
					}
				}
			}
		}
	}
}
