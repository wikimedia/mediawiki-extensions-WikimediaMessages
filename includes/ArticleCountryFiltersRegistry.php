<?php

declare( strict_types = 1 );

namespace MediaWiki\Extension\WikimediaMessages;

use Collator;
use MediaWiki\Extension\CLDR\CountryNames;
use MediaWiki\MediaWikiServices;
use MediaWiki\Message\Message;
use UnexpectedValueException;

class ArticleCountryFiltersRegistry {

	// From https://gitlab.wikimedia.org/repos/movement-insights/canonical-data/-/raw/main/country/countries.tsv
	// Extracted on 2025-04-17
	private const SUPPORTED_COUNTRY_CODES = [
		'AF', 'AX', 'AL', 'DZ', 'AS', 'AD', 'AO', 'AI', 'AQ', 'AG',
		'AR', 'AM', 'AW', 'AU', 'AT', 'AZ', 'BS', 'BH', 'BD', 'BB',
		'BY', 'BE', 'BZ', 'BJ', 'BM', 'BT', 'BO', 'BQ', 'BA', 'BW',
		'BV', 'BR', 'IO', 'VG', 'BN', 'BG', 'BF', 'BI', 'KH', 'CM',
		'CA', 'CV', 'KY', 'CF', 'TD', 'CL', 'CN', 'CX', 'CC', 'CO',
		'KM', 'CK', 'CR', 'HR', 'CU', 'CW', 'CY', 'CZ', 'CD', 'DK',
		'DJ', 'DM', 'DO', 'TL', 'EC', 'EG', 'SV', 'GQ', 'ER', 'EE',
		'SZ', 'ET', 'FK', 'FO', 'FM', 'FJ', 'FI', 'FR', 'GF', 'PF',
		'TF', 'GA', 'GM', 'GE', 'DE', 'GH', 'GI', 'GR', 'GL', 'GD',
		'GP', 'GU', 'GT', 'GG', 'GN', 'GW', 'GY', 'HT', 'HM', 'HN',
		'HK', 'HU', 'IS', 'IN', 'ID', 'IR', 'IQ', 'IE', 'IM', 'IL',
		'IT', 'CI', 'JM', 'JP', 'JE', 'JO', 'KZ', 'KE', 'KI', 'XK',
		'KW', 'KG', 'LA', 'LV', 'LB', 'LS', 'LR', 'LY', 'LI', 'LT',
		'LU', 'MO', 'MG', 'MW', 'MY', 'MV', 'ML', 'MT', 'MH', 'MQ',
		'MR', 'MU', 'YT', 'MX', 'MD', 'MC', 'MN', 'ME', 'MS', 'MA',
		'MZ', 'MM', 'NA', 'NR', 'NP', 'NL', 'NC', 'NZ', 'NI', 'NE',
		'NG', 'NU', 'NF', 'KP', 'MK', 'MP', 'NO', 'OM', 'PK', 'PW',
		'PS', 'PA', 'PG', 'PY', 'PE', 'PH', 'PN', 'PL', 'PT', 'PR',
		'QA', 'CG', 'RE', 'RO', 'RU', 'RW', 'BL', 'SH', 'KN', 'LC',
		'MF', 'PM', 'VC', 'WS', 'SM', 'ST', 'SA', 'SN', 'RS', 'SC',
		'SL', 'SG', 'SX', 'SK', 'SI', 'SB', 'SO', 'ZA', 'GS', 'KR',
		'SS', 'ES', 'LK', 'SD', 'SR', 'SJ', 'SE', 'CH', 'SY', 'TW',
		'TJ', 'TZ', 'TH', 'TG', 'TK', 'TO', 'TT', 'TN', 'TR', 'TM',
		'TC', 'TV', 'UG', 'UA', 'AE', 'GB', 'US', 'UM', 'VI', 'UY',
		'UZ', 'VU', 'VA', 'VE', 'VN', 'WF', 'EH', 'YE', 'ZM', 'ZW',
	];

