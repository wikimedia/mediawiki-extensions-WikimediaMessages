/*!
 * Monitor opening of the rcfilters popup and show Highlight Guided Tour or hint (blue dot) as
 * needed.
 */
( function () {
	var pulsatingDotVisible = false,
		initial = 5,
		recurring = 3,
		saveOption = function ( name, value ) {
			mw.user.options.set( name, value );
			new mw.Api().saveOption( name, value );
		},
		showDot = function () {
			var $highlightButton = $( '.mw-rcfilters-ui-filterMenuHeaderWidget-hightlightButton a' ),
				$container = $( '.rcfilters-tour-highlight-dot-container' );

			if ( !$container.length ) {
				$highlightButton
					.addClass( 'rcfilters-tour-highlight-dot-container' )
					.append(
						$( '<div>' ).addClass( 'rcfilters-tour-highlight-dot rcfilters-tour-highlight-pulsatingDot' ),
						$( '<div>' ).addClass( 'rcfilters-tour-highlight-dot rcfilters-tour-highlight-stillDot' )
					);
			}

			$( '.rcfilters-tour-highlight-dot' ).show();
		},
		hideDot = function () {
			$( '.rcfilters-tour-highlight-dot' )
				.hide();
		};

	mw.hook( 'RcFilters.popup.open' ).add( function () {
		var seenCounter;

		if ( mw.user.isAnon() ) {
			return;
		}

		if ( mw.user.options.get( 'rcenhancedfilters-tried-highlight' ) ) {
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
			mw.guidedTour.launchTour( 'RcFiltersHighlight' );
			pulsatingDotVisible = false;
			hideDot();
		}

		if ( !mw.user.options.get( 'rcenhancedfilters-tried-highlight' ) ) {
			saveOption( 'rcenhancedfilters-tried-highlight', 1 );
		}
	} );

}() );
