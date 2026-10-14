<?php
/**
 * Single journal post template.
 *
 * @package ATUS_Clothing
 */

get_header();
?>
<main class="container section-space entry-page" id="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <header class="entry-header">
                <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></time>
                <h1><?php the_title(); ?></h1>
            </header>
            <?php if ( has_post_thumbnail() ) : ?><div class="entry-featured"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
            <div class="entry-content"><?php the_content(); ?></div>
            <?php wp_link_pages(); ?>
        </article>
        <nav class="post-navigation" aria-label="Bài viết khác"><?php the_post_navigation( array( 'prev_text' => '← %title', 'next_text' => '%title →' ) ); ?></nav>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
