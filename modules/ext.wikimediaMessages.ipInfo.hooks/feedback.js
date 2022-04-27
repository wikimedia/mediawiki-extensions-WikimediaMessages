/*!
 * Add feedback link to IPInfo
 */
( function () {
	mw.hook( 'ext.ipinfo.infobox.widget' ).add( function ( $info ) {

		var feedbackUrl = new URL( 'https://meta.wikimedia.org/wiki/IP_Editing:_Privacy_Enhancement_and_Abuse_Mitigation/IP_Info_feature/Feedback' );
		feedbackUrl.searchParams.set( 'action', 'edit' );
		feedbackUrl.searchParams.set( 'section', 'new' );
		feedbackUrl.searchParams.set( 'preloadtitle', 'Feedback from ' + mw.user.getName() );

		// Use the English translation rather than the source page, to avoid <translate> tags
		feedbackUrl.searchParams.set( 'preload',
			mw.config.get( 'wgPageContentLanguage' ) === 'en' ?
				'Template:IPInfoFeedback/en' :
				'Special:MyLanguage/Template:IPInfoFeedback'
		);

		var feedbackButton = new OO.ui.ButtonWidget( {
			href: feedbackUrl.href,
			label: mw.msg( 'ipinfo-feedback-button-label' ),
			icon: 'feedback',
			classes: [ 'ext-ipinfo-feedback-button', 'ext-ipinfo-widget-property' ]
		} );
		$info.find( '.ext-ipinfo-widget-property-source' ).before( feedbackButton.$element );
	} );
}() );
