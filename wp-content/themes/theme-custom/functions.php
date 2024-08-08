<?php

function my_theme_setup()
{
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'my_theme'),
        )
    );
}
add_action('after_setup_theme', 'my_theme_setup');

// Thêm Meta Box để nhập từ khóa meta
function add_meta_keywords_box()
{
    add_meta_box(
        'meta_keywords', // ID của meta box
        'Meta Keywords', // Tiêu đề của meta box
        'show_meta_keywords_box', // Hàm hiển thị nội dung của meta box
        'post', // Loại bài viết áp dụng
        'side', // Đặt vị trí là sidebar
        'high' // Độ ưu tiên hiển thị cao
    );
}
add_action('add_meta_boxes', 'add_meta_keywords_box');



// Hiển thị Meta Box
function show_meta_keywords_box($post)
{
    $meta_keywords = get_post_meta($post->ID, '_meta_keywords', true);
    echo '<textarea id="meta_keywords" name="meta_keywords" style="width:100%; height:100px;" placeholder="Sử dụng các từ khóa chính quan trọng bao chứa nội dung bài viết.Mỗi khóa cách nhau bởi dấu phẩy.">' . esc_textarea($meta_keywords) . '</textarea>';
}

// Lưu Meta Keywords khi lưu bài viết
function save_meta_keywords($post_id)
{
    if (isset($_POST['meta_keywords'])) {
        update_post_meta($post_id, '_meta_keywords', sanitize_text_field($_POST['meta_keywords']));
    }
}
add_action('save_post', 'save_meta_keywords');

// Hiển thị Meta Keywords trong phần head của trang
function add_meta_keywords_to_head()
{
    if (is_single()) {
        global $post;
        $meta_keywords = get_post_meta($post->ID, '_meta_keywords', true);
        if ($meta_keywords) {
            echo '<meta name="keywords" content="' . esc_attr($meta_keywords) . '">' . "\n";
        }
    }
}
add_action('wp_head', 'add_meta_keywords_to_head');


function restrict_png_upload($file)
{
    $type = $file['type'];
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    // Kiểm tra nếu file là .png
    if ($extension === 'png') {
        $file['error'] = 'Tải lên hình ảnh PNG không được phép.';
    }

    return $file;
}
add_filter('wp_handle_upload_prefilter', 'restrict_png_upload');



