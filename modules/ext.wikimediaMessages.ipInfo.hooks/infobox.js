/*!
 * Add feedback link to IPInfo
 */
( function () {
	mw.hook( 'ext.ipinfo.infobox.widget' ).add( function ( $info ) {
		var contributionsUrl = mw.msg( 'ipinfo-global-contributions-url', mw.config.get( 'wgRelevantUserName' ) );
		var xToolsUrl = mw.msg( 'ipinfo-xtools-url', mw.config.get( 'wgRelevantUserName' ), mw.config.get( 'wgServerName' ) );

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
