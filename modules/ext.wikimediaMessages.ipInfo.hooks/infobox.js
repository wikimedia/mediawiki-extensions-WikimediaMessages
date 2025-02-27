/*!
 * Add community user tool links to IPInfo's infobox widget
 */
( function () {
	mw.hook( 'ext.ipinfo.infobox.widget' ).add( ( $info ) => {
		const contributionsUrl = mw.msg( 'ipinfo-global-contributions-url', mw.config.get( 'wgRelevantUserName' ) );
		const xToolsUrl = mw.msg( 'ipinfo-xtools-url', mw.config.get( 'wgRelevantUserName' ), mw.config.get( 'wgServerName' ) );

		$info.find( '[data-property="edits"]' )
			.append( $( '<div>' )
				.addClass( 'ext-ipinfo-contribution-links' )
				.append( $( '<a>' )
					.attr( 'href', contributionsUrl )
					.text( mw.msg( 'ipinfo-global-contributions-url-label' ) ) ) );
		$info.find( '[data-property="edits"]' )
			.append( $( '<div>' )
				.addClass( 'ext-ipinfo-contribution-links' )
				.append( $( '<a>' )
					.attr( 'href', xToolsUrl )
					.text( mw.msg( 'ipinfo-xtools-url-label' ) ) ) );
	} );

}() );
