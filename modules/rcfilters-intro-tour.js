( function ( mw, gt ) {
	var tour = new gt.TourBuilder( {
			name: 'RcFiltersIntro',
			shouldLog: true,
			isSinglePage: true
		} );

	tour.firstStep( {
		name: 'Welcome',
		titlemsg: 'eri-rcfilters-tour-intro-welcome-title',
		description: mw.msg(
			mw.config.get( 'wgRCFiltersORESAvailable' ) ?
				'eri-rcfilters-tour-intro-welcome-description' :
				'eri-rcfilters-tour-intro-welcome-no-ores-description',
			$('<span>').append(
				$( '<a>' )
					.addClass( 'mw-rcfilters-tour-helplink external' )
					.text( mw.msg( 'eri-rcfilters-tour-help' ) )
					.attr( 'target', '_blank' )
					.attr( 'href', 'https://www.mediawiki.org/wiki/Special:MyLanguage/Edit_Review_Improvements/New_filters_for_edit_review' )
			).html()
		),
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
