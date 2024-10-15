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

	public function provideShouldMoveDonateLink() {
		return [
			[ false, 1, 'vector', false ],
			[ false, 0, 'vector', false ],
			[ true, 1, 'vector', false ],
			[ true, 0, 'vector', false ],
			[ false, 1, 'vector-2022', false ],
			[ false, 0, 'vector-2022', false ],
			[ true, 1, 'vector-2022', false ],
			[ true, 0, 'vector-2022', true ]
		];
	}

	/**
	 * Tests the cases where we do not want to add the donate link to the user menu
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\Hooks::shouldMoveDonateLink
	 * @dataProvider provideShouldMoveDonateLink
	 * @param bool $featureFlag whether the flag is on or off
	 * @param int $userId user ID to pass in - functionally whether the user is anon or not
	 * @param string $skinName name of skin, as this is only for vector '22
	 * @param bool $expected result of shouldMoveDonateLink
	 */
	public function testShouldMoveDonateLink( $featureFlag, $userId, $skinName, $expected ) {
		$hooks = $this->newWikimediaMessagesHooks();

		$this->overrideConfigValues( [ 'WikimediaMessagesAnonDonateLink' => $featureFlag ] );

		$user = \User::newFromId( $userId );
		RequestContext::getMain()->setUser( $user );

		$skin = $this->getServiceContainer()->getSkinFactory()->makeSkin( $skinName );

		$this->assertSame( $expected, $hooks->shouldMoveDonateLink( $skin ) );
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
		$links = [ 'user-menu' => [] ];

		$hooks->onSkinTemplateNavigation__Universal( $skin, $links );

		$this->assertArrayHasKey( 'user-menu', $links );
		$this->assertArrayHasKey( 'sitesupport', $links['user-menu'] );
	}

	/**
	 * Make sure we're not adding the donate link to the user page unless the user is logged out
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\Hooks::onSkinTemplateNavigation__Universal
	 */
	public function testOnSkinTemplateNavigation__UniversalNotApplicable() {
		$hooks = $this->newWikimediaMessagesHooks();

		$this->overrideConfigValues( [ 'WikimediaMessagesAnonDonateLink' => true ] );

		$user = \User::newFromId( 1 );
		RequestContext::getMain()->setUser( $user );

		$skin = $this->getServiceContainer()->getSkinFactory()->makeSkin( 'vector-2022' );
		$links = [];

		$hooks->onSkinTemplateNavigation__Universal( $skin, $links );

		$this->assertSame( [], $links );
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
		$links = [ 'user-menu' => [] ];

		$hooks->onSkinTemplateNavigation__Universal( $skin, $links );

		$donateLink = $links['user-menu']['sitesupport'];

		$this->assertArrayHasKey( 'text', $donateLink );
		$this->assertSame( $donateLink['text'], RequestContext::getMain()->msg( 'sitesupport' )->text() );
		$this->assertArrayHasKey( 'href', $donateLink );
		$this->assertSame( $donateLink['href'], RequestContext::getMain()->msg( 'sitesupport-url' )->text() );
		$this->assertArrayHasKey( 'title', $donateLink );
		$this->assertSame( $donateLink['title'], RequestContext::getMain()->msg( 'tooltip-n-sitesupport' )->text() );
	}

	/**
	 * Tests the cases where the sidebar should keep the donate link, to make sure we don't remove it unintentionally
	 *
	 * @dataProvider provideShouldMoveDonateLink
	 * @param bool $featureFlag whether the flag is on or off
	 * @param int $userId user ID to pass in - functionally whether the user is anon or not
	 * @param string $skinName name of skin, as this is only for vector '22
	 * @param bool $expected result of shouldMoveDonateLink
	 */
	public function testOnSidebarBeforeOutputConditions( $featureFlag, $userId, $skinName, $expected ) {
		$this->overrideConfigValues( [ 'WikimediaMessagesAnonDonateLink' => $featureFlag ] );
		$user = \User::newFromId( $userId );
		RequestContext::getMain()->setUser( $user );
		$skin = $this->getServiceContainer()->getSkinFactory()->makeSkin( $skinName );

		$hooks = $this->newWikimediaMessagesHooks();

		$sidebar = [ 'test section' => [ [ 'id' => 'n-sitesupport' ] ] ];
		$unchangedSidebar = $sidebar;
		$changedSidebar = [ 'test section' => [] ];

		$hooks->onSidebarBeforeOutput( $skin, $sidebar );

		if ( $expected ) {
			$this->assertSame( $sidebar, $changedSidebar );
		} else {
			$this->assertSame( $sidebar, $unchangedSidebar );
		}
	}

	/**
	 * Tests to make sure we're skipping the LANGUAGES section, as it could potentially be a long array to loop over
	 */
	public function testOnSidebarBeforeOutputSkipLanguages() {
		$this->overrideConfigValues( [ 'WikimediaMessagesAnonDonateLink' => true ] );

		$hooks = $this->newWikimediaMessagesHooks();
		$skin = $this->getServiceContainer()->getSkinFactory()->makeSkin( 'vector-2022' );

		$sidebar = [ 'LANGUAGES' => [ [ 'id' => 'n-sitesupport' ] ], 'section' => [ [ 'id' => 'n-sitesupport' ] ] ];
		$expected = [ 'LANGUAGES' => [ [ 'id' => 'n-sitesupport' ] ], 'section' => [] ];

		$hooks->onSidebarBeforeOutput( $skin, $sidebar );

		$this->assertSame( $expected, $sidebar );
	}

	public function provideOnSidebarBeforeOutput() {
		$baseSidebar = [
			'test section 1' => [ [ 'id' => 0 ], [ 'id' => 1 ] ],
			'test section 2' => [ [ 'id' => 2 ] ]
		];

		$firstSection = $baseSidebar;
		$firstSection['test section 1'][] = [ 'id' => 'n-sitesupport' ];

		$secondSection = $baseSidebar;
		$secondSection['test section 2'][] = [ 'id' => 'n-sitesupport' ];

		return [
			[ $baseSidebar, $baseSidebar ],
			[ $firstSection, $baseSidebar ],
			[ $secondSection, $baseSidebar ],
		];
	}

	/**
	 * Tests the basic functionality of removing the donate link, making sure we are checking all sections
	 *
	 * @dataProvider provideOnSidebarBeforeOutput
	 * @param array $sidebar - the test sidebar, which may contain a donate link
	 * @param array $expected - the expected sidebar, without the donate link
	 */
	public function testOnSidebarBeforeOutput( $sidebar, $expected ) {
		$this->overrideConfigValues( [ 'WikimediaMessagesAnonDonateLink' => true ] );

		$hooks = $this->newWikimediaMessagesHooks();
		$skin = $this->getServiceContainer()->getSkinFactory()->makeSkin( 'vector-2022' );

		$hooks->onSidebarBeforeOutput( $skin, $sidebar );

		$this->assertSame( $expected, $sidebar );
	}
}
