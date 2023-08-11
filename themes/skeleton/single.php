<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="header">
        <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
        <?php edit_post_link(); ?>
    </header>

    <?php the_content(); ?>
</article>

<!-- TODO: Here is your single page code. -->
<!-- TODO: Suggest to create single-[content-type] template for each content type. -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
