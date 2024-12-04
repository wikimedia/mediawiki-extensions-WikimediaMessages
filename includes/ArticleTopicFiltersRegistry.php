<?php

declare( strict_types = 1 );

namespace MediaWiki\Extension\WikimediaMessages;

use InvalidArgumentException;

/**
 * This class provides a list of topic filters for articles that can be presented directly to users. Each filter defined
 * here is mapped to one or more topics in the Articletopic taxonomy (https://www.mediawiki.org/wiki/ORES/Articletopic)
 * used by LiftWing (https://api.wikimedia.org/wiki/Lift_Wing_API/Reference/Get_articletopic_outlink_prediction).
 * Topic filters are grouped by category, and both the topics and the categories are localisable.
 * Originally written for the ContentTranslation extension in includes/ArticleTopicsDefinition.php.
 */
class ArticleTopicFiltersRegistry {
	private const FILTERS = [
		[
			'groupId' => 'geography',
			'msgKey' => 'wikimedia-articletopics-group-geography',
			'topics' => [
				[
					'topicId' => 'africa',
					'msgKey' => 'wikimedia-articletopics-topic-africa',
					'articleTopics' => [
						'africa',
						'central-africa',
						'eastern-africa',
						'northern-africa',
						'southern-africa',
						'western-africa',
					],
				],
				[
					'topicId' => 'asia',
					'msgKey' => 'wikimedia-articletopics-topic-asia',
					'articleTopics' => [
						'asia',
						'central-asia',
						'east-asia',
						'north-asia',
						'south-asia',
						'southeast-asia',
						'west-asia',
					],
				],
				[
					'topicId' => 'central-america',
					'msgKey' => 'wikimedia-articletopics-topic-central-america',
					'articleTopics' => [ 'central-america' ],
				],
				[
					'topicId' => 'north-america',
					'msgKey' => 'wikimedia-articletopics-topic-north-america',
					'articleTopics' => [ 'north-america' ],
				],
				[
					'topicId' => 'south-america',
					'msgKey' => 'wikimedia-articletopics-topic-south-america',
					'articleTopics' => [ 'south-america' ],
				],
				[
					'topicId' => 'europe',
					'msgKey' => 'wikimedia-articletopics-topic-europe',
					'articleTopics' => [
						'europe',
						'eastern-europe',
						'northern-europe',
						'southern-europe',
						'western-europe',
					],
				],
				[
					'topicId' => 'oceania',
					'msgKey' => 'wikimedia-articletopics-topic-oceania',
					'articleTopics' => [ 'oceania' ],
				],
			],
		],
		[
			'groupId' => 'culture',
			'msgKey' => 'wikimedia-articletopics-group-culture',
			'topics' => [
				[
					'topicId' => 'architecture',
					'msgKey' => 'wikimedia-articletopics-topic-architecture',
					'articleTopics' => [ 'architecture' ],
				],
				[
					'topicId' => 'art',
					'msgKey' => 'wikimedia-articletopics-topic-art',
					'articleTopics' => [ 'visual-arts' ],
				],
				[
					'topicId' => 'comics-and-anime',
					'msgKey' => 'wikimedia-articletopics-topic-comics-and-anime',
					'articleTopics' => [ 'comics-and-anime' ],
				],
				[
					'topicId' => 'entertainment',
					'msgKey' => 'wikimedia-articletopics-topic-entertainment',
					'articleTopics' => [
						'entertainment',
						'radio',
					],
				],
				[
					'topicId' => 'fashion',
					'msgKey' => 'wikimedia-articletopics-topic-fashion',
					'articleTopics' => [ 'fashion' ],
				],
				[
					'topicId' => 'literature',
					'msgKey' => 'wikimedia-articletopics-topic-literature',
					'articleTopics' => [ 'books' ],
				],
				[
					'topicId' => 'music',
					'msgKey' => 'wikimedia-articletopics-topic-music',
					'articleTopics' => [ 'music' ],
				],
				[
					'topicId' => 'performing-arts',
					'msgKey' => 'wikimedia-articletopics-topic-performing-arts',
					'articleTopics' => [ 'performing-arts' ],
				],
				[
					'topicId' => 'sports',
					'msgKey' => 'wikimedia-articletopics-topic-sports',
					'articleTopics' => [ 'sports' ],
				],
				[
					'topicId' => 'tv-and-film',
					'msgKey' => 'wikimedia-articletopics-topic-tv-and-film',
					'articleTopics' => [ 'films', 'television' ],
				],
				[
					'topicId' => 'video-games',
					'msgKey' => 'wikimedia-articletopics-topic-video-games',
					'articleTopics' => [ 'video-games' ],
				],
			],
		],
		[
			'groupId' => 'history-and-society',
			'msgKey' => 'wikimedia-articletopics-group-history-and-society',
			'topics' => [
				[
					'topicId' => 'biography',
					'msgKey' => 'wikimedia-articletopics-topic-biography',
					'articleTopics' => [ 'biography' ],
				],
				[
					'topicId' => 'business-and-economics',
					'msgKey' => 'wikimedia-articletopics-topic-business-and-economics',
					'articleTopics' => [ 'business-and-economics' ],
				],
				[
					'topicId' => 'education',
					'msgKey' => 'wikimedia-articletopics-topic-education',
					'articleTopics' => [ 'education' ],
				],
				[
					'topicId' => 'food-and-drink',
					'msgKey' => 'wikimedia-articletopics-topic-food-and-drink',
					'articleTopics' => [ 'food-and-drink' ],
				],
				[
					'topicId' => 'history',
					'msgKey' => 'wikimedia-articletopics-topic-history',
					'articleTopics' => [ 'history' ],
				],
				[
					'topicId' => 'military-and-warfare',
					'msgKey' => 'wikimedia-articletopics-topic-military-and-warfare',
					'articleTopics' => [ 'military-and-warfare' ],
				],
				[
					'topicId' => 'philosophy-and-religion',
					'msgKey' => 'wikimedia-articletopics-topic-philosophy-and-religion',
					'articleTopics' => [ 'philosophy-and-religion' ],
				],
				[
					'topicId' => 'politics-and-government',
					'msgKey' => 'wikimedia-articletopics-topic-politics-and-government',
					'articleTopics' => [ 'politics-and-government' ],
				],
				[
					'topicId' => 'society',
					'msgKey' => 'wikimedia-articletopics-topic-society',
					'articleTopics' => [ 'society' ],
				],
				[
					'topicId' => 'transportation',
					'msgKey' => 'wikimedia-articletopics-topic-transportation',
					'articleTopics' => [ 'transportation' ],
				],
				[
					'topicId' => 'women',
					'msgKey' => 'wikimedia-articletopics-topic-women',
					'articleTopics' => [ 'women' ],
				],
			],
		],
		[
			'groupId' => 'science-technology-and-math',
			'msgKey' => 'wikimedia-articletopics-group-science-technology-and-math',
			'topics' => [
				[
					'topicId' => 'biology',
					'msgKey' => 'wikimedia-articletopics-topic-biology',
					'articleTopics' => [ 'biology' ],
				],
				[
					'topicId' => 'chemistry',
					'msgKey' => 'wikimedia-articletopics-topic-chemistry',
					'articleTopics' => [ 'chemistry' ],
				],
				[
					'topicId' => 'computers-and-internet',
					'msgKey' => 'wikimedia-articletopics-topic-computers-and-internet',
					'articleTopics' => [
						'internet-culture',
						'computing',
						'software',
					],
				],
				[
					'topicId' => 'earth-and-environment',
					'msgKey' => 'wikimedia-articletopics-topic-earth-and-environment',
					'articleTopics' => [
						'geographical',
						'earth-and-environment',
					],
				],
				[
					'topicId' => 'engineering',
					'msgKey' => 'wikimedia-articletopics-topic-engineering',
					'articleTopics' => [ 'engineering' ],
				],
				[
					'topicId' => 'general-science',
					'msgKey' => 'wikimedia-articletopics-topic-general-science',
					'articleTopics' => [ 'stem' ],
				],
				[
					'topicId' => 'mathematics',
					'msgKey' => 'wikimedia-articletopics-topic-mathematics',
					'articleTopics' => [ 'mathematics' ],
				],
				[
					'topicId' => 'medicine-and-health',
					'msgKey' => 'wikimedia-articletopics-topic-medicine-and-health',
					'articleTopics' => [ 'medicine-and-health' ],
				],
				[
					'topicId' => 'physics',
					'msgKey' => 'wikimedia-articletopics-topic-physics',
					'articleTopics' => [
						'physics',
						'space',
					],
				],
				[
					'topicId' => 'technology',
					'msgKey' => 'wikimedia-articletopics-topic-technology',
					'articleTopics' => [ 'technology' ],
				],
			],
		],
	];

