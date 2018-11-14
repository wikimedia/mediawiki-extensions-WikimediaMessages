( function () {
	var tour = new mw.guidedTour.TourBuilder( {
		name: 'WlFiltersIntro',
		shouldLog: true,
		isSinglePage: true
	} );

	tour.firstStep( {
		name: 'Welcome',
		titlemsg: 'eri-wlfilters-tour-intro-welcome-title',
		description: mw.msg(
			mw.config.get( 'wgRCFiltersORESAvailable' ) ?
				'eri-rcfilters-tour-intro-welcome-description' :
				'eri-rcfilters-tour-intro-welcome-no-ores-description',
			$( '<span>' ).append(
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
			new mw.Api().saveOption( 'wlenhancedfilters-seen-tour', 1 );
		}
	} ).next( 'Preferences' );

	tour.step( {
		name: 'Preferences',
		descriptionmsg: 'eri-wlfilters-tour-intro-preferences-description',
		allowAutomaticOkay: false,
		position: 'bottom',
		attachTo: '#pt-preferences a',
		buttons: [
			{
				namemsg: 'eri-rcfilters-tour-intro-welcome-button',
				action: 'end'
			},

			// GuidedTour doesn't allow us to have both an 'end' and an 'okay' action, so make this
			// button a fake externalLink instead
			{
				namemsg: 'eri-rcfilters-tour-intro-disable-button',
				type: 'neutral',
				action: 'externalLink',
				onclick: function () {
					$( this ).closest( '.guider' ).addClass( 'oo-ui-pendingElement-pending' );
					new mw.Api().saveOption( 'wlenhancedfilters-disable', 1 ).then( function () {
						window.location.reload();
					} );
				},
				// eslint-disable-next-line no-script-url
				url: 'javascript:void(0)'
			}
		]
	} );

}() );
