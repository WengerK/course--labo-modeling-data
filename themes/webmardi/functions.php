<?php

require_once __DIR__ . '/Repository/EventRepository.php';

use Webmardi\Repository\EventRepository;

function get_next_webmardi_event() {
  $eventRepository = new EventRepository();
  return $eventRepository->getNextEventSince(new \DateTime('2023-07-01'));
}

function get_webmardi_event_2023() {
  $eventRepository = new EventRepository();
  return $eventRepository->getEventOfSeason(new \DateTime('2023-01-01'), new \DateTime('2023-12-31'));
}

/**
 * For visual purpose, split the number of events into a given number of cols.
 */
function split_events_as_columns($events, $cols = 3): array {
  $start_array = $events;
  $start_array_size = count($start_array);
  $final_array = array();

  foreach($start_array as $key => $value) {
    $index = floor(($key*$cols)/$start_array_size);
    if ($index < 0) $index = 0;
    $final_array[$index][] = $value;
  }

  return $final_array;
}
