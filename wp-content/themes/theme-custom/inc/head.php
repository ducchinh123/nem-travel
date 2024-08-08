<?php
// Lấy trang gốc
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$main_site = trim($url);
?>
<!DOCTYPE html>
<html class="no-js" lang="vi" style="--vh: 4px;"><!--<![endif]-->

<head>
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
  <link rel="canonical" href="https://www.ivivu.com/">

  <meta name="description"
    content="Đặt phòng khách sạn tại iVIVU.com với hơn 2.000 khách sạn Việt Nam và 30.000 khách sạn Quốc tế. Đặt trực tuyến hoặc gọi 19001870. XÁC NHẬN NGAY qua SMS. Hỗ trợ chu đáo 24/7. Thanh toán an toàn &amp; đa dạng.">
  <meta name="keywords"
    content="khách sạn, phòng khách sạn, đặt khách sạn, đặt khách sạn trực tuyến, đặt khách sạn giá rẻ, dịch vụ đặt phòng khách sạn">
  <meta http-equiv="content-language" content="vi">
  <link rel="alternate" href="https://www.ivivu.com" hreflang="vi-vn">
  <meta property="og:url" content="https://www.ivivu.com">
  <meta property="og:image" content="https://res.ivivu.com/hotel/img/logo-fb.png">
  <meta property="og:title" content="Đặt phòng khách sạn trực tuyến giá rẻ, khuyến mãi đến 75%">
  <meta property="og:description"
    content="Đặt phòng khách sạn tại iVIVU.com với hơn 2.000 khách sạn Việt Nam và 30.000 khách sạn Quốc tế. Đặt trực tuyến hoặc gọi 19001870. XÁC NHẬN NGAY qua SMS. Hỗ trợ chu đáo 24/7. Thanh toán an toàn &amp; đa dạng.">

  <link rel="shortcut icon" href="https://res.ivivu.com/hotel/img/favicon.ico" type="image/x-icon">
  <link href="https://plus.google.com/109621980211258897268/" rel="author">

  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/font-awesome/css/font-awesome.min.css" as="style"
    onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/animate/animate.min.css" as="style"
    onload="this.rel='stylesheet'">

  <link href="https://res.ivivu.com/hotel/css/custom-home.css?v=89.8" rel="stylesheet" type="text/css">

  <script id="facebook-jssdk"
    src="//connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v2.9&amp;appId=338156189903178"></script>
  <script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/static/main.MWFhNzU2YTY5MQ.js"
    data-id="C6S6RKA00GCE1D770VIG"></script>
  <script
    src="https://apis.google.com/_/scs/abc-static/_/js/k=gapi.lb.vi.NOGT10e0jag.O/m=auth2/exm=client/rt=j/sv=1/d=1/ed=1/am=AAAg/rs=AHpOoo-hYQbmlkCoUvnnh5NFS9ZjiUq8mQ/cb=gapi.loaded_1?le=scs"
    nonce="NI8XMnsP" async=""></script>
  <script
    src="https://apis.google.com/_/scs/abc-static/_/js/k=gapi.lb.vi.NOGT10e0jag.O/m=client/rt=j/sv=1/d=1/ed=1/am=AAAg/rs=AHpOoo-hYQbmlkCoUvnnh5NFS9ZjiUq8mQ/cb=gapi.loaded_0?le=scs"
    nonce="NI8XMnsP" async=""></script>
  <script src="https://script.crazyegg.com/pages/versioned/common-scripts/33829564cc0e6fea6565a202ab3deb85.js"
    type="text/javascript" async=""></script>
  <script src="https://connect.facebook.net/en_US/sdk.js?hash=45a5b0bb442a1f3463377f8f92fcdf31" async=""
    crossorigin="anonymous"></script>
  <script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202408050101/show_ads_impl_fy2021.js"
    nonce="NI8XMnsP"></script>
  <script
    src="https://connect.facebook.net/signals/config/1505476653113156?v=2.9.164&amp;r=stable&amp;domain=www.ivivu.com&amp;hme=61ff4e692c87a9a2ce7b19822df2b04638e3ca38b23c1be6c0f1945ccadb2ad5&amp;ex_m=69%2C118%2C104%2C108%2C60%2C4%2C97%2C68%2C16%2C94%2C86%2C50%2C53%2C167%2C170%2C182%2C178%2C179%2C181%2C29%2C98%2C52%2C75%2C180%2C162%2C165%2C175%2C176%2C183%2C127%2C40%2C34%2C139%2C15%2C49%2C189%2C188%2C129%2C18%2C39%2C1%2C42%2C64%2C65%2C66%2C70%2C90%2C17%2C14%2C93%2C89%2C88%2C105%2C51%2C107%2C38%2C106%2C30%2C91%2C26%2C163%2C166%2C136%2C28%2C11%2C12%2C13%2C6%2C7%2C25%2C22%2C23%2C56%2C61%2C63%2C73%2C99%2C27%2C74%2C9%2C8%2C78%2C47%2C21%2C101%2C100%2C102%2C95%2C10%2C20%2C3%2C19%2C83%2C55%2C81%2C33%2C72%2C0%2C92%2C32%2C80%2C85%2C46%2C45%2C84%2C37%2C5%2C87%2C79%2C43%2C35%2C82%2C2%2C36%2C62%2C41%2C103%2C44%2C77%2C67%2C109%2C59%2C58%2C31%2C96%2C57%2C54%2C48%2C76%2C71%2C24%2C110"
    async=""></script>
  <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
  <script id="Messenger" src="//connect.facebook.net/en_US/messenger.Extensions.js"></script>
  <script type="text/javascript" async=""
    src="https://analytics.tiktok.com/i18n/pixel/events.js?sdkid=C6S6RKA00GCE1D770VIG&amp;lib=ttq"></script>
  <script async="" src="//www.google-analytics.com/analytics.js"></script>
  <script>
    var uatMode = 'true';
  </script>


  <!-- Hotjar Tracking Code for ivivu.com -->
  <script>
    (function (h, o, t, j, a, r) {
      h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
      h._hjSettings = { hjid: 1076641, hjsv: 6 };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script'); r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>
  <script async="" src="https://static.hotjar.com/c/hotjar-1076641.js?sv=6"></script>
  <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0080/6893.js" async="async"></script>
  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  </script>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-YRG1RN8JP1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-YRG1RN8JP1');


  </script>

  <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-952773342"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'AW-952773342', { 'currency': 'VND' });
  </script>

  <script>
    !function (w, d, t) {
      w.TiktokAnalyticsObject = t; var ttq = w[t] = w[t] || []; ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie"], ttq.setAndDefer = function (t, e) { t[e] = function () { t.push([e].concat(Array.prototype.slice.call(arguments, 0))) } }; for (var i = 0; i < ttq.methods.length; i++)ttq.setAndDefer(ttq, ttq.methods[i]); ttq.instance = function (t) { for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++)ttq.setAndDefer(e, ttq.methods[n]); return e }, ttq.load = function (e, n) { var i = "https://analytics.tiktok.com/i18n/pixel/events.js"; ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {}; var o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t; var a = document.getElementsByTagName("script")[0]; a.parentNode.insertBefore(o, a) };

      ttq.load('C6S6RKA00GCE1D770VIG');
      ttq.page();
    }(window, document, 'ttq');
  </script>
  <script data-ad-client="ca-pub-8453792351032233" async=""
    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" data-checked-head="true"></script>
  <script async="" src="https://script.hotjar.com/modules.8da33a8f469c3b5ffcec.js" charset="utf-8"></script>
  <meta http-equiv="origin-trial"
    content="AlK2UR5SkAlj8jjdEc9p3F3xuFYlF6LYjAML3EOqw1g26eCwWPjdmecULvBH5MVPoqKYrOfPhYVL71xAXI1IBQoAAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ==">
  <meta http-equiv="origin-trial"
    content="Amm8/NmvvQfhwCib6I7ZsmUxiSCfOxWxHayJwyU1r3gRIItzr7bNQid6O8ZYaE1GSQTa69WwhPC9flq/oYkRBwsAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ==">
  <meta http-equiv="origin-trial"
    content="A9uiHDzQFAhqALUhTgTYJcz9XrGH2y0/9AORwCSapUO/f7Uh7ysIzyszNkuWDLqNYg8446Uj48XIstBW1qv/wAQAAACNeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3Mjc4MjcxOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial"
    content="A9R+gkZL3TWq+Z7RJ2L0c7ZN7FZD5z4mHmVvjrPitg/EMz9P3j5d3W7Vw5ZR9jtJGmWKltM4BO3smNzpCgwYuwwAAACTeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3Mjc4MjcxOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <script type="text/javascript" async=""
    src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/952773342/?random=1723100355584&amp;cv=11&amp;fst=1723100355584&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4851v9103423562za200&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fwww.ivivu.com%2F&amp;ref=https%3A%2F%2Fwww.ivivu.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=%C4%90%E1%BA%B7t%20ph%C3%B2ng%20kh%C3%A1ch%20s%E1%BA%A1n%20tr%E1%BB%B1c%20tuy%E1%BA%BFn%20gi%C3%A1%20r%E1%BA%BB%2C%20khuy%E1%BA%BFn%20m%C3%A3i%20%C4%91%E1%BA%BFn%2075%25&amp;currency_code=VND&amp;npa=0&amp;pscdl=noapi&amp;auid=639341284.1723099104&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B99.0.0.0%7CGoogle%2520Chrome%3B127.0.6533.99%7CChromium%3B127.0.6533.99&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4"
    nonce="NI8XMnsP"></script>

  <script type="text/javascript" charset="UTF-8"
    src="https://maps.google.com/maps-api-v3/api/js/57/13/intl/vi_ALL/common.js" nonce="NI8XMnsP"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.google.com/maps-api-v3/api/js/57/13/intl/vi_ALL/util.js" nonce="NI8XMnsP"></script>
</head>