	/**
	 * Returns a plain list of topic IDs, for validation and the like.
	 * @return list<string>
	 */
	public static function getTopicList(): array {
		$topics = [];
		foreach ( self::FILTERS as $group ) {
			$topics = array_merge( $topics, array_column( $group['topics'], 'topicId' ) );
		}
		return $topics;
	}

	/**
	 * Get the article topics definition, organized into groups with their associated articletopics and label messages.
	 *
	 * @return array[]
	 * @phan-return list<array{groupId:string,msgKey:string,topics:list<array{topicId:string,msgKey:string,articleTopics:list<string>}>}>
	 */
	public static function getGroupedTopics(): array {
		return self::FILTERS;
	}

	/**
	 * Returns message keys for the given topic IDs. The caller is responsible for validating that all the given
	 * topics exist.
	 *
	 * @param string[] $topicIDs
	 * @return array<string,string>
	 */
	public static function getTopicMessages( array $topicIDs ): array {
		$flatTopics = array_merge( ...array_column( self::FILTERS, 'topics' ) );
		$topicCount = count( $flatTopics );
		$ret = [];
		$toFind = array_fill_keys( $topicIDs, true );
		for ( $i = 0; $i < $topicCount && $toFind !== []; $i++ ) {
			$curTopic = $flatTopics[$i]['topicId'];
			if ( isset( $toFind[$curTopic] ) ) {
				$ret[$curTopic] = $flatTopics[$i]['msgKey'];
				unset( $toFind[$curTopic] );
			}
		}
		if ( $toFind ) {
			throw new InvalidArgumentException( "Unrecognized topics: " . implode( ', ', array_keys( $toFind ) ) );
		}
		return $ret;
	}
}
