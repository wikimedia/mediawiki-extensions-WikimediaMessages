<?php

namespace MediaWiki\Extension\WikimediaMessages\Tests\Unit;

use InvalidArgumentException;
use MediaWiki\Extension\WikimediaMessages\ArticleTopicFiltersRegistry;
use MediaWikiUnitTestCase;

/**
 * @covers \MediaWiki\Extension\WikimediaMessages\ArticleTopicFiltersRegistry
 */
class ArticleTopicFiltersRegistryTest extends MediaWikiUnitTestCase {
	public function testGetTopicList() {
		// Also tests immutability. This component is used in other extensions, so take care.
		$expected = [
			'africa', 'asia', 'central-america', 'north-america', 'south-america', 'europe', 'oceania',
			'architecture', 'art', 'comics-and-anime', 'entertainment', 'fashion', 'literature', 'music',
			'performing-arts', 'sports', 'tv-and-film', 'video-games',
			'biography', 'business-and-economics', 'education', 'food-and-drink', 'history', 'military-and-warfare',
			'philosophy-and-religion', 'politics-and-government', 'society', 'transportation', 'women',
			'biology', 'chemistry', 'computers-and-internet', 'earth-and-environment', 'engineering', 'general-science',
			'mathematics', 'medicine-and-health', 'physics', 'technology'
		];
		$this->assertSame( $expected, ArticleTopicFiltersRegistry::getTopicList() );
	}

	public function testGetLocalizedLabels() {
		$expected = [
			'africa' => 'wikimedia-articletopics-topic-africa',
			'general-science' => 'wikimedia-articletopics-topic-general-science'
		];
		$this->assertSame( $expected, ArticleTopicFiltersRegistry::getTopicMessages( array_keys( $expected ) ) );
	}

	public function testGetLocalizedLabels__invalid() {
		$this->expectException( InvalidArgumentException::class );
		$this->expectExceptionMessage( 'Unrecognized topics' );
		ArticleTopicFiltersRegistry::getTopicMessages( [ 'dQw4w9WgXcQ' ] );
	}
}
