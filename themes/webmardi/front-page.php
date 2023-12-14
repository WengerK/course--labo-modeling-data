<?php get_header(); ?>

<?php $next_event = get_next_webmardi_event(); ?>
<?php $next_event_speakers = get_field("events_speakers", $next_event->ID); ?>
<?php $next_event_date_unix = strtotime(get_field("event_when", $next_event->ID)); ?>
<section class="text-white bg-blue" itemscope="" itemtype="https://schema.org/Event">
    <div class="px-4 py-10 mx-auto border-b md:py-28 max-w-7xl border-blue-lighter grid md:grid-cols-3 gap-12 md:gap-6">
        <div class="col-span-2">
            <a class="hover:underline" href="<?php the_permalink($next_event) ?>">
                <h2 class="text-lg font-bold md:text-xl lg:text-2xl" itemprop="name"><?php echo $next_event->post_title ?></h2></a>
            <div class="flex flex-wrap items-center gap-x-8">

                <?php $next_event_meetup_url = get_field("event_url_meetup", $next_event->ID); ?>
                <?php if($next_event_meetup_url): ?>
                <div class="mt-8 lg:mt-14">
                    <a target="_blank" rel="noopener" href="<?php echo $next_event_meetup_url ?>" itemprop="url" class="inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 lg:px-8 lg:py-3 lg:text-xl text-lg border border-cyan md:hover:border-blue md:hover:bg-white bg-cyan text-blue focus:text-blue-dark md:hover:text-blue-lighter">Register</a>
                </div>
                <?php endif ?>

                <?php $next_event_livestream_url = get_field("event_url_livestream", $next_event->ID); ?>
                <?php if($next_event_livestream_url): ?>
                <div class="mt-8 lg:mt-14">
                    <a target="_blank" rel="noopener" href="<?php echo $next_event_livestream_url ?>" itemprop="url" class="inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 lg:px-8 lg:py-3 lg:text-xl text-lg border border-blue md:hover:bg-blue text-blue md:hover:text-white hover:border-white focus:bg-blue-dark focus:text-white bg-white">Livestream<svg class="Icon_default__gEkw6 ml-4 text-lg" aria-hidden="true"><use xlink:href="#youtube"></use></svg></a>
                </div>
                <?php endif ?>

            </div>
        </div>
        <div class="md:order-first">
            <time class="block text-lg font-bold md:text-xl text-cyan" datetime="<?php echo date_i18n('Y-m-d', $next_event_date_unix) ?>" itemprop="startDate"><?php echo date_i18n('F Y', $next_event_date_unix) ?></time>
            <time class="block mt-2" datetime="<?php echo date('H:m', $next_event_date_unix) ?>" itemprop="startDate"><?php echo date('H:m', $next_event_date_unix) ?></time>
            <p itemprop="location"><?php the_field('event_venue', $next_event) ?></p>
            <div itemscope="" itemprop="performer" itemtype="https://schema.org/Person">
                <p class="mt-10 text-lg font-bold md:text-xl text-cyan" itemprop="name"><?php echo $next_event_speakers[0]->post_title ?></p>
                <p itemprop="jobTitle" class="mt-2"><?php the_field('event_speaker_job', $next_event); ?></p>
            </div>
        </div>
    </div>
</section>

