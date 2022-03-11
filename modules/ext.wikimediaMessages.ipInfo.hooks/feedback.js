/*!
 * Add feedback link to IPInfo
 */
( function () {
	mw.hook( 'ext.ipinfo.infobox.widget' ).add( function ( $info ) {
		var feedbackButton = new OO.ui.ButtonWidget( {
			href: 'https://meta.wikimedia.org/wiki/IP_Editing:_Privacy_Enhancement_and_Abuse_Mitigation/IP_Info_feature/Feedback?action=edit&section=new&preload=Special:MyLanguage/Template:IPInfoFeedback',
			label: mw.msg( 'ipinfo-feedback-button-label' ),
			icon: 'feedback',
			classes: [ 'ext-ipinfo-feedback-button' ]
		} );
		$info.find( '.ext-ipinfo-widget-property-source' ).before( feedbackButton.$element );
	} );
}() );
