<?php

use OOUI\Theme;
use OOUI\BlankTheme;

class WikimediaMessagesHooksTest extends MediaWikiTestCase {

	/**
	 * @covers WikimediaMessagesHooks::onSpecialPageBeforeFormDisplay
	 */
	public function testOnSpecialPageBeforeFormDisplay() {
		Theme::setSingleton( new BlankTheme() );
		$output = $this->createMock( OutputPage::class );

		// Ensure that the config flag works.
		$config = new HashConfig( [
			'SpecialBlockFeedbackRequest' => false,
		] );

		$form = $this->createMock( HTMLForm::class );
		$form->method( 'getOutput' )
			->willReturn( $output );
		$form->method( 'getConfig' )
			->willReturn( $config );
		$form->expects( $this->never() )
			->method( 'setPreText' );

		WikimediaMessagesHooks::onSpecialPageBeforeFormDisplay( 'Block', $form );

		// Reset the config.
		$config = new HashConfig( [
			'SpecialBlockFeedbackRequest' => true,
		] );

		// Ensure that a Test SpecialPage does not modify the preText.
		$form = $this->createMock( HTMLForm::class );
		$form->method( 'getOutput' )
			->willReturn( $output );
		$form->method( 'getConfig' )
			->willReturn( $config );
		$form->expects( $this->never() )
			->method( 'setPreText' );

		WikimediaMessagesHooks::onSpecialPageBeforeFormDisplay( 'Test', $form );

		// Test setting preText where getPreText does not exist.
		$form = $this->createMock( HTMLForm::class );
		$form->method( 'getOutput' )
			->willReturn( $output );
		$form->method( 'getConfig' )
			->willReturn( $config );
		$form->method( 'msg' )
			->willReturn( $this->createMock( Message::class ) );
		$form->expects( $this->once() )
			->method( 'setPreText' )
			->with( $this->stringStartsWith( '<div class="specialblock-feedback-request">' ) );

		WikimediaMessagesHooks::onSpecialPageBeforeFormDisplay( 'Block', $form );
	}
}
