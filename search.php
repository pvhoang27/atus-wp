<?php
/**
 * Search results template.
 *
 * @package ATUS_Clothing
 */

get_header();
?>
<main class="container section-space" id="main">
    <header class="journal-archive-header"><div><span class="section-label">Tìm kiếm</span><h1>Kết quả cho “<?php echo esc_html( get_search_query() ); ?>”</h1></div><?php get_search_form(); ?></header>
    <?php if ( have_posts() ) : ?><div class="journal-grid">
        <?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/post', 'card' ); endwhile; ?>
    </div><nav class="journal-pagination" aria-label="Phân trang kết quả"><?php the_posts_pagination( array( 'prev_text' => '←', 'next_text' => '→' ) ); ?></nav>
    <?php else : ?><p>Không tìm thấy nội dung phù hợp.</p><?php endif; ?>
</main>
<?php get_footer(); ?>