function custom_rewrite_rule()
{
    add_rewrite_rule(
        '^mau-anh-([^/]+)/?$',
        'index.php?pagename=mau&custom_param=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_rewrite_rule');


function custom_query_vars($vars)
{
    $vars[] = 'custom_param';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars');


function custom_rewrite_rule_tag()
{
    add_rewrite_rule(
        '^tag/([^/]+)/?$',
        'index.php?pagename=tag&custom_param=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_rewrite_rule_tag');


function custom_query_vars_tag($vars)
{
    $vars[] = 'custom_param';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars_tag');



function slug_to_normal($slug)
{
    // Thay thế dấu gạch ngang bằng khoảng trắng
    $normal = str_replace('-', ' ', $slug);

    // Viết hoa chữ cái đầu mỗi từ
    $normal = ucwords($normal);

    return $normal;
}




add_theme_support('post-thumbnails');


function my_general_settings_register_fields()
{
    // Thêm trường Meta Description
    add_settings_field(
        'meta_description', // ID của trường
        '<label for="meta_description">' . __('Meta Description', 'meta_description') . '</label>', // Nhãn
        'meta_description_field_html', // Hàm hiển thị trường
        'general' // Trang cài đặt
    );

    // Đăng ký trường Meta Description
    register_setting('general', 'meta_description', 'esc_attr');

    // Thêm trường Meta Keywords
    add_settings_field(
        'meta_keywords', // ID của trường
        '<label for="meta_keywords">' . __('Meta Keywords', 'meta_keywords') . '</label>', // Nhãn
        'meta_keywords_field_html', // Hàm hiển thị trường
        'general' // Trang cài đặt
    );

    // Đăng ký trường Meta Keywords
    register_setting('general', 'meta_keywords', 'esc_attr');


    // Thêm trường Meta Description
    add_settings_field(
        'contact_zalo', // ID của trường
        '<label for="contact_zalo">' . __('Số zalo liên hệ', 'contact_zalo') . '</label>', // Nhãn
        'contact_zalo_field_html', // Hàm hiển thị trường
        'general' // Trang cài đặt
    );

    // Đăng ký trường Meta Description
    register_setting('general', 'contact_zalo', 'esc_attr');

    // Thêm trường Meta Description
    add_settings_field(
        'contact_fb', // ID của trường
        '<label for="contact_fb">' . __('Link trang Facebook', 'contact_fb') . '</label>', // Nhãn
        'contact_fb_field_html', // Hàm hiển thị trường
        'general' // Trang cài đặt
    );

    // Đăng ký trường Meta Description
    register_setting('general', 'contact_fb', 'esc_attr');


    // Đăng ký trường Meta Description
    register_setting('general', 'contact_zalo', 'esc_attr');

    // Thêm trường Meta Description
    add_settings_field(
        'contact_phone', // ID của trường
        '<label for="contact_phone">' . __('Số điện thoại liên hệ', 'contact_phone') . '</label>', // Nhãn
        'contact_phone_field_html', // Hàm hiển thị trường
        'general' // Trang cài đặt
    );

    // Đăng ký trường Meta Description
    register_setting('general', 'contact_phone', 'esc_attr');


}
add_action('admin_init', 'my_general_settings_register_fields');

// Hàm hiển thị trường Meta Description
function meta_description_field_html()
{
    $value = get_option('meta_description', '');
    echo '<input type="text" id="meta_description" name="meta_description" value="' . esc_attr($value) . '" />';
}


// Hàm hiển thị trường Meta Keywords
function meta_keywords_field_html()
{
    $value = get_option('meta_keywords', '');
    echo '<input type="text" id="meta_keywords" name="meta_keywords" value="' . esc_attr($value) . '" />';
}


// Hàm hiển thị trường Zalo
function contact_zalo_field_html()
{
    $value = get_option('contact_zalo', '');
    echo '<input type="text" id="contact_zalo" placeholder="Số zalo" name="contact_zalo" value="' . esc_attr($value) . '" />';
}

// Hàm hiển thị trường fb
function contact_fb_field_html()
{
    $value = get_option('contact_fb', '');
    echo '<input type="text" id="contact_fb" placeholder="Url facebook" name="contact_fb" value="' . esc_attr($value) . '" />';
}


// Hàm hiển thị trường Phone
function contact_phone_field_html()
{
    $value = get_option('contact_phone', '');
    echo '<input type="text" id="contact_phone" placeholder="Số điện thoại" name="contact_phone" value="' . esc_attr($value) . '" />';
}

function get_meta_kws($meta_kset)
{

    if (is_single()) {

        $post_tags = get_the_tags();
        $kw = get_post_meta(get_the_ID(), '_meta_keywords', true);

        if (!empty($kw)) {
            echo ucfirst($kw);
        } else {

            if (!empty($post_tags)) {
                $t = '';
                foreach ($post_tags as $tag) {

                    $t .= $tag->name . ", ";
                }
                echo ucfirst(substr($t, 0, strlen($t) - 2));
            } else {
                echo $meta_kset;
                return;
            }
        }


    } else {
        echo $meta_kset;
    }

}


function my_theme_register_custom_block_patterns()
{

    if (function_exists('register_block_pattern')) {

        // Pattern cho h2

        $pattern_content_h2 = <<<HTML

            <!-- wp:heading {"level":2,"className":"jump-link"} -->

            <h2 class="jump-link">Title H2 width Jump Link</h2>

            <!-- /wp:heading -->

        HTML;



        register_block_pattern(

            'mytheme/jump-link-heading-h2',

            array(

                'title' => __('H2 Jump Link', 'text-domain'),

                'description' => _x('A heading 2 block with a jump link class.', 'Block pattern description', 'text-domain'),

                'content' => $pattern_content_h2,

                'categories' => array('jump link')

            )

        );



        // Pattern cho h3

        $pattern_content_h3 = <<<HTML

            <!-- wp:heading {"level":3,"className":"jump-link"} -->

            <h3 class="jump-link">Title H3 width Jump Link</h3>

            <!-- /wp:heading -->

        HTML;



        register_block_pattern(

            'mytheme/jump-link-heading-h3',

            array(

                'title' => __('H3 Jump Link', 'text-domain'),

                'description' => _x('A heading 3 block with a jump link class.', 'Block pattern description', 'text-domain'),

                'content' => $pattern_content_h3,

                'categories' => array('jump link')

            )

        );

    }

}



add_action('init', 'my_theme_register_custom_block_patterns');

function load_more_posts()
{

    $paged = $_POST['page'];

    $cate = $_POST['cate'];

    $posts_per_page = $_POST['posts_per_page'];

    $args = array(

        'post_type' => 'post',

        'posts_per_page' => $posts_per_page,

        'orderby' => 'date',

        'order' => 'DESC',

        'post_status' => 'publish',

        'paged' => $paged

    );

    if (!empty($cate)) {

        $args['cat'] = (int) $cate;

    }

    // wp_send_json($args);
    $query = new WP_Query($args);

    $response = array();

    if ($query->have_posts()) {

        ob_start();

        while ($query->have_posts()):
            $query->the_post();
            // Lấy ngày tạo bài viết
            $post_date = get_the_date('Y-m-d H:i:s', get_the_ID());
            $post_timestamp = strtotime($post_date);
            $current_timestamp = current_time('timestamp');

            // Tính toán số ngày đã trôi qua
            $days_diff = floor(($current_timestamp - $post_timestamp) / (60 * 60 * 24));

            ?>

            <li>

                <div class="post-home">

                    <div class="post-home-thumb">

                        <a href="<?php the_permalink(); ?>" class="wrap-next-image">

                            <?php if (has_post_thumbnail()): ?>
                                <div class="overlay-post"></div>
                                <img layout="fill" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                    class="lazy-wave">

                            <?php else: ?>

                                <img layout="fill" src="path/to/default-image.jpg" alt="default image" class="">

                            <?php endif; ?>

                        </a>

                        <?php if ($days_diff < 2): ?>
                            <div class="post-home-lable" style="width: unset !important;"><span>Mới</span>
                            </div>
                        <?php endif; ?>

                    </div>

                    <h2 class="post-home-title">

                        <a href="<?php the_permalink(); ?>" style="width:100%"><?php the_title(); ?></a>

                    </h2>

                    <div class="post-home-date" style="position:relative">

                        <span><?php echo get_the_date('d/m/Y H:i'); ?></span>

                    </div>

                </div>

            </li>

            <?php

        endwhile;

        $response['html'] = ob_get_clean();

        wp_reset_postdata();



        // Kiểm tra nếu còn bài viết để tải thêm

        if ($query->found_posts > $posts_per_page * $paged) {

            $response['status'] = 'success';

            $response['message'] = 'Posts loaded';

        } else {

            $response['status'] = 'no_more_posts';

            $response['message'] = 'No more posts to load';

        }

    } else {

        $response['status'] = 'no_more_posts';

        $response['message'] = 'No more posts to load';

    }



    wp_send_json($response);

    wp_die();

}

add_action('wp_ajax_load_more_posts', 'load_more_posts');

add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');





function remove_category_from_url($wp_rewrite)
{
    $new_rules = [];

    // Lấy tất cả các danh mục, bao gồm cả những danh mục không có bài viết nào
    $categories = get_categories(['hide_empty' => false]);

    foreach ($categories as $category) {
        // Lấy slug của danh mục
        $category_slug = $category->slug;

        // Tạo quy tắc rewrite mới cho danh mục, thay thế /category/category-slug bằng /category-slug
        $new_rules[$category_slug . '/?$'] = 'index.php?category_name=' . $category_slug;
        $new_rules[$category_slug . '/page/?([0-9]{1,})/?$'] = 'index.php?category_name=' . $category_slug . '&paged=$matches[1]';

        // Tạo quy tắc rewrite cho danh mục con
        $category_children = get_term_children($category->term_id, 'category');
        foreach ($category_children as $child) {
            $child_category = get_term_by('id', $child, 'category');
            $child_slug = $child_category->slug;

            // Tạo URL cho danh mục con
            $new_rules[$category_slug . '/' . $child_slug . '/?$'] = 'index.php?category_name=' . $category_slug . '/' . $child_slug;
            $new_rules[$category_slug . '/' . $child_slug . '/page/?([0-9]{1,})/?$'] = 'index.php?category_name=' . $category_slug . '/' . $child_slug . '&paged=$matches[1]';

            // Tạo quy tắc rewrite cho danh mục con của danh mục con (nếu có)
            $grandchildren = get_term_children($child_category->term_id, 'category');
            foreach ($grandchildren as $grandchild) {
                $grandchild_category = get_term_by('id', $grandchild, 'category');
                $grandchild_slug = $grandchild_category->slug;

                // Tạo URL cho danh mục con của danh mục con
                $new_rules[$category_slug . '/' . $child_slug . '/' . $grandchild_slug . '/?$'] = 'index.php?category_name=' . $category_slug . '/' . $child_slug . '/' . $grandchild_slug;
                $new_rules[$category_slug . '/' . $child_slug . '/' . $grandchild_slug . '/page/?([0-9]{1,})/?$'] = 'index.php?category_name=' . $category_slug . '/' . $child_slug . '/' . $grandchild_slug . '&paged=$matches[1]';
            }
        }
    }

    // Thêm các quy tắc mới vào đầu danh sách quy tắc hiện có
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

add_filter('generate_rewrite_rules', 'remove_category_from_url');




function fix_category_pagination_redirect($redirect_url, $requested_url)
{

    if (strpos($requested_url, '/category/') !== false) {

        $redirect_url = str_replace('/category/', '/', $requested_url);

    }

    return $redirect_url;

}



add_filter('redirect_canonical', 'fix_category_pagination_redirect', 10, 2);



function remove_category_base($link)
{

    return str_replace('/category/', '/', $link);

}



add_filter('category_link', 'remove_category_base');

add_action('init', 'remove_category_base_refresh_rules');



function remove_category_base_refresh_rules()
{

    global $wp_rewrite;

    $wp_rewrite->flush_rules();

}



// Xóa các kích thước ảnh không cần thiết

function remove_unnecessary_image_sizes()
{

    remove_image_size('thumbnail');

    remove_image_size('medium');

    remove_image_size('large');

    // Xóa các kích thước ảnh tùy chỉnh nếu có

    remove_image_size('custom-size-1');

    remove_image_size('custom-size-2');

}

add_action('init', 'remove_unnecessary_image_sizes');



// Thêm kích thước ảnh mới

function add_custom_image_size()
{

    add_image_size('custom-size', 800, 600, true); // Thay đổi kích thước theo nhu cầu của bạn

}

add_action('init', 'add_custom_image_size');



// Chỉ giữ lại kích thước ảnh mới khi tải lên ảnh mới

function retain_only_custom_image_size($sizes)
{

    return array(

        'custom-size' => __('Custom Size')

    );

}

add_filter('intermediate_image_sizes_advanced', 'retain_only_custom_image_size');


// Collection

function get_collection()
{
    global $wpdb;
    $query = "SELECT wp_collection.slug_name, wp_collection.name FROM wp_collection WHERE wp_collection.status = 0";
    $result = $wpdb->get_results($query);
    if (empty($result)) {
        return [];
    }
    // Phân chia kết quả thành các mảng nhỏ, mỗi mảng chứa 2 phần tử
    $chunked_results = array_chunk($result, 8);

    return $chunked_results;
}

function my_print($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo 'No Array';
    }
}

function substring_image($link)
{
    $url = $link;
    $substring = strstr($url, '/uploads/');
    if ($substring !== false) {
        $path_after_uploads = substr($substring, strlen('/uploads'));
        return wp_upload_dir()['baseurl'] . $path_after_uploads; // Kết quả: 2024/06/ban-le-2.jpg
    }
}


// API image other

add_action('rest_api_init', function () {
    register_rest_route(
        'gacmai/api',
        '/select-data/(?P<id_collect>\d+)/(?P<id_image>\d+)',
        array(
            'methods' => 'GET',
            'callback' => 'get_images_other',
            'permission_callback' => '__return_true'
        )
    );
});


function get_images_other(WP_REST_Request $request)
{
    global $wpdb;
    $id_image = $request->get_param('id_image');
    $id_collect = $request->get_param('id_collect');

    if (isset($id_image) && isset($id_collect)) {
        // Thực hiện truy vấn dữ liệu từ cơ sở dữ liệu


        $results = $wpdb->get_results(
            $wpdb->prepare("SELECT wp_collection_image.detail ,wp_collection_image.id_image, wp_posts.guid FROM wp_collection_image INNER JOIN wp_posts on wp_collection_image.id_image = wp_posts.ID INNER JOIN wp_collection on wp_collection.id_collection = wp_collection_image.id_collection WHERE wp_collection_image.id_collection = %d", $id_collect),
            ARRAY_A
        );

        if ($results) {
            return new WP_REST_Response(array('success' => true, 'data' => $results), 200);
        } else {
            return new WP_Error('not_found', 'Không tìm thấy dữ liệu ảnh.', array('status' => 404));
        }
    }

    return new WP_Error('missing_param', 'Thiếu tham số id_image.', array('status' => 400));
}


function format_date_time($date_string)
{
    // Chuyển đổi chuỗi ngày giờ thành timestamp
    $timestamp = strtotime($date_string);

    // Kiểm tra nếu giá trị timestamp là hợp lệ
    if ($timestamp === false) {
        return 'Ngày giờ không hợp lệ';
    }

    // Định dạng ngày/tháng/năm giờ:phút
    $format = 'd/m/Y';
    return date_i18n($format, $timestamp);
}


// Tìm kiếm bài viết

// Đăng ký Endpoint REST API
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/search-posts', [
        'methods' => 'POST',
        'callback' => 'search_posts_api',
        'permission_callback' => '__return_true', // Thay đổi điều này nếu bạn cần xác thực
    ]);
});

