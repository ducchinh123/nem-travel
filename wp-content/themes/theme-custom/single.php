<?php

global $post;

if ($post) {

    $post_title = get_the_title();

    $title = $post_title;

    $post_content = get_the_content();

    $post_content = apply_filters('the_content', $post_content);

    $kw = get_post_meta(get_the_ID(), '_meta_keywords', true);
    $tags = get_the_tags(get_the_ID());
    $str_tag = '';
    if (!empty($tags)) {
        foreach ($tags as $key => $value) {
            $str_tag .= $value->name . ', ';
        }
        $str_tag = substr($str_tag, 0, strlen($str_tag) - 2);
    }

    // hook

    $hook_desc = '';

    if (!empty($kw)) {
        $hook_desc = ucfirst($kw);
    } else {
        if (!empty($str_tag)) {
            $hook_desc = ucfirst($str_tag);
        } else {
            $hook_desc = ucfirst(get_option('meta_keywords', ''));
        }
    }






    $description = wp_trim_words(wp_strip_all_tags(get_the_excerpt()), 20, '...');

    $post_id = get_the_ID();



    $image_share_social = get_the_post_thumbnail_url($post_id);

    $author_id = $post->post_author;

    $author_name = get_the_author_meta('display_name', $author_id);

    $months = array(

        1 => 'Tháng Một',

        2 => 'Tháng Hai',

        3 => 'Tháng Ba',

        4 => 'Tháng Tư',

        5 => 'Tháng Năm',

        6 => 'Tháng Sáu',

        7 => 'Tháng Bảy',

        8 => 'Tháng Tám',

        9 => 'Tháng Chín',

        10 => 'Tháng Mười',

        11 => 'Tháng Mười Một',

        12 => 'Tháng Mười Hai'

    );



    // Lấy ngày sửa đổi cuối cùng của bài viết

    $lastUpdated = new DateTime(get_the_modified_date('c'));

    $day = $lastUpdated->format('d');

    $month = $months[(int) $lastUpdated->format('n')]; // Lấy tên tháng từ mảng

    $year = $lastUpdated->format('Y');



    // Kết hợp các thành phần để tạo chuỗi ngày tháng

    $last_updated_date = sprintf('%s %s, %s', $day, $month, $year);


    $date_rating = $lastUpdated->format('d/m/Y');

    $query = $wpdb->prepare("SELECT * FROM tbl_post_ratings WHERE post_id = '$post_id'");

    $row = $wpdb->get_row($query);

    if ($row) {

        // $rating = $row->rating;

        // $number_rating = $row->number_rating;

        $id_post_ratings = $row->id;

    } else {

        $id_post_ratings = 0;

        $date_parts = explode('/', $date_rating);

        $day = intval($date_parts[0]);

        $month = intval($date_parts[1]);

        $year = intval($date_parts[2]);

        $year = $year - $post_id;

        // $number_rating = round(($day * $month * $year) / $post_id);

        // $rating = randomFromDateTime("$year-$month-$day");

    }

    wp_reset_postdata();

} else {

    header('Location: ' . site_url() . '/404');

    die();

}

function custom_breadcrumb()
{

    if (!is_home()) {

        echo '<div class="breadcrumb"><span><span><a style="color: black;" href="';

        echo get_option('home');

        echo '">Trang chủ</a></span><svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em"><path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path></svg>';



        if (is_category() || is_single()) {

            $categories = get_the_category();

            if ($categories && $categories[0]->name != 'Uncategorized') {

                $category = $categories[0];

                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';

                echo '<svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em"><path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path></svg>';

            }



            if (is_single()) {

                echo '<span class="breadcrumb_last" aria-current="page">';

                the_title();

                echo '</span>';

            }

        } elseif (is_page()) {

            echo '<span class="breadcrumb_last" aria-current="page">';

            the_title();

            echo '</span>';

        }

        echo '</div>';

    }

}


?>

