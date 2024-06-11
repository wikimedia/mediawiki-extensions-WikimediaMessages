<?php

namespace MediaWiki\Extension\WikimediaMessages\Tests\Unit;

use MediaWiki\Config\HashConfig;
use MediaWiki\Extension\WikimediaMessages\Hooks;
use MediaWiki\Output\OutputPage;
use MediaWiki\Tests\Unit\MockServiceDependenciesTrait;
use MediaWiki\Title\Title;
use MediaWikiUnitTestCase;
use Skin;

/**
 * @covers \MediaWiki\Extension\WikimediaMessages\Hooks
 */
class HooksTest extends MediaWikiUnitTestCase {

	use MockServiceDependenciesTrait;

	/** @dataProvider provideOnBeforePageDisplay */
	public function testOnBeforePageDisplay( $wikimediaStyleSkins, $currentSkin, $expectedModuleStyles ) {
		/** @var Hooks $hooks */
		$hooks = $this->newServiceInstance( Hooks::class, [] );
		// Make Skin::getSkinName return $currentSkin
		$skin = $this->createMock( Skin::class );
		$skin->method( 'getSkinName' )
			->willReturn( $currentSkin );
		// Make OutputPage::getConfig return a HashConfig with wgWikimediaStylesSkins defined.
		$out = $this->createMock( OutputPage::class );
		$out->method( 'getConfig' )
			->willReturn( new HashConfig( [ 'WikimediaStylesSkins' => $wikimediaStyleSkins ] ) );
		// Assert that OutputPage::addModuleStyles is called with $expectedModuleStyles
		$out->expects( $expectedModuleStyles !== [] ? $this->atLeastOnce() : $this->never() )
			->method( 'addModuleStyles' )
			->with( $expectedModuleStyles );
		// Call ::onBeforePageDisplay with the mocks we just created.
		$hooks->onBeforePageDisplay( $out, $skin );
	}

	public static function provideOnBeforePageDisplay() {
		return [
			'No skins are defined in config' => [ [], 'vector', [] ],
			'Skin is not included in config' => [ [ 'vector' ], 'monobook', [] ],
			'Skin is included in config' => [ [ 'vector' ], 'vector', [ 'ext.wikimediamessages.styles' ] ],
		];
	}

	public function testOnSkinCopyrightFooterForHistoryType() {
		// Calls ::onSkinCopyrightFooter with the $type argument as history and expect that it just returns without
		// doing anything else. This is checked by ensuring the $msg and $link provided by reference is not modified.
		/** @var Hooks $hooks */
		$hooks = $this->newServiceInstance( Hooks::class, [] );
		$msg = 'msg';
		$link = 'link';
		$hooks->onSkinCopyrightFooter( $this->createMock( Title::class ), 'history', $msg, $link );
		// Check that the $msg and $link variables provided by reference were not changed.
		$this->assertEquals( 'msg', $msg );
		$this->assertEquals( 'link', $link );
	}
}
