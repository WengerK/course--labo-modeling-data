<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="max-w-3xl px-4 mx-auto my-20" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="header">
        <h1 class="text-xl font-bold col-span-2 md:text-xl lg:text-2xl" itemprop="name"><?php the_title(); ?></h1>
    </header>

    <p class="mt-12"><?php the_field('event_desc') ?></p>
</article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