<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>
<style type="text/css">
    #the-blog {
        font-weight: normal;

        line-height: 1.5;

        color: #3d3d3d;

        text-align: left;

    }



    #the-blog ul {

        display: block;

        list-style-type: disc;

        margin-block-start: 1em;

        margin-block-end: 1em;

        margin-inline-start: 0px;

        margin-inline-end: 0px;

        padding-inline-start: 40px;

    }



    .jump-link-div ul {

        list-style-type: none !important;

        padding-inline-start: 0 !important;

        margin-block-start: 0 !important;

    }



    .jump-link-div {

        padding-left: 0;

    }



    .col-lg-9 {

        padding: 0;

    }



    #the-blog .guide-nav {

        position: -webkit-sticky;

        position: sticky;

        top: 80px;

        min-width: 300px;

        margin-right: 16PX;

    }



    #the-blog ol li,

    #the-blog ul li {

        margin-top: 0.25rem;

    }



    #the-blog .guide-nav .nav-item .nav-link {

        font-size: 14px;

        color: #8F9396;

        padding: 0.25rem 0 0 0.5rem;

    }



    #the-blog .guide-nav .nav-item-heading .nav-link {

        color: #000000;

        font-weight: bold;

        padding: 0.4rem 0 0 0;

    }



    .wp-block-image img {

        width: 100%;

    }



    .star {

        cursor: pointer;

    }



    .gfs-14 {

        font-size: 14px;

    }



    #number-star {

        font-size: 18px;

        color: #F2994A;

        margin-right: .25rem;

    }



    .gap-2 {

        gap: 2px;

    }



    .text-yellow-800 {

        color: #F2994A;

    }



    .border-yellow-300 {

        border-color: #F2994A;

    }



    .bg-yellow-50 {

        background-color: #FFF8F2;

    }



    .has-text-align-center {

        text-align: center;

    }





    .wp-block-table table {

        border-collapse: collapse;

        width: 100%;

    }



    table {

        width: 100%;

        margin-bottom: 1em;

        border: 1px solid #dedede;

        color: #333;

    }

    .wp-block-table {

        margin: 0 0 1em;

    }

    .wp-block-table {

        overflow-x: auto;

        display: block;

    }

    table tbody tr:nth-child(odd) {

        background-color: #f7f7f7;

    }

    table tr {

        border-bottom: 1px solid #dedede;

    }

    .wp-block-table td,
    .wp-block-table th {

        word-break: normal;

    }

    .wp-block-table td,
    .wp-block-table th {

        border: 1px solid;

        padding: .5em;

    }

    table td,
    table th {

        border-inline-end: 1px solid #dedede;

    }

    .aligncenter {

        margin-left: auto;

        margin-right: auto;

        text-align: center;

    }



    .alignleft {

        text-align: left;

    }



    .alignright {

        text-align: right;

    }



    .wp-block-embed__wrapper:before {

        content: "";

        display: block;

        padding-top: 50%;

    }



    .wp-block-embed__wrapper:before {

        padding-top: 56.25%;

    }



    .wp-block-embed__wrapper {

        position: relative;

    }



    .wp-block-embed {

        clear: both;

        margin-left: 0;

        margin-right: 0;

    }



    .wp-block-embed iframe {

        max-width: 100%;

    }



    html.wp-has-aspect-ratio,

    body.wp-has-aspect-ratio,

    body.wp-has-aspect-ratio>div,

    body.wp-has-aspect-ratio>div iframe {

        width: 100%;

        height: 100%;

        overflow: hidden;

    }



    .wp-has-aspect-ratio iframe {

        bottom: 0;

        height: 100%;

        left: 0;

        position: absolute;

        right: 0;

        top: 0;

        width: 100%;

    }



    .wp-caption {

        width: 100% !important;

    }



    .wp-caption-text {

        font-size: 15px;

        color: #333;

        padding: 10px;

        border-radius: 5px;

        text-align: center;

        margin-top: 5px;

        margin-bottom: 0;

        font-style: italic;

    }

    .div-cate-footer {

        border-top: 1px solid #e0e0e0;

        padding-top: 48px;

        padding-bottom: 24px;

        margin-top: 10px;

    }

    .d-grid {

        display: grid;

    }

    #blog-box {
        margin-top: 1em;
    }

    #blog-box figcaption {
        margin-bottom: 1em;
        margin-top: .5em;
    }

    #blog-box h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: 0.5em;
    }

    #blog-box .wp-block-image {
        margin: 20px 0 !important;
    }

    #the-blog .p-title {
        text-align: justify;
        font-weight: 700;
        font-size: 30px;
    }



    #blog-box .p-content {
        overflow: auto !important;
        text-align: justify;
    }


    #blog-box p {
        margin-bottom: 1rem;
    }


    #blog-box .p-content h2 {
        font-size: 24px;
    }

    #blog-box .p-content h3 {
        font-size: 22px;
    }

    #blog-box .p-content .wp-element-caption {
        text-align: center;
        font-size: 15px;
        color: #666;
        font-style: italic
    }

    @media screen and (max-width: 576px) {

        #the-blog .p-title {
            font-size: 23px !important;

        }

        #blog-box h2 {
            font-size: 22px !important;
        }

        #blog-box h3 {
            font-size: 20px !important;
        }

        #blog-box .p-content p {
            font-size: 16px !important;
        }

    }


    @media screen and (max-width: 1024px) {

        #the-blog .p-title {
            font-size: 28px;

        }

        #blog-box h2 {
            font-size: 24px;
        }

        #blog-box h3 {
            font-size: 22px;
        }

        #blog-box .p-content p {
            font-size: 16px;
        }

    }

    @media (min-width: 992px) {
        .c-box {
            margin-bottom: 35px;
        }
    }

    @media (min-width: 768px) {
        .c-box {
            margin-bottom: 30px;
        }
    }

    .c-box {
        margin-bottom: 25px;
    }

    .c-widget-tags {
        padding-left: 27px;
        position: relative;
        z-index: 1;
        min-height: 20px;
    }

    .c-widget-tags:before {
        content: "";
        position: absolute;
        z-index: 2;
        top: 20px;
        left: 0;
        width: 20px;
        height: 20px;
        background-image: url(https://gacmai.vn/public/images/tags-fill.svg);
        background-position: center center;
        background-repeat: no-repeat;
    }

    .c-widget-tags ul {
        list-style: none;
        margin: 0;
        padding: 0 !important;
    }


    .c-widget-tags ul li {
        margin: 0 4px 5px 0;
        display: inline-block;
        vertical-align: middle;
        position: relative;
        z-index: 1;

    }

    .c-widget-tags h4 {
        margin: 0;
        line-height: 1.3;
    }

    .c-widget-tags ul li a {
        display: block;
    }

    @media (min-width: 992px) {
        .c-widget-tags a {
            -webkit-transition: all .2s ease;
            -moz-transition: all .2s ease;
            transition: all .2s ease;
        }
    }

    .c-widget-tags a {
        text-decoration: none;
        font-size: 12px;
        display: inline-block;
        vertical-align: middle;
        line-height: 1.3;
        background-color: #22A3FE;
        color: white;
        padding: 2px 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }

    .collapse-button {
        position: relative;
        background-color: rgba(238, 238, 238, .95);
        color: #333;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 18px;
        margin-bottom: 10px;
        transition: background-color 0.3s;
        display: block;
        width: 100%;
        text-align: left;
        font-weight: 700;
        transition: 0.3s;

    }


    .collapse-button:hover {
        color: white;
        background-color: rgb(182, 182, 182);
    }


    .collapse.show a {
        padding: 0;
        margin-left: 10px;
    }

    .collapse ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .collapse ul li {
        list-style: none;
    }

    .collapse li {
        margin: 10px 0;
    }

    .collapse a {
        font-size: 15.4px;
        color: #333;
        text-decoration: none;
        transition: color 0.3s;
        font-weight: 400;
    }

    .collapse li:hover a {
        color: #406CFF;
    }



    .collapse a:hover {
        color: #0056b3;
    }

    .active-target {
        color: #4287F5 !important;
    }

    #jump-link {
        width: 100%;
        height: auto;

    }

    #jump-link ul {
        transition: 0.5s;
        padding: 0 !important;
    }

    article {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* .table_of_content {
            display: none;
        }


        @media screen and (min-width: 992px) {

            .table_of_content {
                display: block;
            }


        } */

    #blog-box .p-content>h2,
    h3,
    h4,
    h5,
    h6 {

        margin-top: 16px !important;

    }



    .toc-wrap {
        height: auto;
        border-radius: unset;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
            0 2px 4px -1px rgba(0, 0, 0, 0.06);
        background-color: rgba(243, 243, 243, 0.95);
        border-width: 1px;
        border-color: #d2d6dc;


    }


    .toc-title {
        position: relative;
        font-size: 1rem;
        margin-top: 1rem;
        cursor: pointer;
        /* Thêm dòng này để làm tiêu đề có thể nhấp */
        padding: 10px 10px;
        font-weight: 700;
        color: #333333;
        padding-bottom: 5px !important;
    }

    #toc {
        height: 0;
        /* padding: 0 1rem; */
        padding-top: 0px !important;
        overflow: auto;
        transition: max-height 0.5s ease-out, padding 0.5s ease-out;

        /* Thêm hiệu ứng chuyển tiếp */



    }

    a {
        &:hover {
            text-decoration: none;

        }
    }

    .toc-active {
        font-weight: bold;
        color: #2563eb;
    }

    .toc-item {
        /* padding: 0.1em 0; */
    }

    #toc a {
        padding: 0.25em 0.5em;
        color: #333333 !important;
    }




    .toc-item a:hover {
        color: #1e73be !important;
    }

    .toc-h2 {
        margin-left: 0.5em;
    }

    .toc-h3 {
        margin-left: 1.75em;
    }

    .toc-h4 {
        margin-left: 3em;
    }

    .toc-h5 {
        margin-left: 4.25em;
    }

    .toc-h6 {
        margin-left: 5.5em;
    }

    #toc ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    #toc>ul>ul>ul li a {
        font-size: 13px !important;
    }

    #toc>ul>ul>ul li {
        line-height: 20px !important;
    }

    #toc li a {
        text-decoration: none;
        font-size: 14px;
    }

    #toc li {
        margin-top: 0 !important;
    }


    .toc-parent {
        font-weight: bold;
        color: #333333 !important;
    }

    .toc-title span {
        position: absolute;
        right: 5px;
        top: 5px;
        font-size: 25px;
    }

    @media screen and (max-width: 431px) {
        .gfs-root {
            flex-direction: column;
        }

        .gfs-root .rating-stars {
            margin-left: unset !important;
        }

        .thank-you {
            justify-content: center;
            padding: 5px 6px;
            margin-left: unset !important;
        }
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    @media screen and (min-width: 768px) {
        .col-md-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-md-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }

    .cta-image img {
        border-radius: 5px !important;
    }

    #contact {
        margin-top: 30px;
        padding-bottom: 20px;
        border-radius: 5px;
        background-color: #F1F1F1;
    }

    #contact>div {
        padding: 10px 0;
        background-color: #9F0012;
        border-radius: 5px 5px 0 0;
    }

    #contact>div>p {
        margin: 0 !important;
        padding-left: 16px !important;
        color: white;
        font-size: 18px;
    }


    #contact form#contactForm {
        padding: 0 16px;
    }

    #contact form#contactForm .form-group input.form-control {
        border: 1px solid gray !important;
        font-size: 0.9em !important;

    }

    #contact form#contactForm input#email {
        border: 1px solid gray;
        font-size: 0.9em !important;
        padding: 10px 10px
    }

    #contact form#contactForm textarea#message {
        border: 1px solid gray;
        font-size: 0.9em !important;
        font-family: Arial, Tahoma, Bitstream Vera Sans, sans-serif !important;

    }

    #contact form#contactForm .form-group textarea.form-control {
        border: 1px solid gray !important;
        font-family: Arial, Tahoma, Bitstream Vera Sans, sans-serif !important;
    }

    #contact form#contactForm .form-group textarea.form-control:focus {
        outline: none;
        border-color: rgb(255, 200, 20) !important;
        transition: border-color .4s ease;
    }

    #contact form#contactForm .form-group input.form-control:focus {
        outline: none;
        border-color: rgb(255, 200, 20) !important;
        transition: border-color .4s ease;
    }

    #contact form#contactForm .form-group input#email:focus {
        outline: none;
        border-color: rgb(255, 200, 20) !important;
        transition: border-color .4s ease;
    }

    #contact form#contactForm button {
        width: 100%;
        font-size: 0.8em !important;
        padding: 10px 20px !important;
    }

    @media screen and (max-width: 431px) {
        #contact form#contactForm .inputFullname {
            padding-right: calc(var(--bs-gutter-x)* 0.5) !important;
        }

        #contact>div>p {
            font-size: 16px;
        }

        #contact form#contactForm .form-group textarea.form-control {
            font-size: 15px !important;
        }

        #contact form#contactForm button {
            padding: 5px 10px;
            font-size: 16px;
        }
    }
