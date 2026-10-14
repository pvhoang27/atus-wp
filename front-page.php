<?php
/**
 * Front page template.
 *
 * @package ATUS_Clothing
 */

get_header();
$atus_zalo = esc_url( atus_clothing_option( 'zalo_url' ) );
?>

  <main id="main">
    <section class="hero container" id="top" aria-labelledby="heroTitle">
      <div class="hero-copy">
        <p class="hero-location"><span class="status-dot" aria-hidden="true"></span><?php echo wp_kses_post( atus_clothing_option( 'hero_location' ) ); ?></p>
        <h1 id="heroTitle"><?php echo wp_kses_post( atus_clothing_option( 'hero_title' ) ); ?></h1>
        <p class="hero-description"><?php echo wp_kses_post( atus_clothing_option( 'hero_description' ) ); ?></p>
        <div class="hero-actions"><a class="button " href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Thêu theo ý bạn <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a><a class="text-link" href="#shop">Khám phá áo có sẵn <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M5 7h14l1 14H4L5 7Z"/><path d="M8 8V6a4 4 0 0 1 8 0v2"/></svg></a></div>
        <div class="hero-note"><svg width="48" height="38" viewBox="0 0 48 38" fill="none" aria-hidden="true"><path d="M2 20c8-13 21 21 33 2S23-4 20 10s21 20 25 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="3 3"/></svg><p><?php echo wp_kses_post( atus_clothing_option( 'hero_note' ) ); ?></p></div>
      </div>
      <div class="hero-art">
        <svg class="hero-stitch" viewBox="0 0 700 650" fill="none" aria-hidden="true"><path d="M9 511C99 663 637 571 665 311S410 56 355 140 583 296 628 173 518-9 434 12" stroke="currentColor" stroke-width="2" stroke-dasharray="5 7"/></svg>
        <figure class="hero-photo hero-photo-main"><img src="<?php echo esc_url( atus_clothing_option( 'hero_image_1' ) ); ?>" width="1024" height="1536" alt="Mẫu áo ATUS" fetchpriority="high" decoding="async"><figcaption>Hình thêu mang dấu ấn riêng.</figcaption></figure>
        <figure class="hero-photo hero-photo-secondary"><img src="<?php echo esc_url( atus_clothing_option( 'hero_image_2' ) ); ?>" width="1024" height="1536" alt="Mẫu áo ATUS" loading="eager" decoding="async"><figcaption>Thêu để gắn kết.</figcaption></figure>
        <div class="hero-tag"><span>Made personal.</span><span>Thêu bằng chỉ.<br>Kể bằng cảm xúc.</span><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M20.4 5.6a5.5 5.5 0 0 0-7.8 0l-.6.6-.6-.6a5.5 5.5 0 0 0-7.8 7.8L12 22l8.4-8.6a5.5 5.5 0 0 0 0-7.8Z"/></svg></div>
      </div>
    </section>

    <div class="service-strip" role="region" aria-label="Thêu vi tính, áo thêu có sẵn, cá nhân hoá theo yêu cầu"><div class="service-track" aria-hidden="true"><span>Thêu vi tính</span><i>✳</i><span>Cá nhân hoá theo yêu cầu</span><i>✳</i><span>Áo thêu có sẵn</span><i>✳</i><span>Từ Hà Nội, với thương yêu</span><i>✳</i><span>Thêu vi tính</span><i>✳</i><span>Cá nhân hoá theo yêu cầu</span><i>✳</i><span>Áo thêu có sẵn</span><i>✳</i><span>Từ Hà Nội, với thương yêu</span><i>✳</i></div></div>

    <section class="story-section section-space container" id="story" aria-labelledby="storyTitle">
      <div class="story-intro"><span class="section-label">Một chút về ATUS</span><h2 id="storyTitle"><?php echo wp_kses_post( atus_clothing_option( 'story_title' ) ); ?></h2><p><?php echo wp_kses_post( atus_clothing_option( 'story_text' ) ); ?></p></div>
      <div class="story-occasions">
        <a href="#custom" class="occasion"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M20.4 5.6a5.5 5.5 0 0 0-7.8 0l-.6.6-.6-.6a5.5 5.5 0 0 0-7.8 7.8L12 22l8.4-8.6a5.5 5.5 0 0 0 0-7.8Z"/></svg><div><h3>Cho riêng bạn</h3><p>Tên riêng, nét vẽ, câu chữ.<br>Một dấu ấn rất mình.</p></div><span class="occasion-link" aria-hidden="true">↗</span></a>
        <a href="#shop" class="occasion"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><circle cx="8" cy="8" r="4"/><circle cx="17" cy="8" r="4"/><path d="M1 22v-2a7 7 0 0 1 14 0v2m0-8a7 7 0 0 1 9 6v2"/></svg><div><h3>Cho hai người</h3><p>Hai chiếc áo. Một kết nối.<br>Cùng nhau giữ một điều vui.</p></div><span class="occasion-link" aria-hidden="true">↗</span></a>
        <a href="#custom" class="occasion"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M5 7h14l1 14H4L5 7Z"/><path d="M8 8V6a4 4 0 0 1 8 0v2"/></svg><div><h3>Cho một món quà</h3><p>Một điều được nghĩ riêng.<br>Để người nhận thấy được thương.</p></div><span class="occasion-link" aria-hidden="true">↗</span></a>
      </div>
    </section>

    <?php
    $atus_products = function_exists( 'wc_get_products' ) ? wc_get_products(
        array(
            'status'  => 'publish',
            'limit'   => 18,
            'orderby' => 'menu_order',
            'order'   => 'ASC',
        )
    ) : array();
    ?>
    <section class="collection-section section-space" id="shop" aria-labelledby="shopTitle">
      <div class="container">
        <div class="section-heading"><div><span class="section-label">Chọn từ bộ sưu tập</span><h2 id="shopTitle"><?php echo wp_kses_post( atus_clothing_option( 'collection_title' ) ); ?></h2></div><div class="collection-note"><span class="price-label"><?php echo wp_kses_post( atus_clothing_option( 'collection_price_label' ) ); ?></span><p><?php echo wp_kses_post( atus_clothing_option( 'collection_note' ) ); ?></p></div></div>
        <div class="catalog-toolbar"><div class="catalog-filters" role="group" aria-label="Lọc mẫu áo" hidden><button type="button" class="filter-button is-active" data-filter="all" aria-pressed="true">Tất cả</button><button type="button" class="filter-button" data-filter="character" aria-pressed="false">Nhân vật yêu thích</button><button type="button" class="filter-button" data-filter="couple" aria-pressed="false">Dành cho hai người</button><button type="button" class="filter-button" data-filter="symbols" aria-pressed="false">Chữ & biểu tượng</button></div><p class="catalog-count" id="catalogCount" role="status" aria-live="polite"><?php echo esc_html( count( $atus_products ) ); ?> mẫu từ ATUS</p></div>
        <div class="product-grid" id="productGrid">
        <?php
        if ( $atus_products ) :
            foreach ( $atus_products as $atus_index => $atus_product ) :
                $atus_terms      = wp_get_post_terms( $atus_product->get_id(), 'product_cat', array( 'fields' => 'slugs' ) );
                $atus_categories = implode( ' ', array_map( 'sanitize_html_class', $atus_terms ) );
                $atus_image_id   = $atus_product->get_image_id();
                $atus_image      = $atus_image_id ? wp_get_attachment_image( $atus_image_id, 'atus-product', false, array( 'class' => 'product-image', 'loading' => 'lazy', 'decoding' => 'async' ) ) : wc_placeholder_img( 'atus-product', array( 'class' => 'product-image' ) );
                ?>
                <article class="product-card<?php echo $atus_index >= 8 ? ' is-extra' : ''; ?>" data-category="<?php echo esc_attr( $atus_categories ); ?>" data-name="<?php echo esc_attr( $atus_product->get_name() ); ?>">
                    <div class="product-photo">
                        <a class="product-image-link" href="<?php echo esc_url( $atus_product->get_permalink() ); ?>" tabindex="-1" aria-hidden="true"><?php echo wp_kses_post( $atus_image ); ?></a>
                        <button class="quick-view" type="button" aria-label="<?php echo esc_attr( sprintf( 'Xem nhanh %s', $atus_product->get_name() ) ); ?>" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
                    </div>
                    <div class="product-heading"><h3><a href="<?php echo esc_url( $atus_product->get_permalink() ); ?>"><?php echo esc_html( $atus_product->get_name() ); ?><span class="sr-only"> — xem chi tiết</span></a></h3><span class="product-price"><?php echo wp_kses_post( $atus_product->get_price_html() ); ?></span></div>
                    <p class="product-type"><?php echo esc_html( wp_strip_all_tags( wc_get_product_category_list( $atus_product->get_id(), ', ' ) ) ); ?></p>
                </article>
                <?php
            endforeach;
        else :
        ?>
          <div class="catalog-empty">
            <h3>Bộ sưu tập đang được cập nhật.</h3>
            <p>Sản phẩm sẽ xuất hiện tự động tại đây sau khi được đăng trong mục Sản phẩm của WordPress.</p>
            <?php if ( current_user_can( 'edit_products' ) ) : ?><a class="button button-outline" href="<?php echo esc_url( admin_url( 'edit.php?post_type=product' ) ); ?>">Quản lý sản phẩm</a><?php endif; ?>
          </div>
        <?php endif; ?>
        <?php // Legacy static catalog intentionally disabled; products are managed in WooCommerce. ?>
        <?php if ( false ) : ?>
        <article class="product-card" data-category="character" data-name="Spider-Gwen">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/55718158157" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/03-spider-gwen.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/03-spider-gwen-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/03-spider-gwen.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu nhân vật Spider-Gwen của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Spider-Gwen" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/55718158157" target="_blank" rel="noopener noreferrer">Spider-Gwen<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu nhân vật</p>
        </article>
        <article class="product-card" data-category="symbols couple" data-name="Be Mine">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/50267411094" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/17-be-mine.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/17-be-mine-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/17-be-mine.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu trái tim nơ Be Mine của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Be Mine" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/50267411094" target="_blank" rel="noopener noreferrer">Be Mine<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu trái tim nơ</p>
        </article>
        <article class="product-card" data-category="character couple" data-name="Tom &amp; Jerry">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/47468136731" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/12-tom-jerry.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/12-tom-jerry-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/12-tom-jerry.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu đôi Tom &amp; Jerry của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Tom &amp; Jerry" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/47468136731" target="_blank" rel="noopener noreferrer">Tom &amp; Jerry<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu đôi</p>
        </article>
        <article class="product-card" data-category="character" data-name="Gấu trúc">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/45018295778" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/15-panda.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/15-panda-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/15-panda.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu nhân vật Gấu trúc của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Gấu trúc" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/45018295778" target="_blank" rel="noopener noreferrer">Gấu trúc<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu nhân vật</p>
        </article>
        <article class="product-card" data-category="character" data-name="Kakashi Hatake">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/47268290997" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/01-kakashi.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/01-kakashi-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/01-kakashi.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu nhân vật Kakashi Hatake của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Kakashi Hatake" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/47268290997" target="_blank" rel="noopener noreferrer">Kakashi Hatake<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu nhân vật</p>
        </article>
        <article class="product-card" data-category="symbols" data-name="777 Lucky">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/57067811355" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/11-lucky-777.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/11-lucky-777-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/11-lucky-777.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu chữ &amp; biểu tượng 777 Lucky của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh 777 Lucky" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/57067811355" target="_blank" rel="noopener noreferrer">777 Lucky<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu chữ & biểu tượng</p>
        </article>
        <article class="product-card" data-category="character" data-name="The Powerpuff Girls">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/57767981828" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/09-powerpuff-girls.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/09-powerpuff-girls-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/09-powerpuff-girls.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu nhân vật The Powerpuff Girls của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh The Powerpuff Girls" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/57767981828" target="_blank" rel="noopener noreferrer">The Powerpuff Girls<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu nhân vật</p>
        </article>
        <article class="product-card" data-category="couple symbols" data-name="Trái tim đôi">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/27245799373" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/14-heart-couple.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/14-heart-couple-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/14-heart-couple.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo đôi thêu trái tim của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Trái tim đôi" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/27245799373" target="_blank" rel="noopener noreferrer">Trái tim đôi<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu đôi</p>
        </article>
        <article class="product-card is-extra" data-category="character" data-name="Spiderman">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/41384200211" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/02-spiderman.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/02-spiderman-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/02-spiderman.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu nhân vật Spiderman của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Spiderman" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/41384200211" target="_blank" rel="noopener noreferrer">Spiderman<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu nhân vật</p>
        </article>
        <article class="product-card is-extra" data-category="character" data-name="Mèo Oggy">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/52068216822" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/04-oggy.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/04-oggy-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/04-oggy.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu nhân vật Mèo Oggy của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Mèo Oggy" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/52068216822" target="_blank" rel="noopener noreferrer">Mèo Oggy<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu nhân vật</p>
        </article>
        <article class="product-card is-extra" data-category="character couple" data-name="Nick &amp; Judy">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/24998486270" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/05-zootopia.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/05-zootopia-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/05-zootopia.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo đôi Zootopia Nick &amp; Judy của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Nick &amp; Judy" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/24998486270" target="_blank" rel="noopener noreferrer">Nick &amp; Judy<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo đôi Zootopia</p>
        </article>
        <article class="product-card is-extra" data-category="couple" data-name="Khủng long đôi">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/50866778653" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/06-dino-couple.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/06-dino-couple-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/06-dino-couple.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo đôi thêu khủng long của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Khủng long đôi" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/50866778653" target="_blank" rel="noopener noreferrer">Khủng long đôi<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu đôi</p>
        </article>
        <article class="product-card is-extra" data-category="symbols" data-name="Độc Lập Tự Do">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/54866753996" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/07-doc-lap-tu-do.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/07-doc-lap-tu-do-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/07-doc-lap-tu-do.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu Việt Nam Độc Lập Tự Do của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Độc Lập Tự Do" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/54866753996" target="_blank" rel="noopener noreferrer">Độc Lập Tự Do<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu Việt Nam</p>
        </article>
        <article class="product-card is-extra" data-category="character couple" data-name="Tí Việt &amp; Na Việt">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/57917657596" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/08-ti-viet-na-viet.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/08-ti-viet-na-viet-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/08-ti-viet-na-viet.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu đôi Tí Việt &amp; Na Việt của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Tí Việt &amp; Na Việt" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/57917657596" target="_blank" rel="noopener noreferrer">Tí Việt &amp; Na Việt<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu đôi</p>
        </article>
        <article class="product-card is-extra" data-category="character couple" data-name="Hoạt hình cặp đôi">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/57667519064" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/10-cartoon-couple.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/10-cartoon-couple-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/10-cartoon-couple.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu đôi Hoạt hình cặp đôi của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Hoạt hình cặp đôi" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/57667519064" target="_blank" rel="noopener noreferrer">Hoạt hình cặp đôi<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu đôi</p>
        </article>
        <article class="product-card is-extra" data-category="symbols couple" data-name="Trái tim">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/40234493635" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/13-heart.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/13-heart-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/13-heart.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu biểu tượng Trái tim của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Trái tim" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/40234493635" target="_blank" rel="noopener noreferrer">Trái tim<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu biểu tượng</p>
        </article>
        <article class="product-card is-extra" data-category="symbols" data-name="Espresso Yourself">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/43534435050" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/16-espresso-yourself.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/16-espresso-yourself-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/16-espresso-yourself.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo hình mèo &amp; cà phê Espresso Yourself của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Espresso Yourself" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/43534435050" target="_blank" rel="noopener noreferrer">Espresso Yourself<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo hình mèo & cà phê</p>
        </article>
        <article class="product-card is-extra" data-category="character" data-name="Elmo">
          <div class="product-photo">
            <a class="product-image-link" href="https://shopee.vn/product/1912950911/46817408289" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true"><img class="product-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/18-elmo.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/18-elmo-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/18-elmo.webp 960w" sizes="(max-width: 600px) 50vw, (max-width: 1000px) 40vw, 24vw" width="960" height="960" alt="Áo thêu nhân vật Elmo của ATUS Clothing" loading="lazy" decoding="async"></a>
            <button class="quick-view" type="button" aria-label="Xem nhanh Elmo" data-quick-view hidden>Xem nhanh <span aria-hidden="true">+</span></button>
          </div>
          <div class="product-heading"><h3><a href="https://shopee.vn/product/1912950911/46817408289" target="_blank" rel="noopener noreferrer">Elmo<span class="sr-only"> — xem trên Shopee</span></a></h3><span class="product-price">280.000đ</span></div>
          <p class="product-type">Áo thêu nhân vật</p>
        </article>
        <?php endif; ?>
        </div>
        <?php if ( $atus_products ) : ?><div class="catalog-footer"><button class="button button-outline" id="catalogToggle" type="button" aria-expanded="false" aria-controls="productGrid" hidden>Xem thêm sản phẩm <span aria-hidden="true">+</span></button><a class="text-link shopee-link" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Xem tất cả sản phẩm <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></div><?php endif; ?>
        <p class="catalog-help"><?php echo $atus_products ? 'Chọn màu và kích cỡ tại trang chi tiết sản phẩm.' : 'ATUS đang chuẩn bị sản phẩm để đăng lên website.'; ?> Cần tư vấn? <a href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Nhắn ATUS qua Zalo.</a></p>
      </div>
    </section>

    <section class="custom-section section-space" id="custom" aria-labelledby="customTitle">
      <div class="container custom-layout">
        <div class="custom-art"><div class="custom-mount"><img class="custom-image" src="<?php echo esc_url( atus_clothing_option( 'custom_image' ) ); ?>" width="960" height="960" alt="Mẫu thêu theo yêu cầu của ATUS" loading="lazy" decoding="async"><span class="fabric-label"><span>atus clothing</span><span>Những sợi chỉ gắn kết.</span></span></div><div class="custom-art-caption"><svg width="45" height="30" viewBox="0 0 45 30" fill="none" aria-hidden="true"><path d="M3 25c6-19 24-24 36-18m-9-5 10 4-5 10" stroke="currentColor" stroke-width="1.5"/></svg><span>Một ý tưởng. Hai nửa đáng yêu.</span></div></div>
        <div class="custom-copy"><span class="section-label">Dịch vụ thêu vi tính theo yêu cầu</span><h2 id="customTitle"><?php echo wp_kses_post( atus_clothing_option( 'custom_title' ) ); ?></h2><p><?php echo wp_kses_post( atus_clothing_option( 'custom_text' ) ); ?></p><div class="custom-options"><span>Tên & câu chữ</span><span>Hình vẽ & biểu tượng</span><span>Polo & đồng phục</span><span>Áo đôi & quà tặng</span></div><a class="button " href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Gửi mẫu & nhận báo giá <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a><p class="custom-small">Báo giá riêng theo thiết kế và số lượng qua Zalo.</p></div>
      </div>
    </section>


    <section class="services-section section-space" id="services" aria-labelledby="servicesTitle">
      <div class="container">
        <div class="services-intro"><div><span class="section-label">Tư vấn · Thiết kế mẫu · Thêu theo yêu cầu</span><h2 id="servicesTitle"><?php echo wp_kses_post( atus_clothing_option( 'services_title' ) ); ?></h2></div><p><?php echo wp_kses_post( atus_clothing_option( 'services_text' ) ); ?></p></div>
        <div class="service-tabs" role="tablist" aria-label="Chọn loại áo cần tư vấn" hidden>
          <button type="button" id="tab-polo" role="tab" aria-controls="service-polo" aria-selected="true" data-service-tab="polo">Áo polo</button>
          <button type="button" id="tab-uniform" role="tab" aria-controls="service-uniform" aria-selected="false" tabindex="-1" data-service-tab="uniform">Áo đồng phục</button>
          <button type="button" id="tab-couple" role="tab" aria-controls="service-couple" aria-selected="false" tabindex="-1" data-service-tab="couple">Áo đôi</button>
        </div>
        <div class="service-panel" id="service-polo" data-service-panel="polo">
          <div class="service-visual"><img id="poloPreview" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/polo-white.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/polo-white-520.webp 520w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/polo-white.webp 1000w" sizes="(max-width: 700px) 90vw, 45vw" width="1000" height="994" loading="lazy" decoding="async" alt="Gợi ý phôi áo polo trắng trên ba ma-nơ-canh"><span class="service-image-label">Polo / Gợi ý phôi áo</span></div>
          <div class="service-copy"><span class="section-label">Lịch sự, và có dấu ấn riêng</span><h3><?php echo wp_kses_post( atus_clothing_option( 'polo_title' ) ); ?></h3><p><?php echo wp_kses_post( atus_clothing_option( 'polo_text' ) ); ?></p>
            <div class="polo-colors" role="group" aria-label="Xem màu áo polo" hidden><button type="button" class="polo-swatch" data-polo-color="white" aria-pressed="true"><span class="swatch-dot swatch-white" aria-hidden="true"></span>Trắng</button><button type="button" class="polo-swatch" data-polo-color="black" aria-pressed="false"><span class="swatch-dot swatch-black" aria-hidden="true"></span>Đen</button></div>
            <p class="service-image-note" id="poloColorNote" role="status" aria-live="polite">Ảnh minh họa phôi áo polo trắng. Phom áo và màu thực tế được xác nhận khi tư vấn.</p>
            <ul class="service-features"><li>Gợi ý bố cục từ logo, tên hoặc ý tưởng của bạn</li><li>Trao đổi vị trí, kích thước và màu chỉ</li><li>Báo giá theo mẫu thêu và số lượng</li></ul>
            <div class="service-actions"><a class="button" href="#positions">Chọn vị trí thêu <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a><a class="text-link" href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Tư vấn áo polo</a></div>
          </div>
        </div>
        <div class="service-panel" id="service-uniform" data-service-panel="uniform">
          <div class="service-visual"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/polo-black.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/polo-black-520.webp 520w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/polo-black.webp 1000w" sizes="(max-width: 700px) 90vw, 45vw" width="1000" height="978" loading="lazy" decoding="async" alt="Gợi ý phối màu polo đen để tham khảo khi đặt đồng phục"><span class="service-image-label">Đồng phục / Thiết kế theo đội nhóm</span></div>
          <div class="service-copy"><span class="section-label">Cùng một đội. Cùng một dấu ấn.</span><h3><?php echo wp_kses_post( atus_clothing_option( 'uniform_title' ) ); ?></h3><p><?php echo wp_kses_post( atus_clothing_option( 'uniform_text' ) ); ?></p><p class="service-image-note">Polo đen là ảnh phối màu tham khảo. Kiểu áo, màu sắc và mẫu thêu sẽ được trao đổi riêng.</p>
            <ul class="service-features"><li>Tư vấn vị trí đặt logo, tên và câu chữ</li><li>Thiết kế mẫu thêu theo nhận diện của nhóm</li><li>Trao đổi số lượng, bảng size và ngày cần áo</li></ul>
            <div class="service-actions"><a class="button" href="#positions">Chọn vị trí thêu <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a><a class="text-link" href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Tư vấn đồng phục</a></div>
          </div>
        </div>
        <div class="service-panel" id="service-couple" data-service-panel="couple">
          <div class="service-visual service-visual-couple"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/10-cartoon-couple.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/10-cartoon-couple-480.webp 480w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/products/web/10-cartoon-couple.webp 960w" sizes="(max-width: 700px) 90vw, 45vw" width="960" height="960" loading="lazy" decoding="async" alt="Gợi ý áo đôi thêu nhân vật từ bộ sưu tập ATUS"><span class="service-image-label">Áo đôi / Hai chiếc áo, một câu chuyện</span></div>
          <div class="service-copy"><span class="section-label">Một điều riêng của hai người</span><h3><?php echo wp_kses_post( atus_clothing_option( 'couple_title' ) ); ?></h3><p><?php echo wp_kses_post( atus_clothing_option( 'couple_text' ) ); ?></p>
            <ul class="service-features"><li>Tư vấn ý tưởng từ kỷ niệm và hình ảnh của bạn</li><li>Chọn mẫu giống nhau hoặc hai chi tiết kết nối</li><li>Trao đổi màu áo, vị trí và kích thước thêu</li></ul>
            <div class="service-actions"><a class="button" href="#positions">Chọn vị trí thêu <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a><a class="text-link" href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Tư vấn áo đôi</a></div>
          </div>
        </div>
        <p class="services-footnote">Các dịch vụ thiết kế và thêu theo yêu cầu được báo giá riêng qua Zalo. Giá 280.000đ ở bộ sưu tập áp dụng cho các mẫu áo có sẵn.</p>
      </div>
    </section>

    <section class="positions-section section-space" id="positions" aria-labelledby="positionsTitle">
      <div class="container">
        <div class="positions-heading"><div><span class="section-label">Đặt hình thêu đúng chỗ</span><h2 id="positionsTitle"><?php echo wp_kses_post( atus_clothing_option( 'positions_title' ) ); ?></h2></div><p><?php echo wp_kses_post( atus_clothing_option( 'positions_text' ) ); ?></p></div>
        <figure class="positions-fallback"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/embroidery-positions.webp" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/embroidery-positions.webp" width="1024" height="1536" alt="Bảng minh họa 16 vị trí thêu ATUS: mặt trước, tay áo và mặt sau" loading="lazy"></a><figcaption>Bấm vào ảnh để xem bảng vị trí thêu đầy đủ.</figcaption></figure>
        <div class="placement-interactive" hidden><div class="placement-mobile-picker"><label for="placementSelect">Chọn vị trí thêu</label><select id="placementSelect"><optgroup label="Mặt trước"><option value="01">01 / Toàn bộ mặt trước</option><option value="02">02 / Lớn mặt trước</option><option value="03">03 / Giữa ngực</option><option value="04">04 / Ngang ngực</option><option value="05">05 / Ngực phải</option><option value="06" selected>06 / Ngực trái</option><option value="09">09 / Dọc bên phải</option><option value="10">10 / Dọc bên trái</option><option value="11">11 / Lai trước bên phải</option><option value="12">12 / Lai trước bên trái</option></optgroup><optgroup label="Tay áo"><option value="07">07 / Tay phải</option><option value="08">08 / Tay trái</option></optgroup><optgroup label="Mặt sau"><option value="13">13 / Toàn bộ mặt sau</option><option value="14">14 / Lớn mặt sau</option><option value="15">15 / Sau gáy (phía trong)</option><option value="16">16 / Ngang vai sau</option></optgroup></select></div>
          <div class="placement-preview">
            <div class="placement-view-label" id="placementView">Mặt trước</div>
            <svg class="placement-shirt" id="placementSvg" viewBox="0 0 360 370" role="img" aria-labelledby="placementSvgTitle"><title id="placementSvgTitle">Minh họa vị trí thêu ngực trái</title><path class="shirt-outline" d="M118 43 Q180 69 242 43 L322 88 286 160 251 141 251 325 109 325 109 141 74 160 38 88Z"/><path class="shirt-neck" id="placementNeck" d="M142 48 Q180 97 218 48"/><path class="shirt-seams" d="M109 141 99 91M251 141 261 91M111 315H249M46 92 78 147M314 92 282 147"/><g class="shirt-highlight" id="placementHighlight"><rect x="208" y="108" width="27" height="27" rx="2"/></g></svg>
            <div class="placement-caption" role="status" aria-live="polite" aria-atomic="true"><h3 id="placementName">06 / Ngực trái</h3><p id="placementDescription">Logo, tên hoặc hình nhỏ ở ngực trái, tính theo phía người mặc.</p></div>
            <a class="text-link placement-original" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/services/embroidery-positions.webp" target="_blank" rel="noopener">Xem bảng 16 vị trí đầy đủ <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
          </div>
          <fieldset class="placement-choices"><legend class="sr-only">Chọn một trong 16 vị trí thêu</legend><div class="position-group"><h3>Mặt trước</h3><div class="position-options"><label class="position-option"><input type="radio" name="embroidery-position" value="01"><span><small>01</small>Toàn bộ mặt trước</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="02"><span><small>02</small>Lớn mặt trước</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="03"><span><small>03</small>Giữa ngực</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="04"><span><small>04</small>Ngang ngực</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="05"><span><small>05</small>Ngực phải</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="06" checked><span><small>06</small>Ngực trái</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="09"><span><small>09</small>Dọc bên phải</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="10"><span><small>10</small>Dọc bên trái</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="11"><span><small>11</small>Lai trước bên phải</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="12"><span><small>12</small>Lai trước bên trái</span></label></div></div><div class="position-group"><h3>Tay áo</h3><div class="position-options"><label class="position-option"><input type="radio" name="embroidery-position" value="07"><span><small>07</small>Tay phải</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="08"><span><small>08</small>Tay trái</span></label></div></div><div class="position-group"><h3>Mặt sau</h3><div class="position-options"><label class="position-option"><input type="radio" name="embroidery-position" value="13"><span><small>13</small>Toàn bộ mặt sau</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="14"><span><small>14</small>Lớn mặt sau</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="15"><span><small>15</small>Sau gáy (phía trong)</span></label><label class="position-option"><input type="radio" name="embroidery-position" value="16"><span><small>16</small>Ngang vai sau</span></label></div></div></fieldset>
        </div>
        <div class="consultation-brief" hidden>
          <div><span class="section-label">Gửi ATUS ý tưởng của bạn</span><p id="consultationSummary" aria-live="polite">Áo polo · Trắng · Ngực trái</p><small>Gửi kèm hình tham khảo, số lượng và ngày bạn cần áo khi nhắn Zalo.</small></div>
          <div class="consultation-actions"><button type="button" class="button button-outline" id="copyConsultation">Sao chép yêu cầu</button><a class="button" href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Mở Zalo tư vấn <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></div>
          <p class="consultation-status" id="consultationStatus" role="status" aria-live="polite"></p>
        </div>
      </div>
    </section>

    <section class="process-section section-space container" aria-labelledby="processTitle">
      <div class="process-heading"><span class="section-label">Từ ý tưởng đến chiếc áo</span><h2 id="processTitle"><?php echo wp_kses_post( atus_clothing_option( 'process_title' ) ); ?></h2><p><?php echo wp_kses_post( atus_clothing_option( 'process_text' ) ); ?></p></div>
      <ol class="process-list">
        <li><span class="step-number" aria-hidden="true">01</span><h3>Kể ATUS nghe</h3><p>Gửi ảnh tham khảo hoặc mô tả ý tưởng. Thêm số lượng và ngày bạn cần áo, nếu đã có dự định.</p></li>
        <li><span class="step-number" aria-hidden="true">02</span><h3>Cùng chọn từng chi tiết</h3><p>Trao đổi kiểu áo, vị trí thêu, kích thước và màu chỉ để ý tưởng phù hợp với thực tế.</p></li>
        <li><span class="step-number" aria-hidden="true">03</span><h3>Chốt mẫu, hẹn ngày nhận</h3><p>Xác nhận thiết kế, chi phí và thời gian hoàn thiện với ATUS trước khi tiến hành đặt thêu.</p></li>
      </ol>
    </section>

    <section class="lookbook" aria-label="Cảm hứng mặc áo ATUS">
      <div class="lookbook-photo"><img src="<?php echo esc_url( atus_clothing_option( 'lookbook_image_1' ) ); ?>" width="960" height="960" alt="Cảm hứng áo thêu ATUS" loading="lazy" decoding="async"></div>
      <div class="lookbook-note"><span>Wear what you love.</span><h2><?php echo wp_kses_post( atus_clothing_option( 'lookbook_title' ) ); ?></h2><p><?php echo wp_kses_post( atus_clothing_option( 'lookbook_text' ) ); ?></p><a class="text-link" href="#shop">Tìm mẫu của bạn <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></div>
      <div class="lookbook-photo lookbook-photo-last"><img src="<?php echo esc_url( atus_clothing_option( 'lookbook_image_2' ) ); ?>" width="960" height="960" alt="Cảm hứng áo thêu ATUS" loading="lazy" decoding="async"></div>
    </section>

    <?php
    $atus_journal = new WP_Query(
        array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'posts_per_page'      => 3,
            'ignore_sticky_posts' => true,
        )
    );
    if ( $atus_journal->have_posts() ) :
        $atus_posts_page_id = (int) get_option( 'page_for_posts' );
        $atus_journal_url   = $atus_posts_page_id ? get_permalink( $atus_posts_page_id ) : add_query_arg( 'atus_journal', '1', home_url( '/' ) );
    ?>
    <section class="journal-section section-space container" id="journal" aria-labelledby="journalTitle">
      <div class="journal-heading"><div><span class="section-label">Góc nhỏ của ATUS</span><h2 id="journalTitle"><?php echo wp_kses_post( atus_clothing_option( 'journal_title' ) ); ?></h2></div><div class="journal-intro"><p><?php echo wp_kses_post( atus_clothing_option( 'journal_text' ) ); ?></p><a class="text-link journal-all-link" href="<?php echo esc_url( $atus_journal_url ); ?>">Xem tất cả bài viết <span aria-hidden="true">→</span></a></div></div>
      <div class="journal-grid">
        <?php while ( $atus_journal->have_posts() ) : $atus_journal->the_post(); ?>
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
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24, '…' ) ); ?></p>
              <a class="text-link" href="<?php the_permalink(); ?>">Đọc bài viết <span aria-hidden="true">→</span></a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
    </section>
    <?php wp_reset_postdata(); endif; ?>

    <section class="faq-section section-space container" id="faq" aria-labelledby="faqTitle">
      <div class="faq-heading"><span class="section-label">Một vài điều bạn có thể đang hỏi</span><h2 id="faqTitle"><?php echo wp_kses_post( atus_clothing_option( 'faq_title' ) ); ?></h2><p><?php echo wp_kses_post( atus_clothing_option( 'faq_intro' ) ); ?></p><a class="text-link" href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Zalo <?php echo esc_html( atus_clothing_option( 'phone_display' ) ); ?> <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></div>
      <div class="faq-list"><?php for ( $atus_faq_i = 1; $atus_faq_i <= 5; $atus_faq_i++ ) : ?><details><summary><?php echo wp_kses_post( atus_clothing_option( 'faq_' . $atus_faq_i . '_q' ) ); ?><span aria-hidden="true">+</span></summary><p><?php echo wp_kses_post( atus_clothing_option( 'faq_' . $atus_faq_i . '_a' ) ); ?></p></details><?php endfor; ?></div>
    </section>

    <section class="closing-section">
      <div class="container closing-inner"><div><span class="section-label">Từ Hà Nội, gửi một điều riêng</span><h2><?php echo wp_kses_post( atus_clothing_option( 'closing_title' ) ); ?></h2></div><div class="closing-action"><a class="button button-light" href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Nhắn ATUS qua Zalo <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a><a href="tel:<?php echo esc_attr( atus_clothing_option( 'phone' ) ); ?>">Hoặc gọi <?php echo esc_html( atus_clothing_option( 'phone_display' ) ); ?></a></div></div>
      <svg class="closing-thread" viewBox="0 0 1200 130" fill="none" preserveAspectRatio="none" aria-hidden="true"><path d="M-10 90C270 50 300 132 492 90s150-137 108-58 209 74 601 38" stroke="currentColor" stroke-width="1.5" stroke-dasharray="5 6"/></svg>
    </section>
  </main>

  <dialog class="product-dialog" id="productDialog" aria-labelledby="dialogTitle">
    <form method="dialog"><button class="dialog-close" aria-label="Đóng xem nhanh" autofocus>×</button></form>
    <div class="dialog-layout"><img id="dialogImage" width="960" height="960" alt=""><div class="dialog-copy"><span class="section-label">Từ bộ sưu tập ATUS</span><h2 id="dialogTitle"></h2><p id="dialogType"></p><p class="dialog-price">280.000đ</p><p>Xem lựa chọn màu, kích cỡ và thông tin chi tiết trên trang sản phẩm.</p><a id="dialogShopLink" class="button"<?php echo $atus_products ? '' : ' target="_blank" rel="noopener noreferrer"'; ?>>Xem sản phẩm <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M5 7h14l1 14H4L5 7Z"/><path d="M8 8V6a4 4 0 0 1 8 0v2"/></svg></a><a class="text-link" href="<?php echo $atus_zalo; ?>" target="_blank" rel="noopener noreferrer">Tư vấn mẫu qua Zalo <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></div></div>
  </dialog>
<?php get_footer(); ?>