<main class="px-4 mx-auto mb-20 max-w-7xl">
    <section>
        <div class="mt-12 md:mt-28 md:grid grid-cols-2 gap-6">
            <h2 class="text-xl font-bold col-span-2 md:text-xl lg:text-2xl" itemprop="name">Events</h2>
            <p class="mt-2 link">Let us know if you would like to <a href="https://bit.ly/webmardi-talk" target="_blank" rel="noopener">speak at webmardi</a> or a topic you would like <a href="https://bit.ly/webmardi-wishes" target="_blank" rel="noopener">hear about</a>.</p>
            <div class="mt-6 md:text-right md:mt-0">
                <a target="_blank" rel="noopener" href="https://www.meetup.com/webmardi/" itemprop="url" class="inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 border border-blue md:hover:bg-blue text-blue md:hover:text-white hover:border-white focus:bg-blue-dark focus:text-white bg-white">View on Meetup</a>
            </div>
        </div>
        <h3 class="pb-6 mt-10 text-lg font-bold border-b-4 md:text-xl border-blue">All events</h3>

        <?php $events = get_webmardi_event_2023(); ?>
        <ul>
            <?php foreach($events as $event): ?>
              <?php $event_speakers = get_field("events_speakers", $event); ?>
              <?php $event_date_unix = strtotime(get_field("event_when", $event)); ?>
              <?php $event_meetup_url = get_field("event_url_meetup", $event); ?>
              <?php $event_livestream_url = get_field("event_url_livestream", $event); ?>

                <li itemscope="" itemtype="https://schema.org/Event" class="py-6 border-b grid sm:grid-cols-12 gap-6 border-blue">
                    <div class="sm:col-span-8 lg:col-span-5">
                        <a class="hover:underline" href="<?php the_permalink($event) ?>"><h4 class="text-base font-bold md:text-lg"><?php echo $event->post_title ?></h4></a>
                        <div class="mt-2 space-x-2">
                          <?php $categories = get_the_terms($event, 'event_categories'); ?>
                          <?php foreach($categories as $category): ?>
                            <span class="text-xs uppercase border px-1.5 py-0.5 border-blue">
                                <svg class="Icon_default__gEkw6 mr-1 text-xs" aria-hidden="true">
                                    <use xlink:href="#<?php echo $category->slug ?>"></use>
                                </svg> <?php echo $category->name ?>
                            </span>
                          <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="sm:order-first sm:col-span-4 lg:col-span-2">
                        <time class="block text-base font-bold md:text-lg" datetime="<?php echo date_i18n('Y-m-d', $event_date_unix) ?>" itemprop="startDate"><?php echo date_i18n('F Y', $event_date_unix) ?></time>
                        <time class="block mt-2 text-sm" datetime="<?php echo date('H:m', $event_date_unix) ?>" itemprop="startDate"><?php echo date('H:m', $event_date_unix) ?></time>
                        <p class="text-sm" itemprop="location"><?php the_field('event_venue', $event) ?></p>
                    </div>
                    <div itemscope="" itemprop="performer" itemtype="https://schema.org/Person" class="sm:col-span-8 lg:col-span-3 link"><a href="#" target="_blank" class="text-sm" itemprop="name" rel="noopener"><?php echo $event_speakers[0]->post_title ?></a>
                        <p itemprop="jobTitle" class="mt-1 text-sm"><?php the_field('event_speaker_job', $event); ?></p>
                    </div>
                    <div class="flex flex-wrap items-center sm:justify-end sm:col-span-4 lg:col-span-2 gap-1">
                        <?php if($event_livestream_url): ?>
                            <a target="_blank" rel="noopener" href="<?php echo $event_livestream_url ?>" itemprop="url" class="inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 border border-blue md:hover:bg-blue text-blue md:hover:text-white hover:border-white focus:bg-blue-dark focus:text-white bg-white">Livestream<svg class="Icon_default__gEkw6 ml-4 text-lg" aria-hidden="true"><use xlink:href="#youtube"></use></svg></a>
                        <?php endif; ?>
                        <?php if($event_meetup_url): ?>
                            <a target="_blank" rel="noopener" href="<?php echo $event_meetup_url ?>" itemprop="url" class="inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 border border-blue md:hover:border-cyan md:hover:bg-cyan focus:bg-cyan bg-blue text-white focus:text-blue-dark md:hover:text-blue">Subscribe</a>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <a class="mt-8 inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 border border-blue md:hover:bg-blue text-blue md:hover:text-white hover:border-white focus:bg-blue-dark focus:text-white bg-white" href="<?php echo get_post_type_archive_link('event') ?>">View more</a>
    </section>
</main>

<?php get_footer(); ?>
