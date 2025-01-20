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
			'msgKey' => 'growthexperiments-homepage-suggestededits-topic-group-name-geography',
			'topics' => [
				[
					'topicId' => 'africa',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-africa',
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
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-asia',
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
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-central-america',
					'articleTopics' => [ 'central-america' ],
				],
				[
					'topicId' => 'north-america',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-north-america',
					'articleTopics' => [ 'north-america' ],
				],
				[
					'topicId' => 'south-america',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-south-america',
					'articleTopics' => [ 'south-america' ],
				],
				[
					'topicId' => 'europe',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-europe',
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
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-oceania',
					'articleTopics' => [ 'oceania' ],
				],
			],
		],
		[
			'groupId' => 'culture',
			'msgKey' => 'growthexperiments-homepage-suggestededits-topic-group-name-culture',
			'topics' => [
				[
					'topicId' => 'architecture',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-architecture',
					'articleTopics' => [ 'architecture' ],
				],
				[
					'topicId' => 'art',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-art',
					'articleTopics' => [ 'visual-arts' ],
				],
				[
					'topicId' => 'comics-and-anime',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-comics-and-anime',
					'articleTopics' => [ 'comics-and-anime' ],
				],
				[
					'topicId' => 'entertainment',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-entertainment',
					'articleTopics' => [
						'entertainment',
						'radio',
					],
				],
				[
					'topicId' => 'fashion',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-fashion',
					'articleTopics' => [ 'fashion' ],
				],
				[
					'topicId' => 'literature',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-literature',
					'articleTopics' => [ 'books' ],
				],
				[
					'topicId' => 'music',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-music',
					'articleTopics' => [ 'music' ],
				],
				[
					'topicId' => 'performing-arts',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-performing-arts',
					'articleTopics' => [ 'performing-arts' ],
				],
				[
					'topicId' => 'sports',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-sports',
					'articleTopics' => [ 'sports' ],
				],
				[
					'topicId' => 'tv-and-film',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-tv-and-film',
					'articleTopics' => [ 'films', 'television' ],
				],
				[
					'topicId' => 'video-games',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-video-games',
					'articleTopics' => [ 'video-games' ],
				],
			],
		],
		[
			'groupId' => 'history-and-society',
			'msgKey' => 'cx-articletopics-group-history-and-society',
			'topics' => [
				[
					'topicId' => 'biography',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-biography',
					'articleTopics' => [ 'biography' ],
				],
				[
					'topicId' => 'business-and-economics',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-business-and-economics',
					'articleTopics' => [ 'business-and-economics' ],
				],
				[
					'topicId' => 'education',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-education',
					'articleTopics' => [ 'education' ],
				],
				[
					'topicId' => 'food-and-drink',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-food-and-drink',
					'articleTopics' => [ 'food-and-drink' ],
				],
				[
					'topicId' => 'history',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-history',
					'articleTopics' => [ 'history' ],
				],
				[
					'topicId' => 'military-and-warfare',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-military-and-warfare',
					'articleTopics' => [ 'military-and-warfare' ],
				],
				[
					'topicId' => 'philosophy-and-religion',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-philosophy-and-religion',
					'articleTopics' => [ 'philosophy-and-religion' ],
				],
				[
					'topicId' => 'politics-and-government',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-politics-and-government',
					'articleTopics' => [ 'politics-and-government' ],
				],
				[
					'topicId' => 'society',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-society',
					'articleTopics' => [ 'society' ],
				],
				[
					'topicId' => 'transportation',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-transportation',
					'articleTopics' => [ 'transportation' ],
				],
				[
					'topicId' => 'women',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-women',
					'articleTopics' => [ 'women' ],
				],
			],
		],
		[
			'groupId' => 'science-technology-and-math',
			'msgKey' => 'cx-articletopics-group-science-technology-and-math',
			'topics' => [
				[
					'topicId' => 'biology',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-biology',
					'articleTopics' => [ 'biology' ],
				],
				[
					'topicId' => 'chemistry',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-chemistry',
					'articleTopics' => [ 'chemistry' ],
				],
				[
					'topicId' => 'computers-and-internet',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-computers-and-internet',
					'articleTopics' => [
						'internet-culture',
						'computing',
						'software',
					],
				],
				[
					'topicId' => 'earth-and-environment',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-earth-and-environment',
					'articleTopics' => [
						'geographical',
						'earth-and-environment',
					],
				],
				[
					'topicId' => 'engineering',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-engineering',
					'articleTopics' => [ 'engineering' ],
				],
				[
					'topicId' => 'general-science',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-general-science',
					'articleTopics' => [ 'stem' ],
				],
				[
					'topicId' => 'mathematics',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-mathematics',
					'articleTopics' => [ 'mathematics' ],
				],
				[
					'topicId' => 'medicine-and-health',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-medicine-and-health',
					'articleTopics' => [ 'medicine-and-health' ],
				],
				[
					'topicId' => 'physics',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-physics',
					'articleTopics' => [
						'physics',
						'space',
					],
				],
				[
					'topicId' => 'technology',
					'msgKey' => 'growthexperiments-homepage-suggestededits-topic-name-technology',
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
