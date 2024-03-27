<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */
namespace MediaWiki\Extension\WikimediaMessages;

use MediaWiki\ResourceLoader\Context;
use MediaWiki\ResourceLoader\FileModule;
use MediaWiki\ResourceLoader\FilePath;

/**
 * This style module aids Wikimedia projects in helping them make their content
 * friendly for mobile devices and friendly to night mode.
 *
 * While helpful for projects which do not have the capacity to update the many templates
 * and site scripts and styles on their projects, we recognize that projects where there
 * are lots of admins, may prefer to opt out of some of these styles.
 *
 * It can be configured using the configuration variable $wgWikimediaStylesFeatures
 * by site admins
 *
 * It works similar to the ResourceLoader//SkinModule.
 *
 * @ingroup ResourceLoader
 * @internal
 */
class SiteAdminHelperModule extends FileModule {

	/**
	 * Every skin should define which features it would like to reuse for core inside a
	 * ResourceLoader module that has set the class to SkinModule.
	 * For a feature to be valid it must be listed here along with the associated resources
	 *
	 * The following features are available.
	 * Admins can opt out by using MediaWiki:wikimedia-styles-exclude.
	 */
	private const FEATURE_FILES = [
		'ambox' => [ 'ambox.less' ],
		'infobox' => [ 'infobox.less' ],
		'hatnote' => [ 'hatnote.less' ],
		'navbox' => [ 'navbox.less' ],
		'theme-night' => [ 'theme-night.less' ],
		'theme-night-mainpage' => [ 'theme-night-mainpage.less' ],
	];

	/**
	 * Get styles defined in the module definition, plus any enabled feature styles.
	 *
	 * @param Context $context
	 * @return string[][]
	 */
	public function getStyleFiles( Context $context ) {
		$config = $this->getConfig();
		$excludeFeatures = explode( '|', $context->msg( 'wikimedia-styles-exclude' ) );

		$featureFilePaths = [];

		foreach ( self::FEATURE_FILES as $feature => $featureFiles ) {
			if ( !in_array( $feature, $excludeFeatures ) ) {
				foreach ( $featureFiles as $filepath ) {
					$featureFilePaths['all'][] = new FilePath( $filepath );
				}
			}
		}

		return $featureFilePaths;
	}
}
