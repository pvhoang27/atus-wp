<?php
/**
 * Theme setup and the optional ATUS demo-product importer.
 *
 * @package ATUS_Clothing
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function atus_clothing_setup() {
    load_theme_textdomain( 'atus-clothing', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_image_size( 'atus-product', 960, 960, true );
    register_nav_menus( array( 'primary' => 'Menu chính' ) );
}
add_action( 'after_setup_theme', 'atus_clothing_setup' );

function atus_clothing_assets() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'atus-main', get_template_directory_uri() . '/styles.css', array(), $version );
    wp_enqueue_style( 'atus-services', get_template_directory_uri() . '/services.css', array( 'atus-main' ), $version );
    wp_enqueue_script( 'atus-main', get_template_directory_uri() . '/script.js', array(), $version, true );
    wp_enqueue_script( 'atus-services', get_template_directory_uri() . '/services.js', array(), $version, true );
    wp_localize_script( 'atus-services', 'ATUS_THEME', array( 'url' => get_template_directory_uri() ) );
}
add_action( 'wp_enqueue_scripts', 'atus_clothing_assets' );

function atus_clothing_defaults() {
    return array(
        'announcement' => 'Thêu một điều riêng. Giữ một điều thương.',
        'hero_location' => 'Thêu vi tính theo yêu cầu tại Hà Nội',
        'hero_title' => 'Những sợi chỉ<br><em>gắn kết.</em>',
        'hero_description' => 'Một hình thêu nhỏ, một điều thật riêng. Chọn chiếc áo bạn thích, hoặc cùng ATUS biến ý tưởng thành thứ có thể mặc mỗi ngày.',
        'hero_note' => 'Gửi một hình vẽ. Một lời nhắn.<br>Hay một điều bạn muốn giữ lại.',
        'story_title' => 'Có những điều,<br>mình muốn mặc lên.',
        'story_text' => 'Một nhân vật mê từ bé. Một kỷ niệm của hai người. Hay cái tên thân thuộc. ATUS dùng thêu vi tính để đưa những điều ấy lên áo, qua từng nét chỉ có hình, có sắc, có câu chuyện.',
        'collection_title' => 'Một chiếc áo. Một điều rất bạn.',
        'custom_title' => 'Bạn nghĩ ra.<br>ATUS thêu lại.',
        'custom_text' => 'Gửi một nét vẽ, tên riêng hay hình ảnh có ý nghĩa. Mình cùng trao đổi vị trí, kích thước và màu chỉ để tìm cách thể hiện đẹp trên chiếc áo của bạn.',
        'services_title' => 'Bạn muốn thêu<br>trên áo nào?',
        'services_text' => 'Từ một chiếc polo mang tên riêng đến đồng phục cho cả đội hay áo đôi có chung một câu chuyện. ATUS nhận ý tưởng, tư vấn thiết kế mẫu thêu và cùng bạn chọn cách thể hiện trên áo.',
        'polo_title' => 'Áo polo thêu<br>theo ý bạn.',
        'polo_text' => 'Thêu tên, logo hoặc một chi tiết nhỏ trên áo polo. ATUS tư vấn bố cục, màu chỉ và vị trí để mẫu thêu đi cùng phom áo.',
        'uniform_title' => 'Đồng phục mang<br>tên đội của bạn.',
        'uniform_text' => 'Cho doanh nghiệp, cửa hàng, câu lạc bộ hay một nhóm bạn. Gửi logo hoặc tên nhóm để ATUS tư vấn mẫu thêu và cách sắp xếp trên áo.',
        'couple_title' => 'Thêu kỷ niệm,<br>mặc cùng nhau.',
        'couple_text' => 'Tên viết tắt, ngày đáng nhớ, một nét vẽ hay hai hình thêu có liên kết. ATUS cùng bạn phát triển ý tưởng thành mẫu thêu cho hai chiếc áo.',
        'positions_title' => 'Một vị trí nhỏ.<br>Một cách thể hiện khác.',
        'positions_text' => 'Chọn vị trí để xem minh họa. Trái và phải được tính theo người mặc; ATUS sẽ cùng bạn điều chỉnh cho phù hợp với phom áo, chất liệu và kích thước thiết kế.',
        'process_title' => 'Bắt đầu bằng một tin nhắn.',
        'process_text' => 'Bạn chưa cần một bản thiết kế hoàn chỉnh.<br>Cứ gửi điều đang nghĩ đến, ATUS cùng bạn đi tiếp.',
        'lookbook_title' => 'Mang điều mình thích,<br>đi khắp nơi.',
        'lookbook_text' => 'Ngày đi cà phê, chuyến đi xa, hay buổi hẹn rất bình thường. Một hình thêu yêu thích cũng đủ làm chiếc áo thân quen hơn.',
        'journal_title' => 'Chuyện mới từ ATUS.',
        'journal_text' => 'Gợi ý chọn áo, chăm sóc hình thêu và những câu chuyện phía sau từng đường chỉ.',
        'faq_title' => 'Trước khi đặt áo.',
        'faq_intro' => 'Còn điều gì cần hỏi, cứ nhắn mình.',
        'faq_1_q' => 'Mình cần chuẩn bị gì để đặt thêu theo yêu cầu?',
        'faq_1_a' => 'Bạn có thể gửi ảnh tham khảo, hình vẽ hoặc mô tả ý tưởng qua Zalo. Nếu đã có lựa chọn, gửi thêm vị trí thêu, kích thước mong muốn và số lượng để ATUS tư vấn cụ thể.',
        'faq_2_q' => 'Thêu theo yêu cầu được báo giá thế nào?',
        'faq_2_a' => 'Chi phí phụ thuộc vào thiết kế, kích thước, vị trí thêu và số lượng. Gửi mẫu qua Zalo để nhận báo giá riêng.',
        'faq_3_q' => 'Mua áo có sẵn và chọn size ở đâu?',
        'faq_3_a' => 'Bấm vào mẫu áo để mở trang sản phẩm và xem màu, kích cỡ cùng các lựa chọn hiện có.',
        'faq_4_q' => 'Đơn thêu theo yêu cầu mất bao lâu?',
        'faq_4_a' => 'ATUS sẽ xác nhận thời gian theo thiết kế và số lượng bạn cần khi tư vấn.',
        'faq_5_q' => 'ATUS Clothing ở đâu?',
        'faq_5_a' => 'ATUS ở Số 4 ngõ Tạm Thương, phường Hoàn Kiếm, Hà Nội. Bạn có thể gọi hoặc nhắn Zalo trước khi ghé.',
        'closing_title' => 'Câu chuyện tiếp theo,<br>mình thêu cùng bạn.',
        'footer_tagline' => 'Những sợi chỉ gắn kết.<br>Thêu vi tính, thêu theo yêu cầu.',
        'phone' => '0877598887',
        'phone_display' => '0877 598 887',
        'zalo_url' => 'https://zalo.me/0877598887',
        'shopee_url' => 'https://shopee.vn/atus.clothing#product_list',
        'address' => 'Số 4 ngõ Tạm Thương, phường Hoàn Kiếm, Hà Nội',
        'map_url' => 'https://www.google.com/maps/search/?api=1&query=Số 4 ngõ Tạm Thương, Hoàn Kiếm, Hà Nội',
        'business_name' => 'HỘ KINH DOANH ATUS CLOTHING',
        'business_id' => '001201012835',
        'business_address' => 'Số 4 ngõ Tạm Thương, phường Hoàn Kiếm, thành phố Hà Nội, Việt Nam.',
        'hero_image_1' => get_template_directory_uri() . '/assets/hero/atus-man.jpg',
        'hero_image_2' => get_template_directory_uri() . '/assets/hero/atus-woman.jpg',
        'custom_image' => get_template_directory_uri() . '/assets/products/web/06-dino-couple.webp',
        'lookbook_image_1' => get_template_directory_uri() . '/assets/products/web/12-tom-jerry.webp',
        'lookbook_image_2' => get_template_directory_uri() . '/assets/products/web/10-cartoon-couple.webp',
    );
}

function atus_clothing_option( $key ) {
    $defaults = atus_clothing_defaults();
    return get_theme_mod( 'atus_' . $key, isset( $defaults[ $key ] ) ? $defaults[ $key ] : '' );
}

function atus_clothing_customizer( $customizer ) {
    $customizer->add_panel( 'atus_content', array( 'title' => 'Nội dung ATUS', 'priority' => 30 ) );
    $sections = array(
        'atus_home' => array( 'Trang chủ', 10 ),
        'atus_services' => array( 'Dịch vụ', 20 ),
        'atus_faq' => array( 'Hỏi & đáp', 30 ),
        'atus_contact' => array( 'Liên hệ & pháp lý', 40 ),
        'atus_images' => array( 'Hình ảnh trang chủ', 50 ),
    );
    foreach ( $sections as $id => $data ) {
        $customizer->add_section( $id, array( 'title' => $data[0], 'panel' => 'atus_content', 'priority' => $data[1] ) );
    }

    $fields = array(
        'announcement' => array( 'Dòng thông báo', 'atus_home' ), 'hero_location' => array( 'Dòng nhỏ đầu trang', 'atus_home' ),
        'hero_title' => array( 'Tiêu đề chính', 'atus_home' ), 'hero_description' => array( 'Mô tả đầu trang', 'atus_home' ),
        'hero_note' => array( 'Ghi chú đầu trang', 'atus_home' ), 'story_title' => array( 'Tiêu đề giới thiệu', 'atus_home' ),
        'story_text' => array( 'Nội dung giới thiệu', 'atus_home' ), 'collection_title' => array( 'Tiêu đề bộ sưu tập', 'atus_home' ),
        'custom_title' => array( 'Tiêu đề thêu theo yêu cầu', 'atus_services' ), 'custom_text' => array( 'Mô tả thêu theo yêu cầu', 'atus_services' ),
        'services_title' => array( 'Tiêu đề dịch vụ', 'atus_services' ), 'services_text' => array( 'Giới thiệu dịch vụ', 'atus_services' ),
        'polo_title' => array( 'Tiêu đề áo polo', 'atus_services' ), 'polo_text' => array( 'Mô tả áo polo', 'atus_services' ),
        'uniform_title' => array( 'Tiêu đề đồng phục', 'atus_services' ), 'uniform_text' => array( 'Mô tả đồng phục', 'atus_services' ),
        'couple_title' => array( 'Tiêu đề áo đôi', 'atus_services' ), 'couple_text' => array( 'Mô tả áo đôi', 'atus_services' ),
        'positions_title' => array( 'Tiêu đề vị trí thêu', 'atus_services' ), 'positions_text' => array( 'Mô tả vị trí thêu', 'atus_services' ),
        'process_title' => array( 'Tiêu đề quy trình', 'atus_services' ), 'process_text' => array( 'Mô tả quy trình', 'atus_services' ),
        'lookbook_title' => array( 'Tiêu đề cảm hứng', 'atus_home' ), 'lookbook_text' => array( 'Mô tả cảm hứng', 'atus_home' ),
        'journal_title' => array( 'Tiêu đề khu bài viết', 'atus_home' ), 'journal_text' => array( 'Mô tả khu bài viết', 'atus_home' ),
        'faq_title' => array( 'Tiêu đề FAQ', 'atus_faq' ), 'faq_intro' => array( 'Mô tả FAQ', 'atus_faq' ),
        'closing_title' => array( 'Lời mời cuối trang', 'atus_home' ), 'footer_tagline' => array( 'Khẩu hiệu chân trang', 'atus_home' ),
        'phone' => array( 'Số điện thoại (chỉ nhập số)', 'atus_contact' ), 'phone_display' => array( 'Số điện thoại hiển thị', 'atus_contact' ),
        'zalo_url' => array( 'Liên kết Zalo', 'atus_contact' ), 'shopee_url' => array( 'Liên kết Shopee', 'atus_contact' ),
        'address' => array( 'Địa chỉ hiển thị', 'atus_contact' ), 'map_url' => array( 'Liên kết Google Maps', 'atus_contact' ),
        'business_name' => array( 'Tên hộ kinh doanh', 'atus_contact' ), 'business_id' => array( 'Mã số hộ kinh doanh', 'atus_contact' ),
        'business_address' => array( 'Địa chỉ pháp lý', 'atus_contact' ),
    );
    for ( $i = 1; $i <= 5; $i++ ) {
        $fields[ 'faq_' . $i . '_q' ] = array( 'Câu hỏi ' . $i, 'atus_faq' );
        $fields[ 'faq_' . $i . '_a' ] = array( 'Câu trả lời ' . $i, 'atus_faq' );
    }
    $defaults = atus_clothing_defaults();
    foreach ( $fields as $key => $data ) {
        $customizer->add_setting( 'atus_' . $key, array( 'default' => $defaults[ $key ], 'sanitize_callback' => 'wp_kses_post', 'transport' => 'refresh' ) );
        $customizer->add_control( 'atus_' . $key, array( 'label' => $data[0], 'section' => $data[1], 'type' => 'textarea' ) );
    }

    foreach ( array( 'hero_image_1' => 'Ảnh chính bên trái', 'hero_image_2' => 'Ảnh chính bên phải', 'custom_image' => 'Ảnh thêu theo yêu cầu', 'lookbook_image_1' => 'Ảnh cảm hứng 1', 'lookbook_image_2' => 'Ảnh cảm hứng 2' ) as $key => $label ) {
        $customizer->add_setting( 'atus_' . $key, array( 'default' => $defaults[ $key ], 'sanitize_callback' => 'esc_url_raw' ) );
        $customizer->add_control( new WP_Customize_Image_Control( $customizer, 'atus_' . $key, array( 'label' => $label, 'section' => 'atus_images' ) ) );
    }
}
add_action( 'customize_register', 'atus_clothing_customizer' );

function atus_clothing_admin_menu() {
    add_theme_page( 'Cài đặt ATUS', 'Cài đặt ATUS', 'manage_options', 'atus-setup', 'atus_clothing_setup_page' );
}
add_action( 'admin_menu', 'atus_clothing_admin_menu' );

function atus_clothing_setup_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $message = '';
    if ( isset( $_POST['atus_import_products'] ) ) {
        check_admin_referer( 'atus_import_products' );
        if ( ! class_exists( 'WooCommerce' ) ) {
            $message = '<div class="notice notice-error"><p>Hãy cài và kích hoạt WooCommerce trước khi nhập sản phẩm.</p></div>';
        } else {
            $result  = atus_clothing_import_products();
            $message = sprintf(
                '<div class="notice notice-success"><p>Đã nhập %1$d sản phẩm; bỏ qua %2$d sản phẩm đã tồn tại.</p></div>',
                (int) $result['created'],
                (int) $result['skipped']
            );
        }
    }
    ?>
    <div class="wrap">
        <h1>Cài đặt ATUS Clothing</h1>
        <?php echo wp_kses_post( $message ); ?>
        <p>Trình nhập sẽ tạo 18 sản phẩm mẫu, ảnh đại diện, danh mục, hai màu Trắng/Đen và bốn kích cỡ S/M/L/XL. Có thể chạy lại an toàn; sản phẩm đã có sẽ được bỏ qua.</p>
        <form method="post">
            <?php wp_nonce_field( 'atus_import_products' ); ?>
            <?php submit_button( 'Nhập 18 sản phẩm mẫu', 'primary', 'atus_import_products' ); ?>
        </form>
    </div>
    <?php
}

function atus_clothing_catalog() {
    return array(
        array( 'spider-gwen', 'Spider-Gwen', 'character', 'Nhân vật yêu thích', '03-spider-gwen.jpg', 'Áo thêu nhân vật Spider-Gwen.' ),
        array( 'be-mine', 'Be Mine', 'symbols', 'Chữ & biểu tượng', '17-be-mine.jpg', 'Áo thêu trái tim nơ.' ),
        array( 'tom-jerry', 'Tom & Jerry', 'couple', 'Dành cho hai người', '12-tom-jerry.jpg', 'Áo thêu đôi Tom & Jerry.' ),
        array( 'gau-truc', 'Gấu trúc', 'character', 'Nhân vật yêu thích', '15-panda.jpg', 'Áo thêu nhân vật gấu trúc.' ),
        array( 'kakashi-hatake', 'Kakashi Hatake', 'character', 'Nhân vật yêu thích', '01-kakashi.jpg', 'Áo thêu nhân vật Kakashi Hatake.' ),
        array( '777-lucky', '777 Lucky', 'symbols', 'Chữ & biểu tượng', '11-lucky-777.jpg', 'Áo thêu chữ và biểu tượng 777 Lucky.' ),
        array( 'powerpuff-girls', 'The Powerpuff Girls', 'character', 'Nhân vật yêu thích', '09-powerpuff-girls.jpg', 'Áo thêu The Powerpuff Girls.' ),
        array( 'trai-tim-doi', 'Trái tim đôi', 'couple', 'Dành cho hai người', '14-heart-couple.jpg', 'Áo đôi thêu trái tim.' ),
        array( 'spiderman', 'Spiderman', 'character', 'Nhân vật yêu thích', '02-spiderman.jpg', 'Áo thêu nhân vật Spiderman.' ),
        array( 'meo-oggy', 'Mèo Oggy', 'character', 'Nhân vật yêu thích', '04-oggy.jpg', 'Áo thêu nhân vật mèo Oggy.' ),
        array( 'nick-judy', 'Nick & Judy', 'couple', 'Dành cho hai người', '05-zootopia.jpg', 'Áo đôi Zootopia Nick & Judy.' ),
        array( 'khung-long-doi', 'Khủng long đôi', 'couple', 'Dành cho hai người', '06-dino-couple.jpg', 'Áo đôi thêu khủng long.' ),
        array( 'doc-lap-tu-do', 'Độc Lập Tự Do', 'symbols', 'Chữ & biểu tượng', '07-doc-lap-tu-do.jpg', 'Áo thêu Việt Nam Độc Lập Tự Do.' ),
        array( 'ti-viet-na-viet', 'Tí Việt & Na Việt', 'couple', 'Dành cho hai người', '08-ti-viet-na-viet.jpg', 'Áo thêu đôi Tí Việt & Na Việt.' ),
        array( 'hoat-hinh-cap-doi', 'Hoạt hình cặp đôi', 'couple', 'Dành cho hai người', '10-cartoon-couple.jpg', 'Áo thêu hoạt hình dành cho hai người.' ),
        array( 'trai-tim', 'Trái tim', 'symbols', 'Chữ & biểu tượng', '13-heart.jpg', 'Áo thêu biểu tượng trái tim.' ),
        array( 'espresso-yourself', 'Espresso Yourself', 'symbols', 'Chữ & biểu tượng', '16-espresso-yourself.jpg', 'Áo thêu mèo và cà phê Espresso Yourself.' ),
        array( 'elmo', 'Elmo', 'character', 'Nhân vật yêu thích', '18-elmo.jpg', 'Áo thêu nhân vật Elmo.' ),
    );
}

function atus_clothing_import_products() {
    $result = array( 'created' => 0, 'skipped' => 0 );

    foreach ( atus_clothing_catalog() as $position => $item ) {
        list( $slug, $name, $category_slug, $category_name, $image_file, $description ) = $item;
        $existing = get_page_by_path( $slug, OBJECT, 'product' );
        if ( $existing ) {
            ++$result['skipped'];
            continue;
        }

        $term = term_exists( $category_slug, 'product_cat' );
        if ( ! $term ) {
            $term = wp_insert_term( $category_name, 'product_cat', array( 'slug' => $category_slug ) );
        }
        if ( is_wp_error( $term ) ) {
            ++$result['skipped'];
            continue;
        }
        $term_id = is_array( $term ) ? (int) $term['term_id'] : (int) $term;

        $product = new WC_Product_Variable();
        $product->set_name( $name );
        $product->set_slug( $slug );
        $product->set_status( 'publish' );
        $product->set_catalog_visibility( 'visible' );
        $product->set_description( $description . ' Sản phẩm của ATUS Clothing, thêu vi tính tại Hà Nội.' );
        $product->set_short_description( $description );
        $product->set_category_ids( array( $term_id ) );
        $product->set_menu_order( $position );

        $size = new WC_Product_Attribute();
        $size->set_name( 'Kích cỡ' );
        $size->set_options( array( 'S', 'M', 'L', 'XL' ) );
        $size->set_visible( true );
        $size->set_variation( true );

        $color = new WC_Product_Attribute();
        $color->set_name( 'Màu sắc' );
        $color->set_options( array( 'Trắng', 'Đen' ) );
        $color->set_visible( true );
        $color->set_variation( true );
        $product->set_attributes( array( $size, $color ) );

        $image_id = atus_clothing_import_image( $image_file, $name );
        if ( $image_id ) {
            $product->set_image_id( $image_id );
        }
        $product_id = $product->save();

        foreach ( array( 'S', 'M', 'L', 'XL' ) as $size_name ) {
            foreach ( array( 'Trắng', 'Đen' ) as $color_name ) {
                $variation = new WC_Product_Variation();
                $variation->set_parent_id( $product_id );
                $variation->set_attributes( array( 'kich-co' => $size_name, 'mau-sac' => $color_name ) );
                $variation->set_regular_price( '280000' );
                $variation->set_status( 'publish' );
                $variation->set_manage_stock( false );
                $variation->save();
            }
        }
        WC_Product_Variable::sync( $product_id );
        ++$result['created'];
    }

    return $result;
}

function atus_clothing_import_image( $filename, $title ) {
    $source = get_template_directory() . '/assets/products/' . $filename;
    if ( ! file_exists( $source ) ) {
        return 0;
    }

    $upload = wp_upload_bits( $filename, null, file_get_contents( $source ) );
    if ( ! empty( $upload['error'] ) ) {
        return 0;
    }

    $filetype = wp_check_filetype( $upload['file'] );
    $attachment_id = wp_insert_attachment(
        array(
            'post_mime_type' => $filetype['type'],
            'post_title'     => $title,
            'post_status'    => 'inherit',
        ),
        $upload['file']
    );
    if ( is_wp_error( $attachment_id ) ) {
        return 0;
    }

    require_once ABSPATH . 'wp-admin/includes/image.php';
    wp_update_attachment_metadata( $attachment_id, wp_generate_attachment_metadata( $attachment_id, $upload['file'] ) );
    update_post_meta( $attachment_id, '_wp_attachment_image_alt', 'Áo thêu ' . $title . ' của ATUS Clothing' );
    return (int) $attachment_id;
}