// Callback function xử lý yêu cầu API
function search_posts_api(WP_REST_Request $request)
{
    // Lấy từ khóa tìm kiếm từ yêu cầu POST
    $keyword = $request->get_param('keyword');
    $paged = $request->get_param('paged');

    // Gọi hàm tìm kiếm bài viết
    $posts = search_post_with_title($keyword, $paged);

    // Trả về kết quả dưới dạng JSON
    return new WP_REST_Response($posts, 200);
}

// Hàm tìm kiếm bài viết theo tiêu đề hoặc danh mục
// Hàm tìm kiếm bài viết theo tiêu đề hoặc danh mục với phân trang
function search_post_with_title($keyword, $paged = 1)
{
    // Làm sạch và kiểm tra tham số đầu vào
    $keyword = sanitize_text_field($keyword);
    $paged = intval($paged);

    // Kiểm tra tính hợp lệ của tham số 'paged'
    if ($paged < 1) {
        $paged = 1;
    }

    // Lấy ID của danh mục cần loại trừ
    $exclude_category = get_category_by_slug('cong-trinh-thuc-te');
    $exclude_category_id = $exclude_category ? $exclude_category->term_id : 0;

    // Tạo đối số cho truy vấn WP_Query
    $args = [
        'post_type' => 'post',
        's' => $keyword,
        'posts_per_page' => 9, // Số bài viết mỗi trang
        'paged' => $paged, // Trang hiện tại,
        'category__not_in' => [$exclude_category_id], // Loại trừ danh mục

    ];

    $query = new WP_Query($args);
    $posts = [];
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $data = [
                'post_title' => esc_html(get_the_title()),
                'post_permalink' => esc_url(get_the_permalink()),
                'post_thumb' => esc_url(get_the_post_thumbnail_url(get_the_ID())), // Trả về URL của thumbnail
                'post_date' => esc_html(get_the_date('d/m/Y H:i')),
            ];
            $posts[] = $data;
        }
    }

    // Khôi phục lại truy vấn gốc sau khi hoàn thành
    wp_reset_postdata();

    return [
        'posts' => $posts,
        'max_num_pages' => $query->max_num_pages, // Tổng số trang
    ];
}



