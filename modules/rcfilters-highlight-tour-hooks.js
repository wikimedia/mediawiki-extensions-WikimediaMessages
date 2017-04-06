/*!
 * Monitor opening of the rcfilters popup and show Highlight Guided Tour or hint (blue dot) as needed
 */
( function ( mw, gt ) {
	var pulsatingDotVisible = false,
		initial = 5,
		recurring = 3,
		saveOption = function ( name, value ) {
			mw.user.options.set( name, value );
			new mw.Api().saveOption( name, value );
		},
		showDot = function () {
			var position,
				$highlightButton,
				$container = $( '.rcfilters-tour-highlight-dot-container' );

			if ( !$container.length ) {
				$container = $( '<div>' )
					.addClass( 'rcfilters-tour-highlight-dot-container' )
					.append(
						$( '<div>' ).addClass( 'rcfilters-tour-highlight-pulsatingDot' ),
						$( '<div>' ).addClass( 'rcfilters-tour-highlight-stillDot' )
					);

				$highlightButton = $( '.mw-rcfilters-ui-filtersListWidget-hightlightButton a' );
				position = $highlightButton.position();

				$( '.mw-rcfilters-ui-filterWrapperWidget-popup .oo-ui-popupWidget-body' )
					.append( $container );

				// Position
				$container.css( {
					left: position.left + ( $highlightButton.outerWidth() / 2 ),
					top: position.top + $highlightButton.outerHeight()
				} );
			}

			$container.show();
		},
		hideDot = function () {
			$( '.rcfilters-tour-highlight-dot-container' )
				.hide();
		};

	mw.hook( 'RcFilters.popup.open' ).add( function ( selectedFilterName ) {
		var seenCounter;

		if ( mw.user.isAnon() ) {
			return;
		}

		if ( mw.user.options.get( 'rcenhancedfilters-tried-highlight' ) ) {
			return;
		}

		if ( selectedFilterName ) {
			// There's a selected filter so the highlight button is probably not visible
			return;
		}

		seenCounter = Number( mw.user.options.get( 'rcenhancedfilters-seen-highlight-button-counter' ) );
		if (
			( seenCounter === initial ) ||
			( seenCounter > initial && ( ( seenCounter - initial ) % recurring === 0 ) )
		) {
			showDot();
			pulsatingDotVisible = true;
		} else {
			hideDot();
			pulsatingDotVisible = false;
		}

		seenCounter++;
		saveOption( 'rcenhancedfilters-seen-highlight-button-counter', seenCounter );
	} );

	mw.hook( 'RcFilters.highlight.enable' ).add( function () {
		if ( pulsatingDotVisible ) {
			gt.launchTour( 'RcFiltersHighlight' );
			pulsatingDotVisible = false;
			hideDot();
		}

		if ( !mw.user.options.get( 'rcenhancedfilters-tried-highlight' ) ) {
			saveOption( 'rcenhancedfilters-tried-highlight', 1 );
		}
	} );

}( mediaWiki, mediaWiki.guidedTour, jQuery ) );
