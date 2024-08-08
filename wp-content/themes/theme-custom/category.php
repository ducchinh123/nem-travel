<?php
$slugProject = get_query_var('category_name');

$projectCate = false;
$category = $wp_query->get_queried_object();

if ($category) {

    if ($slugProject == 'cong-trinh-thuc-te') {
        $projectCate = true;
    }

    $category_id = $category->term_id;

    $category_name = $category->name;

    $category_description = $category->description;

    $args = array(

        'cat' => $category_id,

        'post_type' => 'post',

        'posts_per_page' => 12,

        'orderby' => 'date',

        'order' => 'DESC',

        'post_status' => 'publish',

        'paged' => get_query_var('paged') ? get_query_var('paged') : 1

    );
    $query = new WP_Query($args);
    $total = $query->found_posts;
}
if ($category_id == 1) {
    header('location: /bai-viet');
}
if (!$projectCate) {
    $total_posts = $query->found_posts;
    if ($total_posts > 0) {
        $total_posts = $total_posts - 1 > 0 ? ($total_posts - 1) . "+" : 1;
        $title = "Top {$total_posts} nội dung về nội thất " . $category_name . " - Gác Mái";
    } else {
        $title = $category_name . " - Gác Mái";
    }
} else {
    $total_posts = $query->found_posts;
    if ($total_posts > 0) {
        $total_posts = $query->found_posts - 1 > 0 ? ($query->found_posts - 1) . "+" : 1;
        $title = "{$total_posts} " . $category_name . " - Nội thất Gác Mái";
    } else {
        $title = $category_name . " - Nội thất Gác Mái";
    }
}

$description = $description_home != '' ? $description_home : get_option('meta_description', '');
;
$meta_keywords = get_option('meta_keywords', '');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>">
    <meta name="keywords" content="<?php get_meta_kws($meta_keywords); ?>">
    <?php include 'inc/head.php'; ?>
    <style type="text/css">
    </style>
	<!-- Event snippet for Lượt xem trang conversion page -->
	<script>
	  gtag('event', 'conversion', {'send_to': 'AW-11137653179/6KM0CM7w9MYZELuz7L4p'});
	</script>
</head>

<body>
    <?php include 'inc/header.php'; ?>
    <div class="site-inner mb-3">
        <div class="breadcrumbs-container">
            <div class="container">
                <div class="breadcrumb">
                    <span>
                        <a style="color: black;" href="https://gacmai.vn">Trang chủ</a>
                    </span>
                    <svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em">
                        <path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path>
                    </svg>
                    <span class="breadcrumb_last" aria-current="page"><?= $category_name ?></span>
                </div>
            </div>
        </div>
        <div class="container">
            <main>
                <section class="showcase">
                    <div class="groupCategory-title mb-0">
                        <h2 class="groupCategory-tlt"><?= $category_name ?></h2>
                    </div>
                    <div class="list-post-home">
                        <ul <?php if (!$query->have_posts()) {
                            echo 'style="margin-left: 0 !important;"';
                        } ?>>
                            <?php if ($query->have_posts()):

                                while ($query->have_posts()):
                                    $query->the_post();
                                    $post_date = get_the_date('Y-m-d H:i:s', get_the_ID());
                                    $post_timestamp = strtotime($post_date);
                                    $current_timestamp = current_time('timestamp');
                                    $days_diff = floor(($current_timestamp - $post_timestamp) / (60 * 60 * 24));
                                    ?>
                                    <li>
                                        <div class="post-home">
                                            <div class="post-home-thumb">
                                                <a href="<?php the_permalink(); ?>" class="wrap-next-image">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <div class="overlay-post"></div>
                                                        <img layout="fill" lazy-src="<?php the_post_thumbnail_url(); ?>"
                                                            lazy-alt="<?php the_title(); ?>" class="lazy-wave">
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

                                wp_reset_postdata();

                            else:

                                echo '<p>Không có bài viết nào.</p>';

                            endif; ?>
                        </ul>
                    </div>

                    <?php if ($query->found_posts > 12): ?>

                        <div class="loop-footer">

                            <div class="load-more"><span>Xem thêm</span></div>

                            <div class="load-more-loading" style="display: none;"><span>Loading...</span></div>

                        </div>

                    <?php endif; ?>
                </section>
            </main>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/js.php'; ?>
    <script>
        jQuery(document).ready(function ($) {

            var page = 1;

            var loading = false;



            $('.load-more').click(function () {

                if (loading) return;

                loading = true;

                $('.load-more').hide();

                $('.load-more-loading').show();
                page++;
                $.ajax({

                    url: '<?= admin_url('admin-ajax.php') ?>',

                    type: 'post',

                    data: {

                        action: 'load_more_posts',

                        page: page,

                        posts_per_page: 12,

                        cate: '<?= $category_id ?>'

                    },

                    success: function (response) {

                        $('.list-post-home ul').append(response.html);

                        if (response.status == 'success') {

                            $('.load-more').show();

                        }

                        $('.load-more-loading').hide();

                        loading = false;

                    }

                });

            });

        });

    </script>
</body>

</html>