	// SUPPORTED_COUNTRY_CODES grouped by region manually.
	// Region labels are reused from the article topic filters.
	// In each group, 'countries' is a map of iso-a2 to iso-a3.
	// iso-a2 is used for localization via CLDR.
	// iso-a3 can be used with the articlecountry search keyword.
	private const GROUPED_COUNTRY_CODES = [
		'asia' => [
			'msgKey' => 'wikimedia-articletopics-topic-asia',
			'countries' => [
				// Afghanistan
				'AF' => 'AFG',
				// Armenia
				'AM' => 'ARM',
				// Azerbaijan
				'AZ' => 'AZE',
				// Bahrain
				'BH' => 'BHR',
				// Bangladesh
				'BD' => 'BGD',
				// Bhutan
				'BT' => 'BTN',
				// Brunei
				'BN' => 'BRN',
				// Cambodia
				'KH' => 'KHM',
				// China
				'CN' => 'CHN',
				// Christmas Island
				'CX' => 'CXR',
				// Cocos (Keeling) Islands
				'CC' => 'CCK',
				// Georgia
				'GE' => 'GEO',
				// India
				'IN' => 'IND',
				// Indonesia
				'ID' => 'IDN',
				// Iran
				'IR' => 'IRN',
				// Iraq
				'IQ' => 'IRQ',
				// Israel
				'IL' => 'ISR',
				// Japan
				'JP' => 'JPN',
				// Kazakhstan
				'KZ' => 'KAZ',
				// Kyrgyzstan
				'KG' => 'KGZ',
				// North Korea
				'KP' => 'PRK',
				// South Korea
				'KR' => 'KOR',
				// Kuwait
				'KW' => 'KWT',
				// Laos
				'LA' => 'LAO',
				// Lebanon
				'LB' => 'LBN',
				// Macau
				'MO' => 'MAC',
				// Jordan
				'JO' => 'JOR',
				// Mongolia
				'MN' => 'MNG',
				// Myanmar
				'MM' => 'MMR',
				// Maldives
				'MV' => 'MDV',
				// Malaysia
				'MY' => 'MYS',
				// Nepal
				'NP' => 'NPL',
				// Oman
				'OM' => 'OMN',
				// Pakistan
				'PK' => 'PAK',
				// Philippines
				'PH' => 'PHL',
				// Qatar
				'QA' => 'QAT',
				// Saudi Arabia
				'SA' => 'SAU',
				// Svalbard and Jan Mayen
				'SJ' => 'SJM',
				// Singapore
				'SG' => 'SGP',
				// Sri Lanka
				'LK' => 'LKA',
				// Syria
				'SY' => 'SYR',
				// Tajikistan
				'TJ' => 'TJK',
				// Thailand
				'TH' => 'THA',
				// Timor-Leste
				'TL' => 'TLS',
				// Turkmenistan
				'TM' => 'TKM',
				// Turkey
				'TR' => 'TUR',
				// Uzbekistan
				'UZ' => 'UZB',
				// Vietnam
				'VN' => 'VNM',
				// Yemen
				'YE' => 'YEM',
				// Taiwan
				'TW' => 'TWN',
				// United Arab Emirates
				'AE' => 'ARE',
				// Hong Kong
				'HK' => 'HKG',
				// Palestine
				'PS' => 'PSE',
				// British Indian Ocean Territory
				'IO' => 'IOT',
			],
		],
		'africa' => [
			'msgKey' => 'wikimedia-articletopics-topic-africa',
			'countries' => [
				// Algeria
				'DZ' => 'DZA',
				// Angola
				'AO' => 'AGO',
				// Benin
				'BJ' => 'BEN',
				// Botswana
				'BW' => 'BWA',
				// Burkina Faso
				'BF' => 'BFA',
				// Burundi
				'BI' => 'BDI',
				// Cameroon
				'CM' => 'CMR',
				// Cape Verde
				'CV' => 'CPV',
				// Central African Republic
				'CF' => 'CAF',
				// Chad
				'TD' => 'TCD',
				// Comoros
				'KM' => 'COM',
				// Democratic Republic of the Congo
				'CD' => 'COD',
				// Republic of the Congo
				'CG' => 'COG',
				// Côte d'Ivoire
				'CI' => 'CIV',
				// Djibouti
				'DJ' => 'DJI',
				// Egypt
				'EG' => 'EGY',
				// Equatorial Guinea
				'GQ' => 'GNQ',
				// Eritrea
				'ER' => 'ERI',
				// Eswatini
				'SZ' => 'SWZ',
				// Ethiopia
				'ET' => 'ETH',
				// Gabon
				'GA' => 'GAB',
				// Gambia
				'GM' => 'GMB',
				// Ghana
				'GH' => 'GHA',
				// Guinea
				'GN' => 'GIN',
				// Guinea-Bissau
				'GW' => 'GNB',
				// Kenya
				'KE' => 'KEN',
				// Lesotho
				'LS' => 'LSO',
				// Liberia
				'LR' => 'LBR',
				// Libya
				'LY' => 'LBY',
				// Madagascar
				'MG' => 'MDG',
				// Malawi
				'MW' => 'MWI',
				// Mali
				'ML' => 'MLI',
				// Mauritania
				'MR' => 'MRT',
				// Mauritius
				'MU' => 'MUS',
				// Mayotte
				'YT' => 'MYT',
				// Morocco
				'MA' => 'MAR',
				// Mozambique
				'MZ' => 'MOZ',
				// Namibia
				'NA' => 'NAM',
				// Niger
				'NE' => 'NER',
				// Nigeria
				'NG' => 'NGA',
				// Rwanda
				'RW' => 'RWA',
				// Réunion
				'RE' => 'REU',
				// Sao Tome and Principe
				'ST' => 'STP',
				// Senegal
				'SN' => 'SEN',
				// Seychelles
				'SC' => 'SYC',
				// Sierra Leone
				'SL' => 'SLE',
				// Somalia
				'SO' => 'SOM',
				// South Africa
				'ZA' => 'ZAF',
				// South Sudan
				'SS' => 'SSD',
				// Sudan
				'SD' => 'SDN',
				// Tanzania
				'TZ' => 'TZA',
				// Togo
				'TG' => 'TGO',
				// Tunisia
				'TN' => 'TUN',
				// Uganda
				'UG' => 'UGA',
				// Western Sahara
				'EH' => 'ESH',
				// Zambia
				'ZM' => 'ZMB',
				// Zimbabwe
				'ZW' => 'ZWE',
			],
		],
		'north-america' => [
			'msgKey' => 'wikimedia-articletopics-topic-north-america',
			'countries' => [
				// Canada
				'CA' => 'CAN',
				// United States
				'US' => 'USA',
				// Mexico
				'MX' => 'MEX',
				// Cuba
				'CU' => 'CUB',
				// Haiti
				'HT' => 'HTI',
				// Jamaica
				'JM' => 'JAM',
				// Bahamas
				'BS' => 'BHS',
				// Barbados
				'BB' => 'BRB',
				// Antigua and Barbuda
				'AG' => 'ATG',
				// Dominica
				'DM' => 'DMA',
				// Dominican Republic
				'DO' => 'DOM',
				// Greenland
				'GL' => 'GRL',
				// Puerto Rico
				'PR' => 'PRI',
				// Anguilla
				'AI' => 'AIA',
				// Aruba
				'AW' => 'ABW',
				// Bermuda
				'BM' => 'BMU',
				// Bonaire, Sint Eustatius and Saba
				'BQ' => 'BES',
				// British Virgin Islands
				'VG' => 'VGB',
				// Cayman Islands
				'KY' => 'CYM',
				// Curaçao
				'CW' => 'CUW',
				// Grenada
				'GD' => 'GRD',
				// Guadeloupe
				'GP' => 'GLP',
				// Martinique
				'MQ' => 'MTQ',
				// Montserrat
				'MS' => 'MSR',
				// Saint Barthélemy
				'BL' => 'BLM',
				// Saint Helena, Ascension and Tristan da Cunha
				'SH' => 'SHN',
				// Saint Kitts and Nevis
				'KN' => 'KNA',
				// Saint Lucia
				'LC' => 'LCA',
				// Saint Martin
				'MF' => 'MAF',
				// Saint Pierre and Miquelon
				'PM' => 'SPM',
				// Saint Vincent and the Grenadines
				'VC' => 'VCT',
				// Sint Maarten
				'SX' => 'SXM',
				// Turks and Caicos Islands
				'TC' => 'TCA',
				// Virgin Islands (U.S.)
				'VI' => 'VIR',
			],
		],
		'south-america' => [
			'msgKey' => 'wikimedia-articletopics-topic-south-america',
			'countries' => [
				// Argentina
				'AR' => 'ARG',
				// Bolivia
				'BO' => 'BOL',
				// Brazil
				'BR' => 'BRA',
				// Chile
				'CL' => 'CHL',
				// Colombia
				'CO' => 'COL',
				// Guyana
				'GY' => 'GUY',
				// Paraguay
				'PY' => 'PRY',
				// Peru
				'PE' => 'PER',
				// Suriname
				'SR' => 'SUR',
				// Trinidad and Tobago
				'TT' => 'TTO',
				// Uruguay
				'UY' => 'URY',
				// Venezuela
				'VE' => 'VEN',
				// Ecuador
				'EC' => 'ECU',
				// Falkland Islands
				'FK' => 'FLK',
				// French Guiana
				'GF' => 'GUF',
				// South Georgia and the South Sandwich Islands
				'GS' => 'SGS',
			],
		],
		'europe' => [
			'msgKey' => 'wikimedia-articletopics-topic-europe',
			'countries' => [
				// Åland Islands
				'AX' => 'ALA',
				// Albania
				'AL' => 'ALB',
				// Andorra
				'AD' => 'AND',
				// Austria
				'AT' => 'AUT',
				// Belarus
				'BY' => 'BLR',
				// Belgium
				'BE' => 'BEL',
				// Bosnia and Herzegovina
				'BA' => 'BIH',
				// Bulgaria
				'BG' => 'BGR',
				// Croatia
				'HR' => 'HRV',
				// Cyprus
				'CY' => 'CYP',
				// Czech Republic
				'CZ' => 'CZE',
				// Denmark
				'DK' => 'DNK',
				// Estonia
				'EE' => 'EST',
				// Faroe Islands
				'FO' => 'FRO',
				// Finland
				'FI' => 'FIN',
				// France
				'FR' => 'FRA',
				// Germany
				'DE' => 'DEU',
				// Gibraltar
				'GI' => 'GIB',
				// Greece
				'GR' => 'GRC',
				// Guernsey
				'GG' => 'GGY',
				// Hungary
				'HU' => 'HUN',
				// Iceland
				'IS' => 'ISL',
				// Ireland
				'IE' => 'IRL',
				// Isle of Man
				'IM' => 'IMN',
				// Italy
				'IT' => 'ITA',
				// Jersey
				'JE' => 'JEY',
				// Latvia
				'LV' => 'LVA',
				// Lithuania
				'LT' => 'LTU',
				// Liechtenstein
				'LI' => 'LIE',
				// Luxembourg
				'LU' => 'LUX',
				// Malta
				'MT' => 'MLT',
				// Moldova
				'MD' => 'MDA',
				// Monaco
				'MC' => 'MCO',
				// North Macedonia
				'MK' => 'MKD',
				// Montenegro
				'ME' => 'MNE',
				// Netherlands
				'NL' => 'NLD',
				// Norway
				'NO' => 'NOR',
				// Poland
				'PL' => 'POL',
				// Portugal
				'PT' => 'PRT',
				// Romania
				'RO' => 'ROU',
				// Russia
				'RU' => 'RUS',
				// Serbia
				'RS' => 'SRB',
				// Kosovo
				'XK' => 'XKX',
				// Slovakia
				'SK' => 'SVK',
				// Slovenia
				'SI' => 'SVN',
				// Spain
				'ES' => 'ESP',
				// Sweden
				'SE' => 'SWE',
				// Switzerland
				'CH' => 'CHE',
				// Ukraine
				'UA' => 'UKR',
				// United Kingdom
				'GB' => 'GBR',
				// San Marino
				'SM' => 'SMR',
				// Vatican City
				'VA' => 'VAT',
			],
		],
		'oceania' => [
			'msgKey' => 'wikimedia-articletopics-topic-oceania',
			'countries' => [
				// Australia
				'AU' => 'AUS',
				// New Zealand
				'NZ' => 'NZL',
				// Fiji
				'FJ' => 'FJI',
				// Papua New Guinea
				'PG' => 'PNG',
				// Solomon Islands
				'SB' => 'SLB',
				// Vanuatu
				'VU' => 'VUT',
				// Micronesia
				'FM' => 'FSM',
				// Marshall Islands
				'MH' => 'MHL',
				// Palau
				'PW' => 'PLW',
				// Kiribati
				'KI' => 'KIR',
				// Tuvalu
				'TV' => 'TUV',
				// Tonga
				'TO' => 'TON',
				// Niue
				'NU' => 'NIU',
				// New Caledonia
				'NC' => 'NCL',
				// French Polynesia
				'PF' => 'PYF',
				// Tokelau
				'TK' => 'TKL',
				// American Samoa
				'AS' => 'ASM',
				// Cook Islands
				'CK' => 'COK',
				// Guam
				'GU' => 'GUM',
				// Nauru
				'NR' => 'NRU',
				// Norfolk Island
				'NF' => 'NFK',
				// Northern Mariana Islands
				'MP' => 'MNP',
				// Samoa
				'WS' => 'WSM',
				// United States Minor Outlying Islands
				'UM' => 'UMI',
				// Wallis and Futuna
				'WF' => 'WLF',
				// Pitcairn Islands
				'PN' => 'PCN',
				// Antarctica
				'AQ' => 'ATA',
				// Bouvet Island
				'BV' => 'BVT',
				// French Southern Territories
				'TF' => 'ATF',
				// Heard Island and McDonald Islands
				'HM' => 'HMD',
			],
		],
		'central-america' => [
			'msgKey' => 'wikimedia-articletopics-topic-central-america',
			'countries' => [
				// Belize
				'BZ' => 'BLZ',
				// Costa Rica
				'CR' => 'CRI',
				// El Salvador
				'SV' => 'SLV',
				// Guatemala
				'GT' => 'GTM',
				// Honduras
				'HN' => 'HND',
				// Nicaragua
				'NI' => 'NIC',
				// Panama
				'PA' => 'PAN',
			],
		],
	];

