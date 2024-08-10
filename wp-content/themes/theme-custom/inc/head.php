<?php
// Lấy trang gốc
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$main_site = trim($url);
?>
<!DOCTYPE html>
<html class="no-js" lang="vi" style="--vh: 4px;"><!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="index, follow">
  <meta name="dc.creator" content="iVIVU.com">
  <meta name="dc.title" content="iVIVU.com">
  <meta name="generator" content="">
  <meta property="og:type" content="website">
  <meta property="fb:app_id" content="628025334278848">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport"
    content="width=device-width,initial-scale=1,user-scalable=no, height=device-height, viewport-fit=cover">
  <link rel="canonical" href="https://www.nemtravel.vn/">
  <meta name="description"
    content="Đặt phòng khách sạn tại iVIVU.com với hơn 2.000 khách sạn Việt Nam và 30.000 khách sạn Quốc tế. Đặt trực tuyến hoặc gọi 19001870. XÁC NHẬN NGAY qua SMS. Hỗ trợ chu đáo 24/7. Thanh toán an toàn &amp; đa dạng.">
  <meta name="keywords"
    content="khách sạn, phòng khách sạn, đặt khách sạn, đặt khách sạn trực tuyến, đặt khách sạn giá rẻ, dịch vụ đặt phòng khách sạn">
  <meta http-equiv="content-language" content="vi">
  <link rel="alternate" href="https://www.nemtravel.vn/" hreflang="vi-vn">
  <meta property="og:url" content="https://www.nemtravel.vn/">
  <meta property="og:image" content="https://res.ivivu.com/hotel/img/logo-fb.png">
  <meta property="og:title" content="Đặt phòng khách sạn trực tuyến giá rẻ, khuyến mãi đến 75%">
  <meta property="og:description"
    content="Đặt phòng khách sạn tại iVIVU.com với hơn 2.000 khách sạn Việt Nam và 30.000 khách sạn Quốc tế. Đặt trực tuyến hoặc gọi 19001870. XÁC NHẬN NGAY qua SMS. Hỗ trợ chu đáo 24/7. Thanh toán an toàn &amp; đa dạng.">
  <script type="text/javascript" async=""
    src="https://analytics.tiktok.com/i18n/pixel/static/identify_c2008b8c.js"></script>
  <title>Đặt phòng khách sạn trực tuyến giá rẻ, khuyến mãi đến 75%</title>
  <link href="<?= site_url() ?>/public/css/style.css?v=<?= time() ?>" rel="stylesheet">
  </style>
  <link rel="stylesheet" type="text/css"
    href="https://res.ivivu.com/hotel/vendor/ivivu_icons/fonts/ivvnew-v1.0/style.css?v=89.8">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/ivivu_icons/ivivu_icons.min.css?v=89.8" as="style"
    onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/bootstrap-daterangepicker/daterangepicker.css?v=89.8"
    as="style" onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/animate/animate.min.css?v=89.8" as="style"
    onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/owlcarousel2/assets/owl.carousel.min.css?v=89.8"
    as="style" onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/owlcarousel2/assets/owl.theme.default.min.css?v=89.8"
    as="style" onload="this.rel='stylesheet'">
  <style>
  </style>
  <link rel="shortcut icon" href="https://banner2.cleanpng.com/20180504/ocw/avdmwp8cv.webp" type="image/x-icon">
  <link href="https://plus.google.com/109621980211258897268/" rel="author">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/font-awesome/css/font-awesome.min.css" as="style"
    onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/animate/animate.min.css" as="style"
    onload="this.rel='stylesheet'">
  <link href="https://res.ivivu.com/hotel/css/custom-home.css?v=89.8" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>