<?php
/**
 * Fallback template.
 *
 * @package ATUS_Clothing
 */

get_header();
?>
<main class="container section-space" id="main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <h1><?php esc_html_e( 'Không tìm thấy nội dung.', 'atus-clothing' ); ?></h1>
    <?php endif; ?>
</main>
<?php get_footer(); ?>

