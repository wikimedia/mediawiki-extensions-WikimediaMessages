<?php

namespace MediaWiki\Extension\WikimediaMessages\LogFormatter;

use MediaWiki\Logging\LogFormatter;
use Wikimedia\StringUtils\StringUtils;

/**
 * A snapshot of the log formatter from the LiquidThreads
 * extension.
 *
 * @see https://phabricator.wikimedia.org/T89426
 */
class WMLiquidThreadsLogFormatter extends LogFormatter {
	/** @inheritDoc */
	protected function getActionMessage() {
		$action = $this->entry->getSubtype();
		$title = $this->entry->getTarget();
		$parameters = $this->entry->getParameters();

		$msg = "lqt-log-action-$action";

		switch ( $action ) {
			case 'merge':
				if ( $parameters[0] ) {
					$msg = 'lqt-log-action-merge-across';
				} else {
					$msg = 'lqt-log-action-merge-down';
				}
				break;
			case 'move':
				// In LiquidThreads, this adds a link to SpecialMoveThread for user who have
				// the rights. That is removed here, since SpecialMoveThread is unavailable.
				$parameters[] = '';
				break;
			default:
				// Give grep a chance to find the usages:
				// lqt-log-action-move, lqt-log-action-split, lqt-log-action-subjectedit,
				// lqt-log-action-resort, lqt-log-action-signatureedit
				$msg = "lqt-log-action-$action";
				break;
		}

		array_unshift( $parameters, $title->getPrefixedText() );
		$html = wfMessage( $msg, $parameters );

		if ( $this->plaintext ) {
			$html = StringUtils::delimiterReplace( '<', '>', '', $html->inContentLanguage()->parse() );
		} else {
			$html = $html->parse();
		}

		if ( !$this->irctext ) {
			$performer = $this->getPerformerElement();
			$sep = $this->msg( 'word-separator' );
			$sep = $this->plaintext ? $sep->text() : $sep->escaped();
			$html = $performer . $sep . $html;
		}

		return $html;
	}
}
