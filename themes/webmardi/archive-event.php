<?php
/**
 * The template for displaying archive pages.
 */

get_header();

$description = get_the_archive_description();
?>
<main class="px-4 mx-auto mb-20 max-w-7xl">
    <section>
        <div class="mt-12 md:grid grid-cols-2 gap-6">
            <h2 class="text-xl font-bold col-span-2 md:text-xl lg:text-2xl">Events</h2>
            <p class="mt-2 link">Let us know if you would like to speak at webmardi or a topic you would like hear about.</p>
        </div>

        <?php if ( have_posts() ) : ?>

            <?php $section_year = null ?>
            <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>
                  <?php $event_date_unix = strtotime(get_field("event_when")); ?>
                  <?php $event_year = acf_format_date($event_date_unix, 'Y'); ?>

                    <!-- Check if a new year section must be started. -->
                    <?php if ($section_year != $event_year) : ?>
                       <!-- Ensure a new year section must be closed. -->
                      <?php if ($section_year !== null) : ?>
                          </ul>
                      </div>
                      <?php endif; ?>

                        <?php $section_year = $event_year ?>
                    <div>
                        <h3 class="pb-6 mt-12 text-lg font-bold border-b-4 md:text-xl border-blue"><?php echo $event_year ?></h3>
                        <ul>
                    <?php endif; ?>

                    <li class="py-6 border-b grid sm:grid-cols-12 gap-6 border-blue">
                        <div class="sm:col-span-8 lg:col-span-5">
                            <h4 class="text-base font-bold md:text-lg"><?php the_title() ?></h4>
                            <div class="mt-2 space-x-2">
                              <?php $categories = get_the_terms(get_the_ID(), 'event_categories'); ?>
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
                            <p class="text-sm" itemprop="location"><?php the_field('event_venue') ?></p>
                        </div>

                        <?php $event_speakers = get_field("events_speakers"); ?>
                        <div itemscope="" itemprop="performer" itemtype="https://schema.org/Person" class="sm:col-span-8 lg:col-span-3 link"><a href="#" target="_blank" class="text-sm" itemprop="name" rel="noopener"><?php echo $event_speakers[0]->post_title ?></a>
                            <p itemprop="jobTitle" class="mt-1 text-sm"><?php the_field('event_speaker_job'); ?></p>
                        </div>
                        <div class="flex flex-wrap items-center sm:justify-end sm:col-span-4 lg:col-span-2 gap-1"></div>
                    </li>

            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php
get_footer();
