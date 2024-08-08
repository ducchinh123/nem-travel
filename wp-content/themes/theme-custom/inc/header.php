<?php

$collects = get_collection()[0];

$locations = get_nav_menu_locations();
$menu_id = isset($locations['header_menu']) ? $locations['header_menu'] : 0;

if ($menu_id) {
    // Lấy các mục của menu
    $menu_items = wp_get_nav_menu_items($menu_id);
}


// Hàm đệ quy để hiển thị menu và menu con
// Hàm kiểm tra nếu có submenu
function has_submenu($parent_id, $menu_items)
{
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == $parent_id) {
            return true;
        }
    }
    return false;
}

// Hàm hiển thị menu con
function display_menu($menu_items, $parent_id = 0, $level = 0)
{
    $child_items = array();

    // Lọc các mục con
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == $parent_id) {
            $child_items[] = $item;
        }
    }

    // Nếu có mục con, hiển thị
    if (!empty($child_items)) {
        // Kiểm tra mức độ của menu để đặt class tương ứng
        $ul_class = ($level == 1) ? 'dropdown_menu' : 'submenu';
        echo '<ul class="' . esc_attr($ul_class) . '">'; // Mở thẻ <ul> cho danh sách menu con

        foreach ($child_items as $item) {
            echo '<li>'; // Mở thẻ <li> cho mục menu
            echo '<a href="' . esc_url($item->url) . '">';
            echo esc_html($item->title);

            // Thêm biểu tượng nếu có submenu
            if (has_submenu($item->ID, $menu_items)) {
                echo '<i class="bi bi-chevron-compact-right"></i>';
            }

            echo '</a>';

            // Gọi đệ quy để hiển thị các mục con của mục con
            display_menu($menu_items, $item->ID, $level + 1);

            echo '</li>'; // Đóng thẻ <li>
        }
        echo '</ul>'; // Đóng thẻ </ul>
    }
}

// Hàm hiển thị menu chính
function display_main_menu($menu_items)
{
    echo '<ul id="menu">';
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == 0) { // Kiểm tra nếu là menu cha
            echo '<li>';
            echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title);

            // Thêm biểu tượng nếu có submenu
            if (has_submenu($item->ID, $menu_items)) {
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>';
            }

            echo '</a>';

            // Hiển thị menu con nếu có
            display_menu($menu_items, $item->ID, 1);

            echo '</li>';
        }
    }
    echo '</ul>';
}




// show menu cho mobi
// Biến toàn cục để theo dõi giá trị data-id

// Định nghĩa biến toàn cục để theo dõi data-id
$data_id_counter = 0;

function display_menu_mobi($menu_items, $parent_id = 0)
{
    global $data_id_counter; // Sử dụng biến toàn cục

    $child_items = array();

    // Lọc các mục con
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == $parent_id) {
            $child_items[] = $item;
        }
    }

    // Nếu có mục con, hiển thị
    if (!empty($child_items)) {
        echo '<ul data-id="' . $data_id_counter . '">'; // Mở thẻ <ul> với data-id là giá trị của biến đếm
        $data_id_counter++; // Tăng giá trị của biến đếm
        foreach ($child_items as $item) {
            echo '<li>'; // Mở thẻ <li> cho mục menu con
            echo '<a href="' . esc_url($item->url) . '" class="" type="button"><span class="fw-700 fs-16">' . esc_html($item->title) . '</span></a>';

            // Kiểm tra nếu mục hiện tại có mục con
            $has_child = false;
            foreach ($menu_items as $sub_item) {
                if ($sub_item->menu_item_parent == $item->ID) {
                    $has_child = true;
                    break;
                }
            }

            // Thêm biểu tượng nếu có mục con
            if ($has_child) {
                echo '<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                      </svg></button>';
            }

            // Gọi đệ quy để hiển thị các mục con của mục con
            display_menu_mobi($menu_items, $item->ID);
            echo '</li>'; // Đóng thẻ <li>
        }
        echo '</ul>'; // Đóng thẻ </ul>
    }
}