</style>
<main>
    <div class="site-inner">
        <div class="breadcrumbs-container">
            <div class="container">
                <?php custom_breadcrumb(); ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section class="section pt-0 mt-0">
                        <div id="the-blog">
                            <div class="d-flex justify-content-between pb-0 pb-lg-2" id="box-content">
                                <?= $div_jump_link ?>
                                <div class="d-grid <?= ($jumpLink_check == true) ? 'col-lg-9' : '' ?> mb-4 mb-lg-0 order-lg-2"
                                    id="blog-box">
                                    <h1 class="text-bold mb-3 p-title"><?= $post_title ?></h1>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="text-600-14" style="padding-right: 8px;">Tác giả:</div>
                                        <div class="text-600-14" style="color: #F2994A;padding-right: 8px;">
                                            <?= $author_name ?>
                                        </div> - <div class="text-400-14 px-2 border-start"><?= $last_updated_date ?>
                                        </div>
                                    </div>
                                    <div class="table_of_content" style="padding-top: 10px;">
                                        <div class="toc-wrap">
                                            <div class="toc-title"><i class="bi bi-list-ol"></i> Tóm tắt nội dung
                                                <span><i id="bi-chevron-compact-down"
                                                        class="bi bi-chevron-compact-right"></i></span>
                                            </div>
                                            <div id="toc"></div>
                                        </div>
                                    </div>
                                    <div class="p-content">
                                        <?= $post_content ?>
                                    </div>
                                    <div class="c-box">
                                        <div class="c-box__content">

                                            <?php
                                            if (!empty($tags)):
                                                ?>
                                                <div class="c-widget-tags onecms__tags">
                                                    <ul>
                                                        <?php
                                                        foreach ($tags as $tag):
                                                            ?>
                                                            <li>
                                                                <h4>
                                                                    <a href="/tag/<?php echo sanitize_title($tag->name); ?>"
                                                                        title="lẩu của đồng"
                                                                        previewlistener="true"><?php echo $tag->name; ?></a>
                                                                </h4>
                                                            </li>

                                                            <?php

                                                        endforeach;

                                                        ?>
                                                    </ul>
                                                </div>

                                                <?php
                                            endif;
                                            ?>

                                            <!-- c-widget-tags-->
                                        </div>
                                        <!-- c-box__content-->
                                    </div>
                                    <div class="d-flex gfs-root align-self-center" style="min-height: 37px;">
                                        <div class="gfs-14 d-flex align-items-center">
                                            <span style="white-space: nowrap;padding-right: 4px;">Đánh giá :
                                            </span><span id="number-star"><?= $rating ?></span>/ 5 (<span
                                                id="number_rating"
                                                style="margin-left: 2px; margin-right: 2px;"><?= $number_rating ?></span>
                                            bình chọn)
                                        </div>
                                        <div class="inline-block rounded border border-yellow-300 bg-yellow-50 px-3 py-1 d-flex text-yellow-800 ml-2 align-items-center thank-you"
                                            style="display: none;">Cảm ơn đánh giá của bạn 😘</div>
                                        <div class="rating-stars ml-2 d-flex">
                                            <div id="stars" class="d-flex gap-2 align-items-center">
                                                <div class="star" title="Poor" data-value="1">
                                                    <img src="<?= site_url() ?>/public/images/star-rating.svg"
                                                        width="27" height="27" alt="star">
                                                </div>
                                                <div class="star" title="Fair" data-value="2">
                                                    <img src="<?= site_url() ?>/public/images/star-rating.svg"
                                                        width="27" height="27" alt="star">
                                                </div>
                                                <div class="star" title="Good" data-value="3">
                                                    <img src="<?= site_url() ?>/public/images/star-rating.svg"
                                                        width="27" height="27" alt="star">
                                                </div>
                                                <div class="star" title="Excellent" data-value="4">
                                                    <img src="<?= site_url() ?>/public/images/star-rating.svg"
                                                        width="27" height="27" alt="star">
                                                </div>
                                                <div class="star" title="WOW!!!" data-value="5">
                                                    <img src="<?= site_url() ?>/public/images/star-rating.svg"
                                                        width="27" height="27" alt="star">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4" style="margin-top: 1em;">
                    <div class="cta-image">
                        <img src="<?= site_url() ?>/public/images/cta.jpg" alt="">
                    </div>

                    <div class="page-section mb-3" id="contact">
                        <div class="">
                            <p>Liên Hệ Tư Vấn</p>
                        </div>
                        <form id="contactForm" action="" enctype="multipart/form-data">
                            <div>
                                <div class="form-group mt-3">
                                    <div class="row">
                                        <div class="col-md col-12 mb-3 inputFullname" style="padding-right: 0;">
                                            <input class="form-control" placeholder="Họ và tên" name="name" id="name"
                                                type="text">
                                            <div class="invalid-feedback" data-feedback="name:required">Trống họ và tên.
                                            </div>
                                        </div>

                                        <div class="col-md col-12 mb-3">
                                            <input class="form-control" placeholder="Số điện thoại" name="phone"
                                                id="phone" type="tel">
                                            <div class="invalid-feedback" data-feedback="phone:required">Trống số điện
                                                thoại.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pl-lg-1 mb-3">
                                        <input class="form-control is-invalid" placeholder="Email của bạn" name="email"
                                            id="email" type="email">
                                        <div class="invalid-feedback" data-feedback="email:required">Email
                                            không được trống.</div>
                                        <div class="invalid-feedback" data-feedback="email:email">Email
                                            không đúng định dạng.</div>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Nội dung liên hệ" name="message"
                                            id="message"></textarea>
                                        <div class="invalid-feedback" data-feedback="message:required">Trống nội dung
                                            liên
                                            hệ.</div>
                                    </div>

                                </div>

                            </div>
                            <div>
                                <div class="d-none mt-3" id="loadingMessage">
                                    <div class="alert alert-warning" role="alert">
                                        Đang gửi...
                                    </div>
                                </div>
                                <div class="d-none mt-3" id="submitSuccessMessage">
                                    <div class="alert alert-success" role="alert">
                                        Tin nhắn đã được gửi thành công!
                                    </div>
                                </div>
                                <div class="d-none mt-3" id="submitErrorMessage">
                                    <div class="alert alert-danger" role="alert">
                                        Lỗi khi gửi tin nhắn!
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="text-align: center;">
                                        <button class="btn btn-blue text-uppercase" id="submitButton" type="submit">Gửi
                                            yêu cầu</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
            <?php if (!empty($posts_relation['posts'])): ?>
                <div class="div-cate-footer">
                    <div class="groupCategory-title mb-0">
                        <h2 class="groupCategory-tlt">Bài viết liên quan</h2>
                    </div>
                    <div class="list-post-home">
                        <ul>
                            <?php
                            foreach ($posts_relation['posts'] as $post):
                                $post_timestamp = strtotime($post['date_new_old']);
                                $current_timestamp = current_time('timestamp');
                                $days_diff = floor(($current_timestamp - $post_timestamp) / (60 * 60 * 24));
                                ?>
                                <li>
                                    <div class="post-home">
                                        <div class="post-home-thumb">
                                            <a href="<?php echo $post['link']; ?>" class="wrap-next-image">
                                                <?php if (!empty($post['avatar'])): ?>
                                                    <div class="overlay-post"></div>
                                                    <img layout="fill" lazy-src="<?php echo $post['avatar']; ?>"
                                                        lazy-alt="<?php echo $post['title']; ?>" alt="..." class="lazy-wave">
                                                <?php else: ?>
                                                    <img layout="fill"
                                                        src="https://gacmai.vn/wp-content/uploads/2024/06/default_image.png"
                                                        alt="default image" class="">
                                                <?php endif; ?>
                                            </a>
                                            <?php if ($days_diff < 2): ?>
                                                <div class="post-home-lable" style="width: unset !important;"><span>Mới</span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <ul class="post-home-item"></ul>
                                        <h2 class="post-home-title">
                                            <a href="<?php echo $post['link']; ?>"
                                                style="width:100%"><?php echo $post['title']; ?></a>
                                        </h2>
                                        <div class="post-home-date" style="position:relative">
                                            <span><?php echo $post['date']; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            endforeach;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                    <div class="loop-footer">
                        <div class="no-ajx">
                            <div class="load-more"><a href="/<?php echo $posts_relation['category_name']; ?>"
                                    style="color: black;">Xem thêm</a></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="div-cate-footer">
                <?php

                // Lấy các chuyên mục không có parent
                
                $parent_categories = get_categories(
                    array(

                        'parent' => 0,

                        'hide_empty' => 0,

                        'exclude' => get_option('default_category')

                    )
                );

                foreach ($parent_categories as $parent_category) {

                    // Lấy các chuyên mục con của từng chuyên mục không có parent
                
                    $child_categories = get_categories(
                        array(

                            'parent' => $parent_category->term_id,

                            'hide_empty' => 0

                        )
                    );

                    ?>
                    <?php


                    if (count($child_categories) > 0) {

                        ?>

                        <div>
                            <button class="btn-cate collapsed" style="padding-top: 12px;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $parent_category->term_id; ?>"
                                aria-expanded="false" aria-controls="collapse-<?php echo $parent_category->term_id; ?>">
                                <?php echo $parent_category->name; ?>
                                <span class="btn-svg-cate">
                                    <svg viewBox="0 0 24 24" width="1em" height="1em">
                                        <path d="M18.4 7.4L12 13.7 5.6 7.4 4.2 8.8l7.8 7.8 7.8-7.8-1.4-1.4z"></path>
                                    </svg>
                                </span>
                            </button>
                            <div class="collapse" id="collapse-<?php echo $parent_category->term_id; ?>">
                                <?php
                                foreach ($child_categories as $child_category) {
                                    ?>
                                    <a href="<?php echo get_category_link($child_category->term_id); ?>"
                                        class="link-card"><?php echo $child_category->name; ?></a>
                                    <?php

                                }

                                ?>
                            </div>
                        </div>
                        <?php
                    } else {

                        ?>
                        <a href="<?php echo site_url() . '/' . $parent_category->slug; ?>"
                            class="link-card"><?php echo $parent_category->name; ?></a>
                        <?php
                    }
                    ?>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/js.php'; ?>
<script>

    $(document).ready(function () {



        // editorBlock('#content')

        var $form = document.querySelector('#contactForm')

        $form.addEventListener('submit', function (e) {

            e.preventDefault()

            if (!checkValidity()) {

                return 1

            } else {

                var formData = new FormData(this)

                $('button[type=submit]').attr('disabled', true)

                $.ajax({

                    url: '/ajax/contact.php',

                    method: 'post',

                    data: formData,

                    processData: false,

                    contentType: false,

                    afterSend: function () {

                        $('#loadingMessage').removeClass('d-none')

                    },

                    success: function (res) {

                        try {
                            if (res.data.status == 'success') {
                                $('#submitSuccessMessage').removeClass('d-none')

                            } else {

                                $('#submitErrorMessage').removeClass('d-none')

                            }

                        } catch (e) {
                            $('#submitErrorMessage').removeClass('d-none')

                        }

                    },

                    error: function (xhr, status, error) {

                        $('#submitErrorMessage').removeClass('d-none')


                    },

                    complete: function () {

                        $('#loadingMessage').addClass('d-none')

                    }

                })

            }

        })

    })



    function checkValidity() {

        var form = document.getElementById("contactForm");

        var nameInput = $("#name");

        var emailInput = $("#email");

        var phoneInput = $("#phone");

        var messageInput = $("#message");

        var isValid = true;

        $('[data-feedback="name:required"]').hide()

        $('[data-feedback="email:required"]').hide()

        $('[data-feedback="email:email"]').hide()

        $('[data-feedback="phone:required"]').hide()

        $('[data-feedback="phone:phone"]').hide()

        $('[data-feedback="message:required"]').hide()

        if (!nameInput.val()) {

            $('[data-feedback="name:required"]').show()

            isValid = false;

        }

        if (!messageInput.val()) {

            $('[data-feedback="message:required"]').show()

            isValid = false;

        }



        if (!emailInput.val()) {

            $('[data-feedback="email:required"]').show()

            isValid = false;

        } else if (!validateEmail(emailInput.val())) {

            $('[data-feedback="email:email"]').show()

            isValid = false;

        }

        if (!phoneInput.val()) {

            $('[data-feedback="phone:required"]').show()

            isValid = false;

        } else if (phoneInput.val().length < 10) {

            $('[data-feedback="phone:phone"]').show()

            isValid = false;

        } else if (phoneInput.val().length > 11) {

            $('[data-feedback="phone:phone"]').show()

            isValid = false;

        } else if (isNaN(phoneInput.val())) {

            $('[data-feedback="phone:phone"]').show()

            isValid = false;

        }



        return isValid;

    }



    function validateEmail(email) {

        var re = /\S+@\S+\.\S+/;

        return re.test(email);

    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {

        anchor.addEventListener('click', function (e) {

            e.preventDefault();

            let target = document.querySelector(this.getAttribute('href'));

            let headerOffset = 100; // Chiều cao của header cố định

            let elementPosition = target.getBoundingClientRect().top;

            let offsetPosition = elementPosition + window.pageYOffset - headerOffset;



            window.scrollTo({

                top: offsetPosition,

                behavior: "smooth"

            });

            history.pushState(null, null, this.getAttribute('href'));

        });

    });


    $(".star").on("mouseover", function () {
        var e = parseInt($(this).data("value"), 10);
        $(this).parent().children(".star").each(function (t) {
            t < e ? $(this).find("img").attr("src", "/public/images/star-rating-full.svg") : $(this).not(".selected").find("img").attr("src", "/public/images/star-rating.svg")
        })
    }).on("mouseout", function () {
        $(this).parent().children(".star:not(.selected)").each(function (e) {
            $(this).find("img").attr("src", "/public/images/star-rating.svg")
        })
        // cảm ơn
    }).on("click", function () {
        let point = $('#number-star');
        let reviewTotal = $('#number_rating');
        let pointRating = parseFloat(point.text());
        let reviewRatings = parseInt(reviewTotal.text());
        const rating = parseInt($(this).data('value'));
        const totalCurrent = pointRating * reviewRatings;
        const newPoint = totalCurrent + rating;
        const newViewTotal = reviewRatings + 1;
        let dtb = newPoint / newViewTotal;
        let adjustedDtb = dtb < 0 ? 0 : (dtb > 5 ? 5 : dtb);
        adjustedDtb = adjustedDtb.toFixed(1);
        $.ajax({
            url: "/ajax/post_ratings.php",
            type: "POST",
            data: {
                id_post: <?= $post_id ?>,
                rating: adjustedDtb,
                number_rating: newViewTotal,
                date: '<?= $last_updated_date ?>'
            },
            success: function (response) {
                response = JSON.parse(response);
                if (response.status == 'success') {
                    reviewTotal.text(newViewTotal);
                    point.text(adjustedDtb);
                    console.log($('.thank-you'));
                    $('.rating-stars').empty();
                    $('.thank-you').css('display', 'flex');
                }
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });

    })





    // table_of_content



    document.addEventListener("DOMContentLoaded", function () {

        function removeLeadingNumbersAndDots(input) {
            return input.replace(/^[\d.]+/, '');
        }

        const headings = document.querySelectorAll(
            ".p-content h1, .p-content h2, .p-content h3, .p-content h4, .p-content h5, .p-content h6"
        );

        if (headings.length > 0) {
            const tocContainer = document.querySelector("#toc");
            const startingLevel = headings[0].tagName[1];
            const toc = document.createElement("ul");
            const prevLevels = [0, 0, 0, 0, 0, 0];

            let currentUl = toc;
            const ulStack = [currentUl];

            for (let i = 0; i < headings.length; i++) {
                const heading = headings[i];
                const level = parseInt(heading.tagName[1]);

                // Tăng các cấp độ trước đó lên đến cấp độ hiện tại
                prevLevels[level - 1]++;

                for (let j = level; j < prevLevels.length; j++) {
                    prevLevels[j] = 0;
                }

                const sectionNumber = prevLevels
                    .slice(startingLevel - 1, level)
                    .join(".")
                    .replace(/\.0/g, "");

                const newHeadingId = `${heading.textContent
                    .toLowerCase()
                    .replace(/ /g, "-")}`;
                heading.id = newHeadingId;

                const anchor = document.createElement("a");
                anchor.setAttribute("href", `#${newHeadingId}`);
                anchor.textContent = sectionNumber + ". " + removeLeadingNumbersAndDots(heading.textContent);

                anchor.addEventListener("click", (event) => {
                    event.preventDefault();
                    const targetId = event.target.getAttribute("href").slice(1);
                    const targetElement = document.getElementById(targetId);
                    targetElement.scrollIntoView({ behavior: "smooth" });
                    history.pushState(null, null, `#${targetId}`);
                });

                const listItem = document.createElement("li");
                listItem.appendChild(anchor);

                const className = `toc-${heading.tagName.toLowerCase()}`;
                listItem.classList.add("toc-item");
                listItem.classList.add(className);

                if (level == startingLevel) {
                    listItem.classList.add("toc-parent");
                }


                if (level > ulStack.length) {
                    const newUl = document.createElement("ul");
                    ulStack[ulStack.length - 1].appendChild(newUl);
                    ulStack.push(newUl);
                } else if (level < ulStack.length) {
                    ulStack.length = level;
                }

                ulStack[level - 1].appendChild(listItem);
            }

            tocContainer.innerHTML = "";
            tocContainer.appendChild(toc);
        }

        // Sự kiện nhấp vào tiêu đề để ẩn/hiện TOC
        const tocTitle = document.querySelector(".toc-title");
        tocTitle.addEventListener("click", function () {
            const toc = document.querySelector("#toc");
            if (toc.style.height === "0px" || toc.style.height === "") {
                toc.style.height = "auto";
                toc.style.padding = "1rem";
            } else {
                toc.style.height = "0";
                toc.style.padding = "0 1rem";
            }

            var spanButton = document.querySelector('.toc-title span');

            if (spanButton.classList.toggle('open')) {
                spanButton.innerHTML = `<i id="bi-chevron-compact-down" class="bi bi-chevron-compact-down"></i>`;
            } else {
                spanButton.innerHTML = `<i id="bi-chevron-compact-down" class="bi bi-chevron-compact-right"></i>`;
            }
        });

        // Sự kiện nhấp vào li để ẩn/hiện ul con
        const tocItems = document.querySelectorAll("#toc li");
        tocItems.forEach(item => {
            item.addEventListener("click", function (event) {
                const subList = this.querySelector("ul");
                if (subList) {
                    event.stopPropagation(); // Ngăn chặn sự kiện click lan ra bên ngoài
                    subList.classList.toggle("show");
                }
            });
        });
    });

</script>