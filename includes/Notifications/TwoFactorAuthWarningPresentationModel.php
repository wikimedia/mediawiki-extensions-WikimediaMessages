<?php

namespace MediaWiki\Extension\WikimediaMessages\Notifications;

use MediaWiki\Extension\Notifications\Formatters\EchoEventPresentationModel;
use MediaWiki\SpecialPage\SpecialPage;

class TwoFactorAuthWarningPresentationModel extends EchoEventPresentationModel {

	/** @inheritDoc */
	public function getIconType() {
		return 'key-warning';
	}

	/** @inheritDoc */
	public function getPrimaryLink() {
		return [
			'url' => SpecialPage::getTitleFor( 'OATHManage' )->getLocalURL(),
			'label' => $this->msg( 'wikimedia-2fa-notification-action' )->text()
		];
	}

	/** @inheritDoc */
	public function getSecondaryLinks() {
		$links = [];

		$links[] = [
			// @phpcs:ignore Generic.Files.LineLength.TooLong
			'url' => 'https://meta.wikimedia.org/wiki/Special:MyLanguage/Mandatory_two-factor_authentication_for_users_with_some_extended_rights',
			'label' => $this->msg( 'wikimedia-2fa-notification-info' )->text(),
			'icon' => 'info',
		];
		return $links;
	}

	/** @inheritDoc */
	public function getHeaderMessage() {
		return $this->msg( 'wikimedia-2fa-notification-header' );
	}

	/** @inheritDoc */
	public function getBodyMessage() {
		$date = $this->event->getExtraParam( 'deadline' );
		if ( !$date ) {
			return false;
		}
		return $this->msg( 'wikimedia-2fa-notification-body' )
			->dateParams( $date );
	}

}
