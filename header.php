<?php
/**
 * Header used by WordPress fallback and WooCommerce templates.
 *
 * @package ATUS_Clothing
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Đi đến nội dung', 'atus-clothing' ); ?></a>
<div class="announcement"><span><?php echo wp_kses_post( atus_clothing_option( 'announcement' ) ); ?></span><a href="<?php echo esc_url( atus_clothing_option( 'zalo_url' ) ); ?>" target="_blank" rel="noopener noreferrer">Cùng ATUS lên ý tưởng</a></div>
<header class="site-header">
    <div class="header-inner container">
        <a class="wordmark" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="ATUS Clothing — Trang chủ"><span class="wordmark-main">atus</span><span class="wordmark-sub">clothing</span></a>
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'main-nav', 'menu_class' => 'atus-menu', 'depth' => 1 ) ); ?>
        <?php else : ?>
            <nav class="main-nav"><a href="<?php echo esc_url( home_url( '/#shop' ) ); ?>">Áo có sẵn</a><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Dịch vụ thêu</a><a href="<?php echo esc_url( home_url( '/#journal' ) ); ?>">Bài viết</a><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">Hỏi & đáp</a></nav>
        <?php endif; ?>
        <a class="button button-small" href="<?php echo esc_url( atus_clothing_option( 'zalo_url' ) ); ?>" target="_blank" rel="noopener noreferrer">Gửi ý tưởng</a>
    </div>
</header>
