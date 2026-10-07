<?php
/**
 * WooCommerce wrapper.
 *
 * @package ATUS_Clothing
 */

get_header();
?>
<main class="container section-space atus-woocommerce" id="main">
    <?php woocommerce_content(); ?>
</main>
<?php get_footer(); ?>