function get_all_posts_relation()
{

    $id_post = get_the_ID();
    $categories = wp_get_post_categories($id_post);
    $posts = [];
    if ($categories) {
        $target = [
            'post_type' => 'post',
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'desc',
            'category__in' => $categories,
            'post__not_in' => [$id_post]
        ];

        $query = new WP_Query($target);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $post_item = [
                    'title' => get_the_title(),
                    'excerpt' => get_the_excerpt(),
                    'link' => get_the_permalink(),
                    'date' => get_the_date('d/m/Y H:i'),
                    'date_new_old' => get_the_date('Y-m-d H:i:s', get_the_ID()),
                    'avatar' => get_the_post_thumbnail_url(get_the_ID(), 'full')
                ];
                $posts[] = $post_item;
            }
        }
        wp_reset_postdata();
    }
    return ["posts" => $posts, 'category_name' => get_the_category($id_post)[0]->slug];
}


// rating


function check_and_insert_post_rating($post_id)
{
    global $wpdb;

    // Kiểm tra xem bài post này đã có trong bảng tbl_post_ratings chưa
    $exists = $wpdb->get_var(
        $wpdb->prepare(
            "SELECT COUNT(*) FROM tbl_post_ratings WHERE post_id = %d",
            $post_id
        )
    );

    if ($exists == 0) {
        $random = mt_rand(450, 500) / 100;
        $number_rating = rand(800, 1000);
        $data = [
            "post_id" => $post_id,
            "rating" => round($random, 1),
            "number_rating" => $number_rating,
            "status" => 0
        ];

        // Insert dữ liệu vào bảng tbl_post_ratings
        $wpdb->insert("tbl_post_ratings", $data);
    } else {
        // Nếu bài post đã tồn tại, lấy dữ liệu hiện tại từ bảng
        $result = $wpdb->get_row($wpdb->prepare(
            "SELECT rating, number_rating FROM tbl_post_ratings WHERE post_id = %d",
            $post_id
        ), ARRAY_A);
        $random = $result['rating'];
        $number_rating = $result['number_rating'];
    }

    return ['rating' => $random, 'number_rating' => $number_rating];
}



