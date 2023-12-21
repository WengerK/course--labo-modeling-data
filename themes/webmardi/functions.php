<?php

require_once __DIR__ . '/Repository/EventRepository.php';

use Webmardi\Repository\EventRepository;

function get_next_webmardi_event() {
  $eventRepository = new EventRepository();
  // Hardcoding today in order to have a deterministic example environment.
  $today = new \DateTime('2023-07-01');
  return $eventRepository->getNextEventSince($today);
}

function get_webmardi_event_2023() {
  $eventRepository = new EventRepository();
  return $eventRepository->getEventOfSeason(new \DateTime('2023-01-01'), new \DateTime('2023-12-31'));
}

/**
 * Alter the order of events on the archive page.
 *
 * Display events in ascending order by date.
 */
add_action( 'pre_get_posts', function($query){
  if(is_archive() && is_post_type_archive( 'event' )):
    // Order by ACF field must use meta_key & orderby.
    // @see https://www.advancedcustomfields.com/resources/order-posts-by-custom-fields/
    $query->set( 'order', 'ASC' );
    $query->set( 'meta_key', 'event_when' );
    $query->set( 'orderby', 'meta_value' );
  endif;
});
