<?php
/**
 * Footer used by WordPress fallback and WooCommerce templates.
 *
 * @package ATUS_Clothing
 */
?>
<footer class="site-footer">
    <div class="container footer-main"><div class="footer-brand"><a class="wordmark" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="ATUS Clothing — Trang chủ"><span class="wordmark-main">atus</span><span class="wordmark-sub">clothing</span></a><p><?php echo wp_kses_post( atus_clothing_option( 'footer_tagline' ) ); ?></p></div><div class="footer-address"><h2>Ghé ATUS tại Hà Nội</h2><address><?php echo wp_kses_post( atus_clothing_option( 'address' ) ); ?></address><a href="<?php echo esc_url( atus_clothing_option( 'map_url' ) ); ?>" target="_blank" rel="noopener noreferrer">Xem đường đi ↗</a></div><div class="footer-links"><h2>Kết nối với ATUS</h2><a href="<?php echo esc_url( atus_clothing_option( 'shopee_url' ) ); ?>" target="_blank" rel="noopener noreferrer">Gian hàng Shopee</a><a href="<?php echo esc_url( atus_clothing_option( 'zalo_url' ) ); ?>" target="_blank" rel="noopener noreferrer">Zalo <?php echo esc_html( atus_clothing_option( 'phone_display' ) ); ?></a><a href="<?php echo esc_url( home_url( '/#custom' ) ); ?>">Thêu theo yêu cầu</a></div></div>
    <div class="container footer-business"><p><?php echo esc_html( atus_clothing_option( 'business_name' ) ); ?></p><p>Mã số hộ kinh doanh: <span><?php echo esc_html( atus_clothing_option( 'business_id' ) ); ?></span></p><p>Trụ sở: <?php echo esc_html( atus_clothing_option( 'business_address' ) ); ?></p></div>
    <div class="container footer-bottom"><p>© <?php echo esc_html( wp_date( 'Y' ) ); ?> ATUS Clothing</p><a href="#top">Lên đầu trang ↑</a></div>
</footer>
<a class="zalo-float" href="<?php echo esc_url( atus_clothing_option( 'zalo_url' ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat với ATUS qua Zalo"><span class="zalo-symbol">Zalo</span><span class="zalo-text">Nhắn ATUS<small><?php echo esc_html( atus_clothing_option( 'phone_display' ) ); ?></small></span></a>
<?php wp_footer(); ?>
</body>
</html>
