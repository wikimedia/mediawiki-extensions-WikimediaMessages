<?php

declare( strict_types = 1 );

namespace MediaWiki\Extension\WikimediaMessages\Tests\Integration;

use MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry;
use MediaWiki\Registration\ExtensionRegistry;
use MediaWikiIntegrationTestCase;

/**
 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry
 */
class ArticleCountryFiltersRegistryTest extends MediaWikiIntegrationTestCase {

	/**
	 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry::getLocalizedRegionsAndCountries
	 */
	public function testGetLocalizedRegionsAndCountries(): void {
		if (
			!ExtensionRegistry::getInstance()->isLoaded( 'cldr' )
			&&
			!ExtensionRegistry::getInstance()->isLoaded( 'CLDR' )
		) {
			self::markTestSkipped( 'cldr extension is required for this test' );
		}

		$result = ArticleCountryFiltersRegistry::getLocalizedRegionsAndCountries( 'fr' );

		$this->assertNotEmpty( $result );

		// Verify all regions have proper structure and localized labels
		foreach ( $result as $region ) {
			$this->assertArrayHasKey( 'id', $region );
			$this->assertArrayHasKey( 'label', $region );
			$this->assertArrayHasKey( 'countries', $region );

			// Region label should be localized (not just the region ID)
			$this->assertNotEquals( $region['id'], $region['label'],
				"Region {$region['id']} should have a localized label" );

			// Verify all countries in this region have proper structure and localized labels
			foreach ( $region['countries'] as $country ) {
				$this->assertArrayHasKey( 'id', $country );
				$this->assertArrayHasKey( 'label', $country );

				// Country ID should be lowercase ISO-A3
				$this->assertMatchesRegularExpression( '/^[a-z]{3}$/', $country['id'],
					"Country ID {$country['id']} should be lowercase 3-letter code" );

				// Country label should be localized (not just the country code)
				$this->assertNotEquals( strtoupper( $country['id'] ), $country['label'],
					"Country {$country['id']} should have a localized label, got: {$country['label']}" );
				$this->assertNotEquals( $country['id'], $country['label'],
					"Country {$country['id']} should have a localized label, got: {$country['label']}" );

				// Label should not be empty
				$this->assertNotEmpty( $country['label'],
					"Country {$country['id']} should have a non-empty localized label" );
			}
		}

		// Verify specific expected values for first region (Africa in French)
		$region = $result[0];
		$this->assertEquals( 'africa', $region['id'] );
		$this->assertEquals( 'Afrique', $region['label'] );
		$this->assertNotEmpty( $region['countries'] );

		// Verify first country (South Africa in French, sorted first alphabetically)
		$country = $region['countries'][0];
		$this->assertEquals( 'zaf', $country['id'] );
		$this->assertEquals( 'Afrique du Sud', $country['label'] );
	}

	/**
	 * Test that all countries in GROUPED_COUNTRY_CODES are present in SUPPORTED_COUNTRY_CODES
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry::getSupportedCountryCodes
	 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry::getGroupedCountryCodes
	 */
	public function testAllGroupedCountriesAreSupported(): void {
		$supportedCodes = ArticleCountryFiltersRegistry::getSupportedCountryCodes();
		$groupedCodes = ArticleCountryFiltersRegistry::getGroupedCountryCodes();

		$unsupportedCodes = [];

		foreach ( $groupedCodes as $region => $regionData ) {
			foreach ( $regionData['countries'] as $a2Code => $a3Code ) {
				if ( !in_array( $a2Code, $supportedCodes, true ) ) {
					$unsupportedCodes[] = "$a2Code (in region: $region)";
				}
			}
		}

		$this->assertSame( [],
			$unsupportedCodes,
			'Found countries in GROUPED_COUNTRY_CODES that are not in SUPPORTED_COUNTRY_CODES: ' .
			implode( ', ', $unsupportedCodes )
		);
	}

	/**
	 * Test that no country appears in multiple regions
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry::getGroupedCountryCodes
	 */
	public function testNoCountryInMultipleRegions(): void {
		$groupedCodes = ArticleCountryFiltersRegistry::getGroupedCountryCodes();

		$seenCountries = [];
		$duplicates = [];

		foreach ( $groupedCodes as $region => $regionData ) {
			foreach ( $regionData['countries'] as $a2Code => $a3Code ) {
				if ( isset( $seenCountries[$a2Code] ) ) {
					$duplicates[] = "$a2Code appears in both {$seenCountries[$a2Code]} and $region";
				} else {
					$seenCountries[$a2Code] = $region;
				}
			}
		}

		$this->assertSame( [],
			$duplicates,
			'Found countries appearing in multiple regions: ' . implode( ', ', $duplicates )
		);
	}

	/**
	 * Test that ISO-A2 to ISO-A3 mappings are valid (basic format check)
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry::getGroupedCountryCodes
	 */
	public function testValidIsoCodeMappings(): void {
		$groupedCodes = ArticleCountryFiltersRegistry::getGroupedCountryCodes();

		$invalidMappings = [];

		foreach ( $groupedCodes as $region => $regionData ) {
			foreach ( $regionData['countries'] as $a2Code => $a3Code ) {
				// ISO-A2 should be exactly 2 uppercase letters
				if ( !preg_match( '/^[A-Z]{2}$/', $a2Code ) ) {
					$invalidMappings[] = "Invalid ISO-A2 code: $a2Code in region $region";
				}

				// ISO-A3 should be exactly 3 uppercase letters
				if ( !preg_match( '/^[A-Z]{3}$/', $a3Code ) ) {
					$invalidMappings[] = "Invalid ISO-A3 code: $a3Code for $a2Code in region $region";
				}
			}
		}

		$this->assertSame( [],
			$invalidMappings,
			'Found invalid ISO code mappings: ' . implode( ', ', $invalidMappings )
		);
	}

	/**
	 * Test that all regions have required structure
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry::getGroupedCountryCodes
	 */
	public function testRegionStructure(): void {
		$groupedCodes = ArticleCountryFiltersRegistry::getGroupedCountryCodes();

		foreach ( $groupedCodes as $regionId => $regionData ) {
			$this->assertIsString( $regionId, "Region ID should be a string" );
			$this->assertArrayHasKey( 'msgKey', $regionData, "Region $regionId missing msgKey" );
			$this->assertArrayHasKey( 'countries', $regionData, "Region $regionId missing countries" );
			$this->assertIsArray( $regionData['countries'], "Countries should be an array for region $regionId" );
			$this->assertNotEmpty( $regionData['countries'], "Region $regionId should have at least one country" );
		}
	}

	/**
	 * Test for orphaned countries (in SUPPORTED_COUNTRY_CODES but not in any region)
	 *
	 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry::getSupportedCountryCodes
	 * @covers MediaWiki\Extension\WikimediaMessages\ArticleCountryFiltersRegistry::getGroupedCountryCodes
	 */
	public function testNoOrphanedCountries(): void {
		$supportedCodes = ArticleCountryFiltersRegistry::getSupportedCountryCodes();
		$groupedCodes = ArticleCountryFiltersRegistry::getGroupedCountryCodes();

		$assignedCountries = [];
		foreach ( $groupedCodes as $regionData ) {
			$assignedCountries = array_merge( $assignedCountries, array_keys( $regionData['countries'] ) );
		}

		$orphanedCountries = array_diff( $supportedCodes, $assignedCountries );

		$this->assertSame( [],
			$orphanedCountries,
			'Found countries in SUPPORTED_COUNTRY_CODES not assigned to any region: ' .
			implode( ', ', $orphanedCountries ) . '. All supported countries must be assigned to a region.'
		);
	}

}
