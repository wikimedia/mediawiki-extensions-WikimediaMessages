/*!
 * Guided tour for highlight feature
 */
( function () {
	var tour = new mw.guidedTour.TourBuilder( {
		name: 'RcFiltersHighlight',
		shouldLog: true,
		isSinglePage: true
	} );

	tour.firstStep( {
		name: 'Highlight',
		titlemsg: 'eri-rcfilters-tour-highlight-title',
		description: mw.message( 'eri-rcfilters-tour-highlight-description' ).text(),
		autoFocus: true,
		allowAutomaticOkay: false,
		attachTo: '.mw-rcfilters-ui-filtersListWidget-hightlightButton',
		width: 250,
		position: 'right',
		buttons: [
			{
				namemsg: 'eri-rcfilters-tour-highlight-button',
				onclick: function () {
					mw.guidedTour.endTour();
				}
			}
		],
		onShow: function () {
			// Put the guider inside the overlay to prevent
			// it's close button from closing the rc filters popup
			var $overlay = $( '.mw-rcfilters-ui-overlay' ),
				$guider = $( '.mw-guidedtour-tour-RcFiltersHighlight' );
			$overlay.append( $guider );
		}
	} );
}() );
