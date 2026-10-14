<?php
/**
 * Standard page template.
 *
 * @package ATUS_Clothing
 */

get_header();
?>
<main class="container section-space entry-page" id="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail() ) : ?><div class="entry-featured"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
            <div class="entry-content"><?php the_content(); ?></div>
            <?php wp_link_pages(); ?>
        </article>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