	/**
	 * Get a list of country codes with localized labels.
	 *
	 * @param array $countryCodes
	 * @param array $cldrA2toLabelMap
	 * @param Collator $collator
	 * @throws UnexpectedValueException When a requested country code is not supported.
	 * @return array [
	 * 		[
	 * 			'id' => 'afg',
	 * 			'label' => 'Afghanistan',
	 * 		],
	 * 		...
	 * ]
	 */
	private static function getCountries(
		array $countryCodes,
		array $cldrA2toLabelMap,
		Collator $collator
	): array {
		$countries = [];

		foreach ( $countryCodes as $a2 => $a3 ) {
			if ( !in_array( $a2, self::SUPPORTED_COUNTRY_CODES, true ) ) {
				throw new UnexpectedValueException( "Unsupported country code: $a2" );
			}

			if ( !isset( $cldrA2toLabelMap[$a2] ) ) {
				// warning: missing localized label
				continue;
			}
			$countries[] = [
				'id' => strtolower( $a3 ),
				'label' => $cldrA2toLabelMap[$a2],
			];
		}

		usort(
			$countries,
			static fn ( array $a, array $b ) => $collator->compare( $a['label'], $b['label'] )
		);

		return $countries;
	}

	/**
	 * Get the list of supported country codes.
	 *
	 * @return array
	 */
	public static function getSupportedCountryCodes(): array {
		return self::SUPPORTED_COUNTRY_CODES;
	}

