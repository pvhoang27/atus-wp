<?php
/**
 * Reusable post card.
 *
 * @package ATUS_Clothing
 */
?>
<article <?php post_class( 'journal-card' ); ?>>
    <a class="journal-image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
        <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large', array( 'loading' => 'lazy', 'decoding' => 'async' ) ); else : ?><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/atus-collection.png' ); ?>" alt="" loading="lazy" decoding="async"><?php endif; ?>
    </a>
    <div class="journal-copy"><time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></time><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24, '…' ) ); ?></p><a class="text-link" href="<?php the_permalink(); ?>">Đọc bài viết <span aria-hidden="true">→</span></a></div>
</article>
