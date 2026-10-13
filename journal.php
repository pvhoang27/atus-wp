<?php
/**
 * Journal archive template.
 *
 * @package ATUS_Clothing
 */

get_header();
?>
<main class="container section-space" id="main">
    <header class="journal-archive-header">
        <div>
            <span class="section-label">Góc nhỏ của ATUS</span>
            <h1>Tất cả bài viết.</h1>
        </div>
        <p><?php echo wp_kses_post( atus_clothing_option( 'journal_text' ) ); ?></p>
    </header>

    <?php if ( have_posts() ) : ?>
        <div class="journal-grid">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="journal-card">
                    <a class="journal-image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large', array( 'loading' => 'lazy', 'decoding' => 'async' ) ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/atus-collection.png' ); ?>" alt="" loading="lazy" decoding="async">
                        <?php endif; ?>
                    </a>
                    <div class="journal-copy">
                        <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></time>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24, '…' ) ); ?></p>
                        <a class="text-link" href="<?php the_permalink(); ?>">Đọc bài viết <span aria-hidden="true">→</span></a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        <nav class="journal-pagination" aria-label="Phân trang bài viết">
            <?php echo wp_kses_post( paginate_links( array( 'prev_text' => '←', 'next_text' => '→' ) ) ); ?>
        </nav>
    <?php else : ?>
        <p>ATUS chưa có bài viết nào.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
