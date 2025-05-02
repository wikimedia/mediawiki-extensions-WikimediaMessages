<?php

namespace MediaWiki\Extension\WikimediaMessages\Notifications;

use MediaWiki\Extension\Notifications\Formatters\EchoEventPresentationModel;

class BoardElection2025PresentationModel extends EchoEventPresentationModel {

	/**
	 * @inheritDoc
	 */
	public function getIconType() {
		return 'boardelection';
	}

	/**
	 * @inheritDoc
	 */
	public function getPrimaryLink() {
		return [
			// @phpcs:ignore Generic.Files.LineLength.TooLong
			'url' => 'https://meta.wikimedia.org/wiki/Special:MyLanguage/Wikimedia_Foundation_elections/2025/Voter_eligibility_guidelines',
			'label' => $this->msg( 'wikimedia-boardelection-notification-action' )->text()
		];
	}

	/**
	 * @inheritDoc
	 */
	public function getHeaderMessage() {
		return $this->msg( 'wikimedia-boardelection2025-notification-header' );
	}

	/**
	 * @inheritDoc
	 */
	public function getBodyMessage() {
		return $this->msg( 'wikimedia-boardelection2025-notification-body' );
	}

}
