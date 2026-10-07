<?php
/**
 * Footer used by WordPress fallback and WooCommerce templates.
 *
 * @package ATUS_Clothing
 */
?>
<footer class="site-footer">
    <div class="container footer-main"><div class="footer-brand"><span class="wordmark"><span class="wordmark-main">atus</span><span class="wordmark-sub">clothing</span></span><p><?php echo wp_kses_post( atus_clothing_option( 'footer_tagline' ) ); ?></p></div><div class="footer-address"><h2>Ghé ATUS tại Hà Nội</h2><address><?php echo wp_kses_post( atus_clothing_option( 'address' ) ); ?></address></div><div class="footer-links"><h2>Kết nối với ATUS</h2><a href="<?php echo esc_url( atus_clothing_option( 'shopee_url' ) ); ?>" target="_blank" rel="noopener noreferrer">Gian hàng Shopee</a><a href="<?php echo esc_url( atus_clothing_option( 'zalo_url' ) ); ?>" target="_blank" rel="noopener noreferrer">Zalo <?php echo esc_html( atus_clothing_option( 'phone_display' ) ); ?></a></div></div>
    <div class="container footer-bottom"><p>© <?php echo esc_html( wp_date( 'Y' ) ); ?> ATUS Clothing</p><a href="#top">Lên đầu trang ↑</a></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
