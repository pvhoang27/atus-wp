<?php
/**
 * Archive template.
 *
 * @package ATUS_Clothing
 */

get_header();
?>
<main class="container section-space" id="main">
    <header class="journal-archive-header"><div><span class="section-label">Bài viết ATUS</span><h1><?php the_archive_title(); ?></h1></div><?php the_archive_description( '<div>', '</div>' ); ?></header>
    <?php if ( have_posts() ) : ?><div class="journal-grid">
        <?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/post', 'card' ); endwhile; ?>
    </div><nav class="journal-pagination" aria-label="Phân trang bài viết"><?php the_posts_pagination( array( 'prev_text' => '←', 'next_text' => '→' ) ); ?></nav>
    <?php else : ?><p>Chưa có bài viết nào.</p><?php endif; ?>
</main>
<?php get_footer(); ?>
