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
