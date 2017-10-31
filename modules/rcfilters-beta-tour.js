( function ( mw, gt ) {
	var tour = new gt.TourBuilder( {
		name: 'RcFiltersBeta',
		shouldLog: true,
		isSinglePage: true
	} );

	tour.firstStep( {
		name: 'Welcome',
		titlemsg: 'eri-rcfilters-tour-welcome-title',
		descriptionmsg: mw.config.get( 'wgRCFiltersORESAvailable' ) ?
			'eri-rcfilters-tour-welcome-description' :
			'eri-rcfilters-tour-welcome-no-ores-description',
		autoFocus: true,
		allowAutomaticOkay: false,
		width: 600,
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
