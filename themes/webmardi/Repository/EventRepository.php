<?php

namespace Webmardi\Repository;

use WP_Query;
use WP_Post;

class EventRepository {

  /**
   * Get the next event since a given date.
   */
  public function getNextEventSince(\DateTime $since): ?WP_Post {
    $args = [
      'posts_per_page' => 1,
      'post_type' => 'event',
      'post_status' => 'publish',
      'orderby' => 'event_when',
      'order' => 'ASC',
      'meta_query' => [
        'relation' => 'AND',
        [
          'key' => 'event_when',
          'value' => $since->format('Y-m-d'),
          'compare'  => '>='
        ]
      ]
    ];
    $query = new WP_Query($args);
    $posts = $query->posts;

    if (!$posts[0] instanceof WP_Post) {
      return null;
    }

    return $posts[0];
  }

  /**
   * Get all the event for a season.
   */
  public function getEventOfSeason(\DateTime $start, \DateTime $end): array {
    $args = [
      'posts_per_page' => 12,
      'post_type' => 'event',
      'post_status' => 'publish',
      'orderby' => 'event_when',
      'order' => 'DESC',
      'meta_query' => [
        'relation' => 'AND',
        [
          'key' => 'event_when',
          'value' => $start->format('Y-m-d'),
          'compare'  => '>='
        ],
        [
          'key' => 'event_when',
          'value' => $end->format('Y-m-d'),
          'compare'  => '<='
        ]
      ]
    ];
    $query = new WP_Query($args);
    return $query->posts;
  }
}
