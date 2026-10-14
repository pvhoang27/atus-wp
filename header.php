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
    <meta name="theme-color" content="#181813">
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon.svg' ); ?>" type="image/svg+xml">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Đi đến nội dung', 'atus-clothing' ); ?></a>
<?php $atus_zalo = esc_url( atus_clothing_option( 'zalo_url' ) ); ?>
<div class="announcement"><span><?php echo wp_kses_post( atus_clothing_option( 'announcement' ) ); ?></span><a href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Cùng ATUS lên ý tưởng <span aria-hidden="true">→</span></a></div>
<header class="site-header">
    <div class="header-inner container">
        <a class="wordmark" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="ATUS Clothing — Trang chủ"><span class="wordmark-main">atus</span><span class="wordmark-sub">clothing</span></a>
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'main-nav', 'container_id' => 'mainNav', 'menu_class' => 'atus-menu', 'depth' => 1 ) ); ?>
        <?php else : ?>
            <nav class="main-nav" id="mainNav" aria-label="Điều hướng chính"><a href="<?php echo esc_url( home_url( '/#shop' ) ); ?>">Áo có sẵn</a><a href="<?php echo esc_url( home_url( '/#custom' ) ); ?>">Thêu theo yêu cầu</a><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Polo & đồng phục</a><a href="<?php echo esc_url( home_url( '/#journal' ) ); ?>">Bài viết</a><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">Hỏi & đáp</a></nav>
        <?php endif; ?>
        <div class="header-actions"><?php if ( function_exists( 'wc_get_cart_url' ) ) : ?><a class="header-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" aria-label="Xem giỏ hàng">Giỏ hàng <span class="header-cart-count"><?php echo esc_html( WC()->cart ? WC()->cart->get_cart_contents_count() : 0 ); ?></span></a><?php endif; ?><a class="button button-small" href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Gửi ý tưởng <span aria-hidden="true">→</span></a><button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mainNav" aria-label="Mở menu" hidden><span></span><span></span></button></div>
    </div>
</header>
