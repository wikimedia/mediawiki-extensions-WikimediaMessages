( function () {
	var tour,
		isVectorCompactPersonalToolbar = $( '.vector-user-links' ).length;

	tour = new mw.guidedTour.TourBuilder( {
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
			new mw.Api().saveOption( 'rcenhancedfilters-seen-tour', 1 );
		}
	} ).next( 'Preferences' );

	tour.step( {
		name: 'Preferences',
		descriptionmsg: 'eri-rcfilters-tour-intro-preferences-description',
		allowAutomaticOkay: false,
		// In compact personal toolbar mode, preferences are within a dropdown, and
		// that dropdown is close to the viewport edge so the guider wouldn't fit.
		// Use diagonal guider positioning, and an offset because the default placement
		// for diagonal positioning is poor. Also a vertical offset because the compact
		// toolbar has more whitespace.
		position: isVectorCompactPersonalToolbar ? 'bottomRight' : 'bottom',
		attachTo: isVectorCompactPersonalToolbar ? '#p-personal' : '#pt-preferences a',
		offset: isVectorCompactPersonalToolbar ? {
			top: -10,
			left: 8
		} : undefined
	} );

}() );
