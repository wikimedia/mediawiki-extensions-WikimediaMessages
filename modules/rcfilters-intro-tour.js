( function ( mw, gt ) {
	var tour = new gt.TourBuilder( {
			name: 'RcFiltersIntro',
			shouldLog: true,
			isSinglePage: true
		} );

	tour.firstStep( {
		name: 'Welcome',
		titlemsg: 'eri-rcfilters-tour-intro-welcome-title',
		descriptionmsg: mw.config.get( 'wgRCFiltersORESAvailable' ) ?
			'eri-rcfilters-tour-intro-welcome-description' :
			'eri-rcfilters-tour-intro-welcome-no-ores-description',
		width: 600,
		buttons: [
			{
				namemsg: 'eri-rcfilters-tour-intro-welcome-button',
				action: 'next'
			}
		],
		onHide: function () {
			new mw.Api().saveOption( 'rcenhancedfilters-seen-tour', 1 );
		},
	} ).next( 'Preferences' );

	tour.step( {
		name: 'Preferences',
		descriptionmsg: 'eri-rcfilters-tour-intro-preferences-description',
		allowAutomaticOkay: false,
		position: 'bottom',
		attachTo: '#pt-preferences a'
	} );

}( mediaWiki, mediaWiki.guidedTour ) );