add_action('wp', 'auto_insert_post_rating');

function auto_insert_post_rating()
{
    if (is_single()) {
        $post_id = get_the_ID();
        $rating_info = check_and_insert_post_rating($post_id);
        global $rating, $number_rating;

        $rating = $rating_info['rating'];
        $number_rating = $rating_info['number_rating'];
    }
}





function my_theme_add_admin_menu()
{
    add_menu_page(
        'Quản lý liên hệ', // Tiêu đề trang
        'Liên hệ', // Tiêu đề menu
        'manage_options', // Khả năng truy cập
        'contact_form_entries', // Slug trang
        'my_theme_display_contact_entries', // Hàm hiển thị
        'dashicons-email', // Biểu tượng menu
        6 // Vị trí menu
    );
}
add_action('admin_menu', 'my_theme_add_admin_menu');


function my_theme_display_contact_entries()
{
    global $wpdb;
    $table_name = 'tbl_contact';

    $results = $wpdb->get_results("SELECT * FROM $table_name");

    echo '<form method="POST" action="https://laucua.vn/wp-json/laucua/api/delete-contact-select/"><div class="wrap">';
    echo '<h1>Quản lý liên hệ</h1>';
    echo '
        <style>
        .my-custom-table th:nth-child(6),
        .my-custom-table td:nth-child(6) {
            width: 40%;
        }        
        table.my-custom-table {
        margin-bottom: 20px;
        }
        </style>
    ';
    echo '<table class="wp-list-table widefat fixed striped my-custom-table">';
    echo '<thead><tr><th><input type="checkbox" name="selected_all" id="selected_all" class="selected_all" value="" style="margin: 0;"></th><th>ID</th><th>Tên</th><th>Email</th><th>SĐT</th><th>Nội dung</th><th>Ngày gửi</th> <th>Hành động</th></tr></thead>';
    echo '<tbody>';

    if ($results) {
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . '<input type="checkbox" class="order-checkbox" name="contact[]" id="" value="' . esc_html($row->id) . '">' . '</td>';
            echo '<td>' . esc_html($row->id) . '</td>';
            echo '<td>' . esc_html($row->name) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->phone) . '</td>';
            echo '<td>' . esc_html($row->message) . '</td>';
            echo '<td>' . wp_date('d/m/Y H:i', strtotime($row->created_at)) . '</td>';
            echo '<td>' . '<a onclick="return confirm(\'Đánh dấu là đã đọc xong. Không hiển thị lại nữa?\')" href="https://gacmai.vn/wp-json/gacmai/api/delete-data/' . $row->id . '">✔</a>' . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="5">Không có liên hệ nào.</td></tr>';
    }

    echo '</tbody>';
    echo '</table>';
    if (!empty($results)) {
        echo '<a href="https://gacmai.vn/wp-json/gacmai/api/delete-all-contact/" onclick="return confirm(\'Bạn chắn chắn muốn xóa hết nội dung liên hệ?\')" style="margin-top: 50px; text-decoration: none; padding: 5px 10px; border-radius: 5px;     border: 1px solid blue;
    cursor: pointer;"name="deleteAll">Xóa tất cả</a>';
    }
    echo '</div>
    
    </form>';


    echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
        var selectAllCheckbox = document.querySelector(".selected_all");
        var orderCheckboxes = document.querySelectorAll(".order-checkbox");

        selectAllCheckbox.addEventListener("change", () => {
            
            if(orderCheckboxes.length >= 1) {
                orderCheckboxes.forEach((checkItem, index) => {
                checkItem.checked = selectAllCheckbox.checked;
                
            })
            }
            
        })
        
        
        if(orderCheckboxes.length >= 1) {
                orderCheckboxes.forEach((checkItem, index) => {
                    
                    checkItem.addEventListener("change", () => {
                    
                        if(!(checkItem.checked)) {
                        selectAllCheckbox.checked = false;
                    }
                    
                    
                    })
                
                
            })
        }
        
        
        
       
    });
    </script>';

}


