( function ( mw, gt ) {
	var tour = new gt.TourBuilder( {
			name: 'RcFiltersBeta',
			shouldLog: true,
			isSinglePage: true
		} );

	tour.firstStep( {
		name: 'Welcome',
		titlemsg: 'eri-rcfilters-tour-welcome-title',
		descriptionmsg: 'eri-rcfilters-tour-welcome-description',
		autoFocus: true,
		allowAutomaticOkay: false,
		buttons: [
			{
				namemsg: 'eri-rcfilters-tour-welcome-button',
				onclick: function () {
					gt.endTour();
				}
			}
		],
		onHide: function () {
			new mw.Api().saveOption( 'rcenhancedfilters-seen-tour', 1 );
		}
	} );

}( mediaWiki, mediaWiki.guidedTour ) );
