<?php get_header(); ?>

<div>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : ?>
    <?php the_post(); ?>
    <article class="max-w-3xl px-4 mx-auto my-20" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="header">
            <?php edit_post_link(); ?>
            <h1 class="entry-title text-xl font-bold col-span-2 md:text-xl lg:text-2xl" itemprop="name"><?php the_title(); ?></h1>
        </header>

        <p class="mt-12"><?php the_content(); ?></p>
    </article>
  <?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>
