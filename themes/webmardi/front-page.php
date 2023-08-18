<?php get_header(); ?>

<main class="flex-auto">
    <div class="relative py-20 sm:pb-24 sm:pt-36">
        <div class="absolute inset-0 overflow-hidden bg-indigo-50 -bottom-14 -top-36">
            <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-white"></div>
            <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-white"></div>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
            <div class="mx-auto max-w-2xl lg:max-w-4xl lg:px-12">
              <?php $next_event = get_next_webmardi_event(); ?>
              <?php $next_event_speakers = get_field("events_speakers", $next_event->ID); ?>
                <h1 class="font-display text-5xl font-bold tracking-tighter text-blue-600 sm:text-7xl"><?= $next_event->post_title ?></h1>
                <dl class="mt-10 grid grid-cols-2 gap-x-10 gap-y-6 sm:mt-16 sm:gap-x-16 sm:gap-y-10 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-start lg:text-left">
                  <?php if ($next_event_speakers): ?>
                      <div>
                          <dt class="font-mono text-sm text-blue-600">Speakers</dt>
                          <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900"><?= $next_event_speakers[0]->post_title ?></dd>
                      </div>
                  <?php endif; ?>
                    <div>
                        <dt class="font-mono text-sm text-blue-600">Venue</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">Staples Center</dd>
                    </div>
                    <div>
                        <dt class="font-mono text-sm text-blue-600">Location</dt>
                        <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-blue-900">Los Angeles</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <section id="schedule" aria-label="Schedule" class="py-20 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-4xl lg:pr-24">
                <h2 class="font-display text-4xl font-medium tracking-tighter text-blue-600 sm:text-5xl">All events</h2>
            </div>
        </div>
        <div class="relative mt-14 sm:mt-16">
            <div class="absolute inset-0 overflow-hidden bg-indigo-50 -bottom-32 -top-40">
                <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-white">

                </div>
                <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-white"></div>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                <div class="hidden lg:grid lg:grid-cols-3 lg:gap-x-8">
                  <?php $events = get_webmardi_event_2023(); ?>
                  <?php $events_by_cols = split_events_as_columns($events, 3); ?>

                  <?php foreach($events_by_cols as $event): ?>
                      <section>
                          <ol role="list" class="mt-10 space-y-8 bg-white/60 px-10 py-14 text-center shadow-xl shadow-blue-900/5 backdrop-blur">
                            <?php foreach($event as $event_post): ?>
                              <?php $event_speakers = get_field("events_speakers", $event_post->ID); ?>
                              <?php $event_date_unix = strtotime(get_field("event_when", $event_post->ID)); ?>

                                <li>
                                    <h4 class="text-lg font-semibold tracking-tight text-blue-900"><?= $event_speakers[0]->post_title ?></h4>
                                    <p class="mt-1 tracking-tight text-blue-900"><?= $event_post->post_title ?></p>
                                    <p class="mt-1 font-mono text-sm text-slate-500">
                                      <?= date_i18n('l d F, Y', $event_date_unix) ?>
                                    </p>
                                </li>
                            <?php endforeach; ?>
                          </ol>
                      </section>
                  <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

  <?php get_footer(); ?>
