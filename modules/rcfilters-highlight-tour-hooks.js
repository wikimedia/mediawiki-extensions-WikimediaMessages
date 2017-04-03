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
		highlightButtonSelector = '.mw-rcfilters-ui-filtersListWidget-hightlightButton a',
		showDot = function () {
			$( highlightButtonSelector )
				.addClass( 'rcfilters-tour-highlight-dot-container' )
				.append(
					$( '<div>' ).addClass( 'rcfilters-tour-highlight-pulsatingDot' ),
					$( '<div>' ).addClass( 'rcfilters-tour-highlight-stillDot' )
				);
		},
		hideDot = function () {
			var $button = $( highlightButtonSelector )
				.removeClass( 'rcfilters-tour-highlight-dot-container' );
			$button.find( '.rcfilters-tour-highlight-pulsatingDot, .rcfilters-tour-highlight-stillDot' )
				.remove();
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
