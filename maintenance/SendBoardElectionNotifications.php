<?php

namespace MediaWiki\Extension\WikimediaMessages\Maintenance;

use MediaWiki\Maintenance\Maintenance;
use MediaWiki\Notification\Notification;
use MediaWiki\Notification\RecipientSet;

class SendBoardElectionNotifications extends Maintenance {

	public function __construct() {
		parent::__construct();
		$this->requireExtension( 'WikimediaMessages' );
		$this->addDescription( 'Send board election notifications to users (read from stdin)' );
		$this->setBatchSize( 100 );
	}

	public function execute() {
		$services = $this->getServiceContainer();
		$userFactory = $services->getUserFactory();
		$notifications = $services->getNotificationService();

		$text = $this->getStdin( Maintenance::STDIN_ALL );
		$success = 0;
		foreach ( explode( "\n", $text ) as $i => $userName ) {
			if ( trim( $userName ) === '' ) {
				continue;
			}
			$user = $userFactory->newFromName( $userName );
			if ( !$user ) {
				$this->error( ( $i + 1 ) . ": Invalid username: $userName" );
				continue;
			}
			if ( !$user->isNamed() ) {
				$this->error( ( $i + 1 ) . ": User is not registered: $userName" );
				continue;
			}
			$notifications->notify( new Notification( 'boardelection2025' ), new RecipientSet( $user ) );
			$this->output( ( $i + 1 ) . ": $userName\n" );
			$success++;
			if ( $success % $this->getBatchSize() === 0 ) {
				$this->waitForReplication();
			}
		}

		$this->output( "Notified $success users.\n" );
	}
}

$maintClass = SendBoardElectionNotifications::class;