add_action('rest_api_init', function () {
    register_rest_route(
        'gacmai/api',
        '/delete-data/(?P<id_contact>\d+)',
        array(
            'methods' => 'GET',
            'callback' => 'delete_contact',
            'permission_callback' => '__return_true'
        )
    );
});


add_action('rest_api_init', function () {
    register_rest_route(
        'gacmai/api',
        '/delete-all-contact',
        array(
            'methods' => 'GET',
            'callback' => 'delete_contact_all',
            'permission_callback' => '__return_true'
        )
    );
});


function delete_contact(WP_REST_Request $data)
{
    global $wpdb;
    $id_contact = $data['id_contact'];
    $table = 'tbl_contact';
    $bind = [
        'id' => $id_contact
    ];
    $wpdb->delete($table, $bind);
    header('Location: https://gacmai.vn/wp-admin/admin.php?page=contact_form_entries');
}

function delete_contact_all()
{
    global $wpdb;
    $table = 'tbl_contact';
    $wpdb->query('DELETE FROM ' . $table);
    header('Location: https://gacmai.vn/wp-admin/admin.php?page=contact_form_entries');
}


//


add_action('wp_ajax_load_more_posts_search', 'load_more_posts_search');
add_action('wp_ajax_nopriv_load_more_posts_search', 'load_more_posts_search');

