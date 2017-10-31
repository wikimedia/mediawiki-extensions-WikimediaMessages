/*!
 * Guided tour for inviting users to try the rcfilters beta feature
 */
( function ( mw, gt ) {
	var tour = new gt.TourBuilder( {
			name: 'RcFiltersInvite',
			shouldLog: true,
			isSinglePage: true
		} ),
		descText = mw.message( 'eri-rcfilters-tour-invite-description' ).text(),
		url = 'https://www.mediawiki.org/wiki/Special:MyLanguage/Edit_Review_Improvements/New_filters_for_edit_review',
		linkLabel = mw.message( 'eri-rcfilters-tour-invite-learnmore-link-label' ).text(),
		inviteDesc = new gt.WikitextDescription(
			descText + '<br />[' + url + ' ' + linkLabel + ']'
		),
		$attachTo = $( '#pt-betafeatures > a' );

	if ( $attachTo.length === 0 ) {
		$attachTo = $( '#pt-preferences > a' );
	}

	tour.firstStep( {
		name: 'Invite',
		titlemsg: 'eri-rcfilters-tour-invite-title',
		description: inviteDesc,
		autoFocus: true,
		allowAutomaticOkay: false,
		attachTo: $attachTo,
		width: 290,
		position: 'bottom',
		onShow: function () {
			var api = new mw.Api();
			api.saveOption( 'rcenhancedfilters-seen-invite', 1 );
		},
		buttons: [
			{
				namemsg: 'eri-rcfilters-tour-invite-no-button',
				type: 'quiet',
				onclick: function () {
					gt.endTour();
				}
			},
			{
				namemsg: 'eri-rcfilters-tour-invite-yes-button',
				onclick: function () {
					var api = new mw.Api();
					api.saveOptions( {
						'rcenhancedfilters': 1, // enable the beta feature
						'rcenhancedfilters-seen-tour': 1, // cancel the other 'welcome' tour
						'rcenhancedfilters-show-invite-confirmation': 1 // show 'Confirm' step
					} ).then( function () {
						location.reload( true );
					} );
				}
			}
		]
	} );

	tour.step( {
		name: 'Confirm',
		titlemsg: 'eri-rcfilters-tour-confirm-title',
		descriptionmsg: 'eri-rcfilters-tour-confirm-description',
		attachTo: $attachTo,
		position: 'bottom',
		onShow: function () {
			var api = new mw.Api();
			api.saveOption( 'rcenhancedfilters-show-invite-confirmation', 0 );

			setTimeout( gt.endTour, 5000 );
		}
	} );
}( mediaWiki, mediaWiki.guidedTour ) );
