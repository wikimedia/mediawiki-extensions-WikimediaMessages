<?php

namespace MediaWiki\Extension\WikimediaMessages\Maintenance;

use MediaWiki\Maintenance\Maintenance;
use MediaWiki\Notification\Notification;
use MediaWiki\Notification\RecipientSet;
use MediaWiki\WikiMap\WikiMap;

class Send2FAWarningNotifications extends Maintenance {

	public function __construct() {
		parent::__construct();
		$this->requireExtension( 'WikimediaMessages' );
		$this->addDescription( 'Send notifications about mandatory 2FA to users (read from stdin)' );
		$this->addOption( 'deadline', 'Deadline for 2FA compliance in YYYYMMDD format', true, true );
		$this->addOption( 'input-file', 'Name of file with users to notify. If absent, use stdin', false, true );
		$this->setBatchSize( 100 );
	}

	public function execute() {
		$services = $this->getServiceContainer();
		$userIdentityLookup = $services->getUserIdentityLookup();
		$notifications = $services->getNotificationService();

		$deadline = $this->getOption( 'deadline' );
		if ( !preg_match( '/^\d{8}$/', $deadline ) ) {
			$this->error( "Invalid deadline format, expected YYYYMMDD: $deadline" );
			return;
		}
		// Notifications expect a timestamp, so append time to the date and convert to timestamp
		$deadline .= '000000';

		if ( $this->hasOption( 'input-file' ) ) {
			$fileName = $this->getOption( 'input-file' );
			if ( !file_exists( $fileName ) || !is_readable( $fileName ) ) {
				$this->error( "Input file does not exist or is not readable: $fileName" );
				return;
			}
			$text = file_get_contents( $fileName );
		} else {
			$text = $this->getStdin( Maintenance::STDIN_ALL );
		}
		$success = 0;
		foreach ( explode( "\n", $text ) as $i => $userName ) {
			$userName = trim( $userName );
			if ( $userName === '' ) {
				continue;
			}
			if ( str_contains( $userName, '@' ) ) {
				[ $userName, $wikiId ] = explode( '@', $userName, 2 );
				$userName = trim( $userName );
				$wikiId = trim( $wikiId );
				if ( !WikiMap::isCurrentWikiId( $wikiId ) ) {
					continue;
				}
			}
			$userIdentity = $userIdentityLookup->getUserIdentityByName( $userName );
			if ( !$userIdentity ) {
				$this->error( ( $i + 1 ) . ": User is invalid or not registered: $userName" );
				continue;
			}
			$notifications->notify(
				new Notification( '2fa-warning', [ 'deadline' => $deadline ] ),
				new RecipientSet( $userIdentity )
			);
			$this->output( ( $i + 1 ) . ": $userName\n" );
			$success++;
			if ( $success % $this->getBatchSize() === 0 ) {
				$this->waitForReplication();
			}
		}

		$this->output( "Notified $success users.\n" );
	}
}

$maintClass = Send2FAWarningNotifications::class;