// Hàm hiển thị menu chính và kiểm tra menu con
// Hàm hiển thị menu chính và kiểm tra menu con
function display_main_menu_mobi($menu_items)
{
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == 0) { // Kiểm tra nếu là menu cha
            // Kiểm tra nếu mục này có menu con
            $has_children = false;
            foreach ($menu_items as $submenu) {
                if ($submenu->menu_item_parent == $item->ID) {
                    $has_children = true;
                    break;
                }
            }

            echo '<div class="nav-item">';
            echo '<a href="' . esc_url($item->url) . '" class="nav-link-mobi">' . esc_html($item->title);
            if ($has_children) {
                // Thêm biểu tượng nếu có menu con
                echo '<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg></button>';
            }
            echo '</a>';
            // Hiển thị menu con nếu có

            echo '</div>';

            display_menu_mobi($menu_items, $item->ID);
        }
    }
}

// my_print(display_main_menu_mobi($menu_items));
?>

<header>

    <div class="container menu-scroll">
        <div class="row">
            <div class="col-2">
                <div class="logo">
                    <!-- <img class="icon-logo" src="https://gacmai.vn/wp-content/uploads/2024/07/logo-gac-mai-mau1.jpg"
                        alt="">
                    <a class="navbar-brand" href="/">Gác Mái</a> -->
                    <a class="navbar-brand" href="/">
                        <img class="icon-logo" src="https://gacmai.vn/wp-content/uploads/2024/07/logo-header.png"
                            alt="">
                    </a>
                </div>
            </div>
            <div class="col-10">
                <div class="div-navbar-nav">
                    <div class="navbar-nav">
                        <?php
                        if (!empty($menu_items)) {

                            display_main_menu($menu_items);
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="header-container">
        <nav class="navbar">
            <button class="navbar-toggler" type="button">
                <svg viewBox="0 0 24 24" width="1em" height="1em">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M21 7.75H3v-1.5h18v1.5zm0 5H3v-1.5h18v1.5zm0 5H3v-1.5h18v1.5z"></path>
                </svg>
            </button>
            <div class="logo">
                <a class="navbar-brand" href="/">
                    <img class="icon-logo" src="https://gacmai.vn/wp-content/uploads/2024/07/logo-header.png" alt="">
                </a>
            </div>
        </nav>


        <div class="slogan-site">
            <p>𝘕𝘰̛𝘪 𝘺́ 𝘵𝘶̛𝘰̛̉𝘯𝘨 𝘵𝘩𝘢̀𝘯𝘩 𝘩𝘪𝘦̣̂𝘯 𝘵𝘩𝘶̛̣𝘤</p>
        </div>
        <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
        <div class="form-search">
            <form role="search" action="/tim-kiem" action="post">
                <div class="div-input-search">
                    <div class="icon-search-home">
                        <button type="submit" style="background: none; border:none; margin-top: 5px;">
                            <svg viewBox="0 0 24 24" width="20px" height="20px">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.74 3.75a5.99 5.99 0 100 11.98 5.99 5.99 0 000-11.98zM2.25 9.74a7.49 7.49 0 1113.3 4.728l5.44 5.442-1.06 1.06-5.44-5.439A7.49 7.49 0 012.25 9.74z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="w-100">
                        <div class="input-search">
                            <input type="text" name="q" aria-label="Search" autocapitalize="none"
                                placeholder="Tìm kiếm bài viết..." autocomplete="off" autocorrect="off"
                                spellcheck="false" value="" id="form_search">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="div-border-bottom"></div>
    <div class="container div-nav-sub" id="contain-collect">
        <div class="div-navbar-nav">
            <div class="navbar-nav">

                <?php
                if (!empty($menu_items)) {

                    display_main_menu($menu_items);
                }

                ?>

            </div>
        </div>
    </div>
</header>
<span>
    <div class="modal-navbar-backdrop"></div>
    <div class="modal-navbar" style="top: 0px; bottom: 0px; left: 0px;">
        <div class="modal-navbar-dialog">
            <div class="modal-navbar-content">
                <div class="modal-navbar-body">
                    <hr class="navbar-hr">
                    <div>
                        <div class="navbar-nav-mobi">
                            <?php
                            if (!empty($menu_items)) {

                                display_main_menu_mobi($menu_items);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-navbar-close" role="button" tabindex="0" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" style=" width: 20px; height: 20px; " viewBox="0 0 384 512">
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
        </div>
    </div>
    </div>
</span>

    <div>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11137653179"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'AW-11137653179');
		</script>
	</div>