function load_more_posts_search()
{
    // Lấy các tham số từ request Ajax
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $posts_per_page = isset($_POST['posts_per_page']) ? intval($_POST['posts_per_page']) : 9;
    $category_id = isset($_POST['cate']) ? intval($_POST['cate']) : 0;
    $title = isset($_POST['q']) ? sanitize_text_field($_POST['q']) : '';

    // Tạo các đối số cho truy vấn WP_Query
    $args = array(
        'post_type' => 'post',
        's' => $title,
        'posts_per_page' => $posts_per_page,
        'paged' => $page,
        'category__not_in' => $category_id,
    );

    $query = new WP_Query($args);
    $posts = array();

    // Kiểm tra và lấy dữ liệu từ truy vấn
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_date = get_the_date('Y-m-d H:i:s', get_the_ID());
            $post_timestamp = strtotime($post_date);
            $current_timestamp = current_time('timestamp');
            $days_diff = floor(($current_timestamp - $post_timestamp) / (60 * 60 * 24));
            $data = array(
                'post_title' => esc_html(get_the_title()),
                'post_permalink' => esc_url(get_the_permalink()),
                'post_thumb' => esc_url(get_the_post_thumbnail_url(get_the_ID())),
                'post_date' => esc_html(get_the_date('d/m/Y H:i')),
                'days_diff' => $days_diff
            );
            $posts[] = $data;
        }
    }

    wp_reset_postdata();

    // Tạo phản hồi JSON
    $response = array(
        'success' => true,
        'data' => array(
            'posts' => $posts,
            'has_more' => $query->max_num_pages > $page ? true : false,
        ),
        'html' => '', // Tạo HTML cho danh sách bài viết
    );

    // Nếu có bài viết, thêm HTML tương ứng vào response
    if (!empty($posts)) {
        ob_start();
        foreach ($posts as $post) {
            ?>
            <li>
                <div class="post-home">
                    <div class="post-home-thumb">
                        <a href="<?php echo $post['post_permalink']; ?>" class="wrap-next-image">
                            <?php if ($post['post_thumb']): ?>
                                <img layout="fill" src="<?php echo $post['post_thumb']; ?>" alt="<?php echo $post['post_title']; ?>"
                                    class="lazy-wave">
                            <?php else: ?>
                                <img layout="fill" src="https://gacmai.vn/wp-content/uploads/2024/06/default_image.png"
                                    alt="default image" class="">
                            <?php endif; ?>
                        </a>
                        <?php if ($post['days_diff'] < 2): ?>
                            <div class="post-home-lable" style="width: unset !important;"><span>Mới</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h2 class="post-home-title">
                        <a href="<?php echo $post['post_permalink']; ?>" style="width:100%"><?php echo $post['post_title']; ?></a>
                    </h2>
                    <div class="post-home-date" style="position:relative">
                        <span><?php echo $post['post_date']; ?></span>
                    </div>
                </div>
            </li>
            <?php
        }
        $response['html'] = ob_get_clean();
    }

    // Gửi dữ liệu JSON về cho client
    wp_send_json($response);
    wp_die();
}

function get_list_sliders()
{
    global $wpdb;
    $table_name = 'tbl_my_sliders'; // Chú ý prefix bảng
    $results = $wpdb->get_results("SELECT wp_posts.guid as guid_i FROM {$table_name} INNER JOIN wp_posts on {$table_name}.id_image = wp_posts.ID");
    return $results;
}