<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="header">
        <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
        <?php edit_post_link(); ?>
    </header>

    <?php the_content(); ?>
</article>

<?php endwhile; endif; ?>

<a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a>

<?php get_footer(); ?>