	/**
	 * Get the grouped country codes by region.
	 *
	 * @return array
	 */
	public static function getGroupedCountryCodes(): array {
		return self::GROUPED_COUNTRY_CODES;
	}

	/**
	 * Get a list of regions and their countries, with localized labels.
	 *
	 * @param string $languageCode
	 * @return array [
	 * 		[
	 * 			'id' => 'asia',
	 * 			'label' => 'Asia',
	 * 			'countries' => [
	 * 				[
	 * 					'id' => 'afg',
	 * 					'label' => 'Afghanistan',
	 * 				],
	 * 				...
	 * 			],
	 * 		],
	 * 		...
	 * ]
	 */
	public static function getLocalizedRegionsAndCountries( string $languageCode ): array {
		$regions = [];
		$services = MediaWikiServices::getInstance();
		$collator = new Collator( $languageCode );

		if ( !$services->getExtensionRegistry()->isLoaded( 'CLDR' ) ) {
			// todo: warning: CLDR extension not loaded
			return [];
		}

		$cldrA2toLabelMap = CountryNames::getNames( $languageCode );

		$language = $services->getLanguageFactory()->getLanguage( $languageCode );

		foreach ( self::GROUPED_COUNTRY_CODES as $region => $regionInfo ) {
			$labelMsg = new Message( $regionInfo['msgKey'], [], $language );
			$regions[] = [
				'id' => $region,
				'label' => $labelMsg->text(),
				'countries' => self::getCountries( $regionInfo['countries'], $cldrA2toLabelMap, $collator ),
			];
		}

		usort(
			$regions,
			static fn ( array $a, array $b ) => $collator->compare( $a['label'], $b['label'] )
		);

		return $regions;
	}
}
