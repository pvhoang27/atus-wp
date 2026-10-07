<?php
/**
 * Not found template.
 *
 * @package ATUS_Clothing
 */

get_header();
?>
<main class="container section-space" id="main">
    <section class="section-space">
        <span class="section-label">Trang này không còn ở đây</span>
        <h1>Mình về ATUS nhé.</h1>
        <p class="hero-description">Đường dẫn có thể đã thay đổi. Bạn vẫn có thể khám phá áo có sẵn hoặc nhắn ATUS để đặt thêu theo ý mình.</p>
        <div class="hero-actions"><a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Về trang chủ</a><a class="text-link" href="<?php echo esc_url( atus_clothing_option( 'zalo_url' ) ); ?>" target="_blank" rel="noopener noreferrer">Nhắn ATUS qua Zalo</a></div>
    </section>
</main>
<?php get_footer(); ?>
