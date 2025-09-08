<?php

namespace MediaWiki\Extension\WikimediaMessages\Tests\Unit;

use MediaWiki\Config\HashConfig;
use MediaWiki\Extension\WikimediaMessages\Hooks;
use MediaWiki\Output\OutputPage;
use MediaWiki\Skin\Skin;
use MediaWiki\Tests\Unit\MockServiceDependenciesTrait;
use MediaWiki\Title\Title;
use MediaWikiUnitTestCase;

/**
 * @covers \MediaWiki\Extension\WikimediaMessages\Hooks
 */
class HooksTest extends MediaWikiUnitTestCase {

	use MockServiceDependenciesTrait;

	/** @dataProvider provideOnOutputPageBeforeHTML */
	public function testOnOutputPageBeforeHTML( $wikimediaStyleSkins, $currentSkin, $expectedModuleStyles ) {
		/** @var Hooks $hooks */
		$hooks = $this->newServiceInstance( Hooks::class, [
			'mobileContext' => null,
			'experimentManager' => null
		] );
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
		$out->method( 'getSkin' )
			->willReturn( $skin );
		$html = '';
		// Call ::onOutputPageBeforeHTML with the mocks we just created.
		$hooks->onOutputPageBeforeHTML( $out, $html );
	}

	public static function provideOnOutputPageBeforeHTML() {
		return [
			'No skins are defined in config' => [ [], 'vector', [] ],
			'Skin is not included in config' => [ [ 'vector' ], 'monobook', [] ],
			'Skin is included in config' => [ [ 'vector' ], 'vector', [ 'ext.wikimediamessages.styles' ] ],
		];
	}

	public function testOnSkinCopyrightFooterMessageForHistoryType() {
		// Calls ::onSkinCopyrightFooterMessage with the $type argument as history and expect that it just returns
		// without doing anything else. This is checked by ensuring the $msg provided by reference is not modified.
		/** @var Hooks $hooks */
		$hooks = $this->newServiceInstance( Hooks::class, [
			'mobileContext' => null,
			'experimentManager' => null
		] );
		$msg = $origMsg = $this->getMockMessage( 'msg' );
		$hooks->onSkinCopyrightFooterMessage( $this->createMock( Title::class ), 'history', $msg );
		$this->assertEquals( $origMsg, $msg );
	}
}
