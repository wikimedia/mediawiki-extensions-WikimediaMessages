<?php

namespace MediaWiki\Extension\WikimediaMessages\Tests\Integration;

use MediaWiki\Extension\WikimediaMessages\Hooks;
use MediaWikiIntegrationTestCase;
use RequestContext;

/**
 * @covers MediaWiki\Extension\WikimediaMessages\Hooks
 */
class HooksTest extends MediaWikiIntegrationTestCase {
	/**
	 * helper function to initialize Hooks object
	 *
	 * @return Hooks
	 */
	private function newWikimediaMessagesHooks() {
		$services = $this->getServiceContainer();

		return Hooks::factory(
			$services->getLinkRenderer(),
			$services->getMainConfig(),
			$services->getPermissionManager(),
			$services->getUserOptionsLookup(),
		);
	}

	public function provideOnSkinTemplateNavigation__UniversalNotApplicable() {
		return [
			[ false, 1, 'vector' ],
			[ false, 0, 'vector-2022' ],
			[ true, 1, 'vector-2022' ],
			[ true, 0, 'vector' ],
		];
	}

	/**
	 * Tests the cases where we do not want to add the donate link to the user menu
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\Hooks::onSkinTemplateNavigation__Universal
	 * @dataProvider provideOnSkinTemplateNavigation__UniversalNotApplicable
	 * @param bool $featureFlag whether the flag is on or off
	 * @param int $userId user ID to pass in - functionally whether the user is anon or not
	 * @param string $skinName name of skin, as this is only for vector '22
	 */
	public function testOnSkinTemplateNavigation__UniversalNotApplicable( $featureFlag, $userId, $skinName ) {
		$hooks = $this->newWikimediaMessagesHooks();

		$this->overrideConfigValues( [ 'WikimediaMessagesAnonDonateLink' => $featureFlag ] );

		$user = \User::newFromId( $userId );
		RequestContext::getMain()->setUser( $user );

		$skin = $this->getServiceContainer()->getSkinFactory()->makeSkin( $skinName );
		$links = [];

		$hooks->onSkinTemplateNavigation__Universal( $skin, $links );

		$this->assertSame( [], $links );
	}

	/**
	 * Tests the cases where we _do_ want to add the donate link to the user menu
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\Hooks::onSkinTemplateNavigation__Universal
	 */
	public function testOnSkinTemplateNavigation__Universal() {
		$hooks = $this->newWikimediaMessagesHooks();

		$this->overrideConfigValues( [ 'WikimediaMessagesAnonDonateLink' => true ] );

		$skin = $this->getServiceContainer()->getSkinFactory()->makeSkin( 'vector-2022' );
		$links = [];

		$hooks->onSkinTemplateNavigation__Universal( $skin, $links );

		$this->assertArrayHasKey( 'user-page', $links );
		$this->assertArrayHasKey( 'sitesupport', $links['user-page'] );
	}

	/**
	 * Tests the attributes of the donate link to ensure we're correctly using messages
	 *
	 * Note: it would be great if this could do more to test the localization aspect,
	 * but I wasn't able to figure out an easy way to do so
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\Hooks::onSkinTemplateNavigation__Universal
	 */
	public function testOnSkinTemplateNavigation__UniversalAttributes() {
		$hooks = $this->newWikimediaMessagesHooks();

		$this->overrideConfigValues( [ 'WikimediaMessagesAnonDonateLink' => true ] );

		$skin = $this->getServiceContainer()->getSkinFactory()->makeSkin( 'vector-2022' );
		$links = [];

		$hooks->onSkinTemplateNavigation__Universal( $skin, $links );

		$donateLink = $links['user-page']['sitesupport'];

		$this->assertArrayHasKey( 'text', $donateLink );
		$this->assertSame( $donateLink['text'], RequestContext::getMain()->msg( 'sitesupport' )->text() );
		$this->assertArrayHasKey( 'href', $donateLink );
		$this->assertSame( $donateLink['href'], RequestContext::getMain()->msg( 'sitesupport-url' )->text() );
		$this->assertArrayHasKey( 'title', $donateLink );
		$this->assertSame( $donateLink['title'], RequestContext::getMain()->msg( 'tooltip-n-sitesupport' )->text() );
	}
}
