<?php include 'inc/head.php'; ?>
<!-- header inc -->

<body data-page="homepage" class="homePage">
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) { return; }
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/messenger.Extensions.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'Messenger'));
  </script>
  <noscript id="deferred-styles">

    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/ivivu_icons/ivivu_icons.min.css?v=89.8">
    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/bootstrap-daterangepicker/daterangepicker.css?v=89.8">
    <link rel="stylesheet" type="text/css" href="https://res.ivivu.com/hotel/vendor/animate/animate.min.css?v=89.8">
    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/owlcarousel2/assets/owl.carousel.min.css?v=89.8">
    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/owlcarousel2/assets/owl.theme.default.min.css?v=89.8">

    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://res.ivivu.com/hotel/vendor/animate/animate.min.css">
  </noscript>

  <script>
    function detectBrowser() {
      (function () {
        var ua = navigator.userAgent, tem,
          M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if (/trident/i.test(M[1])) {
          tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
          return 'IE ' + (tem[1] || '');
        }
        if (M[1] === 'Chrome') {
          tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
          if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);

        navigator.browserName = M[0];
        navigator.browserVersion = M[1];

        //return M.join(' ');
      })();
    }

    detectBrowser();

    var isBrowserSupported = navigator.browserName == 'Chrome' && navigator.browserVersion >= 56;
    if (!isBrowserSupported) {
      var loadDeferredStyles = function () {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };

      var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      if (raf) raf(function () {
        window.setTimeout(loadDeferredStyles, 0);
      });
    }

    else window.addEventListener('load', loadDeferredStyles);
  </script>



  <div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
      <div></div>
    </div>
  </div>

  <!-- Facebook Pixel Code -->
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      }; if (!f._fbq) f._fbq = n;
      n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '1505476653113156');
    fbq('trackSingle', '1505476653113156', "PageView");</script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1505476653113156&ev=PageView&noscript=1" />
  </noscript>
  <script src="https://res.ivivu.com/hotel/js/commonPixel.js?v=89.8" type="text/javascript"></script>
  <!-- End Facebook Pixel Code -->
  <!-- Load Facebook SDK for JavaScript -->


  <!-- End Google Tag Manager -->
  <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- BEGIN HEADER -->
  <header class="main-header ivivu-main-header">
    <input type="hidden" id="hdhdhdhhdhdhdhdhdhd" value="">
    <input type="hidden" id="token_change" value="69f0408e-c0ad-4d22-bbdd-231b33a5751d">
    <input type="hidden" id="datepicker-temp-chkin" value="">
    <input type="hidden" id="datepicker-temp-chkout" value="">
    <nav class="navbar" style="border:0px solid transparent;">
      <div class="container">
        <div class="navbar-header">
          <a href="//www.ivivu.com" class="navbar-brand">
            <img src="https://res.ivivu.com/hotel/img/logo-2023n.svg" alt="ivivu" class="loading"
              data-was-processed="true">


          </a>

          <button type="button" class="navbar-toggle collapsed hidden" data-toggle="collapse"
            data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="//www.ivivu.com">Khách sạn <span class="sr-only">(current)</span></a></li>
            <li><a href="//www.ivivu.com/du-lich">Tours</a></li>
            <li><a href="//www.ivivu.com/ve-may-bay">Vé máy bay</a></li>
            <li><a href="//www.ivivu.com/ve-vui-choi">Vé vui chơi</a></li>
            <li><a href="//www.ivivu.com/bespoke">Bespoke</a></li>
            <li class="dropdown full-width">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-h"></i></a>
              <ul class="dropdown-menu" role="menu" *dropdownmenu="">
                <li>
                  <a href="javascript:void(0)" onclick="Common.login()" data-keyboard="true" id="searchlogingg">Tài
                    khoản đặt phòng</a>
                </li>
                <li><a href="//www.ivivu.com/blog" target="_blank">Cẩm nang du lịch</a></li>


                <li><a href="//www.ivivu.com/gioi-thieu">Giới thiệu</a></li>
                <li><a href="//www.ivivu.com/hoi-dap">Hỏi đáp</a></li>
                <li><a href="//www.ivivu.com/ho-tro">Hỗ trợ</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="navbar-collapse pull-left visible-xs">
          <ul class="nav navbar-nav" id="dropdown-nav-mobile" role="menu">
            <li class="active"><a href="//www.ivivu.com">Khách sạn <span class="sr-only">(current)</span></a></li>
            <li><a href="//www.ivivu.com/du-lich">Tours</a></li>
            <li><a href="//www.ivivu.com/ve-may-bay">Vé máy bay</a></li>

            <li><a href="//www.ivivu.com/ve-vui-choi">Vé vui chơi</a></li>
            <li><a href="/bespoke" target="_blank">Bespoke</a></li>
            <li><a href="//www.ivivu.com/blog" target="_blank">Cẩm nang du lịch</a></li>
            <li>
              <a href="javascript:void(0)" onclick="Common.login()" data-keyboard="true" id="searchlogingg">Tài khoản
                đặt phòng</a>
            </li>


            <li><a href="//www.ivivu.com/gioi-thieu">Giới thiệu</a></li>
            <li><a href="//www.ivivu.com/hoi-dap">Hỏi đáp</a></li>
            <li><a href="//www.ivivu.com/ho-tro">Hỗ trợ</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->


        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav" style="position:relative">

            <li data-placement="left" style="position: absolute; left: -80px;" title="Tìm kiếm khách sạn">

            </li>


            <li class="visible-xs">
              <div class="hotline">
                <div class="hotline-item"><a class="hotline-link" id="MobileHotlineNumber" href="tel:19001870"><i
                      class="fa fa-phone"></i> 1900 1870</a></div>
                <div class="hotline-item">
                  <div class="dropdown hotline-dropdown">
                    <p class="hotline-location pull-right dropdown-toggle" data-toggle="dropdown">
                      <span class="v-margin-right-5" id="MobileTime"><i class="fa fa-clock-o"></i> 7h30 → 21h</span>
                      <i class="fa fa-map-marker"></i> <span id="mobileDisplayName">iVIVU HCM</span> <i
                        class="fa fa-angle-down"></i>
                    </p>
                    <ul class="dropdown-menu" role="menu">
                      <li onclick="HeaderHotline('SG')">
                        <div class="hotline-dd-item">
                          <span class="pull-left v-padding-right-5"> Hồ Chí Minh </span>
                          <span class="pull-right vcolor-warning">1900 1870</span>
                          <div class="clearfix"></div>
                        </div>
                      </li>
                      <li onclick="HeaderHotline('HN')">
                        <div class="hotline-dd-item">
                          <span class="pull-left v-padding-right-5"> Hà Nội </span>
                          <span class="pull-right vcolor-warning">1900 2045</span>
                          <div class="clearfix"></div>
                        </div>
                      </li>
                      <li onclick="HeaderHotline('CT')">
                        <div class="hotline-dd-item">
                          <span class="pull-left v-padding-right-5"> Cần Thơ </span>
                          <span class="pull-right vcolor-warning">1900 2087</span>
                          <div class="clearfix"></div>
                        </div>
                      </li>


                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <!-- START Member Menu -->

            <li class="dropdown user-login" id="UserLogin">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <div class="img-wrapper-mb visible-xs">
                  <img class="img-circle" data-src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg"
                    src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
                </div>
                <div class="hidden-xs hidden-sm">
                  <div class="img-wrapper">
                    <img class="img-circle loaded"
                      data-src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg"
                      src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg" data-was-processed="true">
                  </div>
                  <span class="username-header">Tài khoản</span> <i class="fa fa-angle-down"></i>
                </div>
              </a>
              <ul class="dropdown-menu member-dropdown-menu user-menu-list" role="menu">

                <li class="btn-login-wrap">
                  <btn type="button" class="btn btn-action btn-login-header" onclick="showLoginDialog()">Đăng nhập</btn>
                </li>
                <li class="register-text">Chưa có tài khoản? <span class="register-link"
                    onclick="showRegisterDialog()">Đăng ký</span> ngay</li>
              </ul>
            </li>
            <!-- END Member Menu -->
            <!-- START Payment Login -->
            <li class="dropdown user-login hidden" id="UserMenu">
              <!--add class logged-in-->
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                <div class="img-wrapper-mb visible-xs">
                  <img class="img-circle" data-src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg"
                    src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
                </div>
                <div class="hidden-xs hidden-sm">
                  <div class="img-wrapper"><img class="img-circle" id="avatarDesk"
                      src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg"></div>
                  <span class="hidden-md user-name" id="UserName"> <i class="fa fa-angle-down"></i></span>
                </div>
              </a>
              <ul class="dropdown-menu member-dropdown-menu" role="menu">

                <!--visible in mobile view-->
                <li class="visible-xs">
                  <div class="member-header">
                    <div class="member-header__avatar img-wrapper-mobile">
                      <img class="img-circle" id="avatarMobi"
                        src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
                    </div>
                    <div class="member-header__info">
                      <p class="no-margin name max user-name" id="Name"></p>

                    </div>
                  </div>
                </li>

                <li class="divider visible-xs afterLogin" style="margin-top:0px;"></li>

              </ul>
            </li>
            <!-- END Payment Login -->
            <li class="hidden-xs hidden-sm">
              <div class="hotline">
                <div class="hotline-item">
                  <a class="hotline-link" id="DeskHotlineNumber" href="tel:19001870"><i class="fa fa-phone"></i> 1900
                    1870</a>
                </div>
                <div class="hotline-item">
                  <div class="dropdown hotline-dropdown">
                    <p class="hotline-location pull-right dropdown-toggle" data-toggle="dropdown">
                      <span class="v-margin-right-5" id="DeskTime"><i class="fa fa-clock-o"></i> 7h30 → 21h</span>
                      <i class="fa fa-map-marker"></i> <span class="visible-lg-inline-block" id="DeskDisplayName">Hồ Chí
                        Minh</span> <span class="hidden-lg">iVIVU HCM</span> <i class="fa fa-angle-down"></i>
                    </p>
                    <ul class="dropdown-menu" role="menu">
                      <li onclick="HeaderHotline('SG')">
                        <div class="hotline-dd-item active">
                          <span class="pull-left v-padding-right-5"> Hồ Chí Minh </span>
                          <span class="pull-right vcolor-warning">1900 1870</span>
                          <div class="clearfix"></div>
                        </div>
                      </li>
                      <li onclick="HeaderHotline('HN')">
                        <div class="hotline-dd-item">
                          <span class="pull-left v-padding-right-5"> Hà Nội </span>
                          <span class="pull-right vcolor-warning">1900 2045</span>
                          <div class="clearfix"></div>
                        </div>
                      </li>
                      <li onclick="HeaderHotline('CT')">
                        <div class="hotline-dd-item">
                          <span class="pull-left v-padding-right-5"> Cần Thơ </span>
                          <span class="pull-right vcolor-warning">1900 2087</span>
                          <div class="clearfix"></div>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>

        </div>


        <!-- BEGIN TOPSEARCH -->


        <!-- END TOPSEARCH -->


        <div class="col-xs-12 header-search-form__outer" style="display:none;">
          <div class="container">
            <div class="searchbox-wrap clearfix">
              <form id="header-search-form" action="//www.ivivu.com/tim-kiem" method="GET">
                <div class="col-xs-12 header-search-form">
                  <div class="col-xs-12 col-sm-5 col-md-5 hotel-div">
                    <div class="form-group ">
                      <label class="control-label ">Tìm nhanh khách sạn</label>
                      <input type="text" class="form-control typeahead " maxlength="255" id="search-header-text"
                        name="q" autocomplete="off" placeholder="Nhập tên thành phố, khu vực, khách sạn">

                      <input type="hidden" id="linkStore ">
                      <div id="header-search-autocomplete" class="search-autocomplete">
                        <div class="autocomplete-wrap"></div>
                      </div>
                    </div>

                  </div>
                  <div class="col-xs-12 col-sm-5 col-md-5 no-padding search-quantity">
                    <div class="col-xs-5 date-div check-in ">
                      <div class="form-group has-feedback date-menu-checkin">
                        <label class="control-label">Nhận phòng</label>
                        <input readonly="" type="text" class="form-control input-white" maxlength="12"
                          id="datepicker-menu-chkin" name="di" value="14-08-2024" lang="14-08-2024">
                        <span class="fa fa-calendar-o form-control-feedback"></span>
                      </div>
                    </div>

                    <div class="col-xs-2 select-div" style="padding-left:0; padding-right:0;">

                      <div class="form-group ">
                        <label class="control-label">Số đêm</label>
                        <div>
                          <select id="datepicker-menu-nights" name="dn" class="form-control"
                            style="border-right-width: 1.5px">
                            <option value="1" selected="">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>

                            <option value="0">30+</option>
                          </select>
                          <span class="fa fa-angle-down  select-icon"></span>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-5 date-div check-out ">
                      <div class="form-group has-feedback">
                        <label class="control-label">Trả phòng </label>
                        <input readonly="" type="text" class="form-control input-white" maxlength="12"
                          id="datepicker-menu-chkout" name="do" value="15-08-2024" lang="15-08-2024">
                        <span class="fa fa-calendar-o form-control-feedback"></span>
                      </div>
                    </div>




                  </div>

                  <div class="col-xs-12 col-sm-2 col-md-2 action-div">
                    <div class="form-group has-feedback">
                      <label class="control-label hidden-xs">&nbsp;</label>
                      <button class="btn btn-action btn-block " id="header-search-button">Tìm kiếm</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </nav>

  </header>

  <ul id="UserNotLogged" style="visibility: hidden; position: absolute;">

    <li class="btn-login-wrap">
      <btn type="button" class="btn btn-action btn-login-header" onclick="showLoginDialog()">Đăng nhập</btn>
    </li>
    <li class="register-text">Chưa có tài khoản? <span class="register-link" onclick="showRegisterDialog()">Đăng
        ký</span> ngay</li>
  </ul>


  <ul id="UserLogged" style="visibility: hidden; position: absolute;">
    <li class="visible-xs">
      <div class="member-header">
        <div class="member-header__avatar img-wrapper-mobile">
          <img class="img-circle" src="">
        </div>
        <div class="member-header__info">
          <p class="no-margin name max username-header"></p>
          <p class="no-margin description max userMail-header"></p>
        </div>
      </div>
    </li>
    <li class="divider visible-xs" style="margin-top:0px;"></li>
    <li><a href="https://member.ivivu.com/dashboard/trips">Kỳ nghỉ của tôi</a></li>
    <li><a href="https://member.ivivu.com/dashboard/voucher">Voucher của tôi</a></li>

    <li>
      <a class="col-xs-12 point-menu-padding equal-row" href="https://member.ivivu.com/dashboard/points">
        <span class="col-xs-6">iVIVUPoint</span>
        <span class="col-xs-6 point-text">
          <span class="userPoint-header"></span> điểm
        </span>
      </a>
    </li>
    <li><a href="https://member.ivivu.com/dashboard/profile">Hồ sơ của tôi</a></li>
    <li><a href="https://member.ivivu.com/dashboard/my-review">Nhận xét của tôi</a></li>
    <div class="col-xs-12 logout-btn-wrap">
      <button class="col-xs-12 logout-btn" type="button" onclick="logoutUser();">Đăng xuất</button>
    </div>
  </ul>

  <!-- END HEADER -->
  <!-- BEGIN BODY -->


  <!-- BEGIN HOME SLIDER  -->


  <!-- END HOME SLIDER -->
  <!-- BEGIN HOME SEARCH -->
  <div class="main-home ng-scope" ng-app="Contracting" ng-controller="homepage.ctrl">


    <div class="col-xs-12 no-padding">
      <div class="hero-container" id="hero-banner-home"
        data-href="https://www.ivivu.com/khach-san-da-nang/intercontinental-danang-sun-peninsula-resort"
        style="background-image:url(https://cdn1.ivivu.com/images/2024/06/18/11/InterContinental_dn-t_hbekz7_.webp); cursor: pointer;">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="col-xs-12 col-lg-8 no-padding">
                <div class="col-xs-12 no-padding hero-form" id="hero-form">
                  <div class="col-xs-12 no-padding">
                    <h1 class="hero-heading hero-heading-1">Trải nghiệm kỳ nghỉ tuyệt vời</h1>
                    <h2 class="hero-heading hero-heading-2 hidden-xs">Combo khách sạn - vé máy bay - đưa đón sân bay giá
                      tốt nhất</h2>
                    <h2 class="hero-heading hero-heading-2 visible-xs">Combo khách sạn - vé máy bay - đưa đón tốt nhất
                    </h2>
                  </div>
                  <div class="col-xs-12 search-form home-page">
                    <div class="row">
                      <!-- ngIf: isShowBizAcc -->
                      <div class="col-xs-12 v-margin-bottom-15 typeahead-container search-fullframe">
                        <div class="col-xs-12 no-padding v_field ">
                          <div class="input-icon" style="position:absolute;">
                            <i class="icon-ic_ivivu_user_location"></i>
                          </div>
                          <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input
                              id="searchText" style="padding-left: 50px; position: relative; vertical-align: top;"
                              type="text" class="form-control v_field__input search-input typeahead tt-input"
                              maxlength="200" placeholder="Bạn muốn đi đâu?" autocomplete="off" spellcheck="false"
                              dir="auto">
                            <pre aria-hidden="true"
                              style="position: absolute; visibility: hidden; white-space: pre; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                            <div class="tt-menu"
                              style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                              <div class="tt-dataset tt-dataset-recents"></div>
                              <div class="tt-dataset tt-dataset-hots"></div>
                              <div class="tt-dataset tt-dataset-locas"></div>
                            </div>
                          </span>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6 dates t-datepicker">
                        <div class="col-xs-6 no-padding check-in  t-check-in" id="check-in-date-search">
                          <div class="t-dates col-xs-12 v_field t-date-check-in"><i
                              class="vicon vicon-check-in icon"></i><i class="vicon vicon-check-out icon"></i><label
                              class="t-date-info-title"></label>
                            <div class="v_field__content">
                              <p class="v_field__text"><span class="t-day-check-in"> 14</span><span
                                  class="t-month-check-in"> tháng 08 </span></p>
                              <p class="v_field__description">Thứ tư</p>
                            </div>
                          </div><input type="text" class="t-input t-input-check-in" value="08-14-2024" name="t-start">
                        </div>
                        <div class="col-xs-6 no-padding check-out  t-check-out">
                          <div class="t-dates col-xs-12 v_field t-date-check-out">
                            <div class="nights"><span class="night">1</span><i
                                class="vicon vicon-free-night-stay icon"></i></div><i
                              class="vicon vicon-check-in icon"></i><i class="vicon vicon-check-out icon"></i><label
                              class="t-date-info-title"></label>
                            <div class="v_field__content">
                              <p class="v_field__text"><span class="t-day-check-out"> 15</span><span
                                  class="t-month-check-out"> tháng 08 </span></p>
                              <p class="v_field__description">Thứ năm</p>
                            </div>
                          </div><input type="text" class="t-input t-input-check-out" value="08-15-2024" name="t-end">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 rooms" id="search-form-rooms">
                        <div class="col-xs-12 v_field">
                          <div class="v_field__icon-container">
                            <i class="vicon vicon-travelers icon"></i>
                          </div>
                          <div class="v_field__content ng-hide"
                            ng-hide="FilterRooms.RoomsRequest[0] &amp;&amp; FilterRooms.RoomsRequest[0].Adults">
                            <p class="v_field__text">2 người lớn, 0 trẻ em</p>
                            <p class="v_field__description">1 Phòng</p>
                          </div>
                          <div class="v_field__content"
                            ng-show="FilterRooms.RoomsRequest[0] &amp;&amp; FilterRooms.RoomsRequest[0].Adults">
                            <p class="v_field__text ng-binding">2 người lớn, 0 trẻ em</p>
                            <p class="v_field__description ng-binding">1 Phòng</p>
                          </div>
                        </div>

                        <div class="col-xs-12 room-popover room-popover-header" data-display="false"
                          style="display: none">
                          <div class="col-xs-12 room-popover__inner">
                            <div id="dragHandle" class="drag-handle"></div>
                            <div style="display: flex" class="col-xs-12 room-popover__item">
                              <div class="col-xs-6 room-popover__quantity no-padding">
                                <div class="div-title">Phòng</div>
                              </div>
                              <div class="col-xs-6 no-padding text-right div-passenger">
                                <div class="btn-group div-number-passenger">
                                  <span
                                    ng-click="RoomNumber.value > 1 &amp;&amp; PlusOrMinusObject('room','-',1,RoomConfig.length)"
                                    ng-class="{'disabled': RoomNumber.value === 1}" class="ivvcon-less disabled"><span
                                      class="path1"></span><span class="path2"></span><span
                                      ng-class="{'disabled': RoomNumber.value === 1}"
                                      class="path3 disabled"></span></span>
                                  <div class="quantity ng-binding">1</div>
                                  <span ng-click="PlusOrMinusObject('room','+',1,RoomConfig.length)"
                                    class="ivvcon-more"><span class="path1"></span><span class="path2"></span><span
                                      class="path3"></span></span>
                                </div>
                              </div>
                            </div>
                            <div style="display: flex" class="col-xs-12 room-popover__item deline">
                              <div class="col-xs-6 room-popover__quantity no-padding">
                                <div class="div-title">Người Lớn</div>
                                <div class="div-detail ng-binding">Từ 18 tuổi</div>
                              </div>
                              <div class="col-xs-6 no-padding text-right div-passenger">
                                <div class="btn-group div-number-passenger">
                                  <span ng-click="PlusOrMinusObject('adult','-',RoomNumber.value ,AdultsConfig.length)"
                                    class="ivvcon-less"><span class="path1"></span><span class="path2"></span><span
                                      class="path3"></span></span>
                                  <div class="quantity ng-binding">2</div>
                                  <span ng-click="PlusOrMinusObject('adult','+',RoomNumber.value,AdultsConfig.length)"
                                    class="ivvcon-more"><span class="path1"></span><span class="path2"></span><span
                                      class="path3"></span></span>
                                </div>
                              </div>
                            </div>
                            <div style="display: flex" class="col-xs-12 room-popover__item deline">
                              <div class="col-xs-6 room-popover__quantity no-padding">
                                <div class="div-title">Trẻ Em</div>
                                <div class="div-detail ng-binding">Từ 0 - 17 tuổi</div>
                              </div>
                              <div class="col-xs-6 no-padding text-right div-passenger">
                                <div class="btn-group div-number-passenger">
                                  <span ng-click="PlusOrMinusObject('child','-',0,ChildConfig.length)"
                                    class="ivvcon-less"><span class="path1"></span><span class="path2"></span><span
                                      class="path3"></span></span>
                                  <div class="quantity ng-binding">0</div>
                                  <span ng-click="PlusOrMinusObject('child','+',0,ChildConfig.length)"
                                    class="ivvcon-more"><span class="path1"></span><span class="path2"></span><span
                                      class="path3"></span></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-12 room-popover__item child-age-selection div-destop ng-hide"
                              ng-show="FilterRooms.RoomsRequest[0].AgeChilds.length>0">
                              <div class="v-margin-bottom-5 title-child ng-hide"
                                ng-show="FilterRooms.RoomsRequest[0].AgeChilds.length>0">Độ tuổi trẻ em</div>
                              <ul class="child-ages">
                                <!-- ngRepeat: itemAge in FilterRooms.RoomsRequest[0].AgeChilds track by $index -->
                              </ul>
                            </div>
                            <!--<div class="col-xs-12 room-popover__item child-age-selection-mb  div-mobile" ng-show="FilterRooms.RoomsRequest[0].AgeChilds.length>0">

                                                    <ul class="child-ages">
                                                        <li class="col-xs-12 child-ages__item" ng-repeat="itemAge in FilterRooms.RoomsRequest[0].AgeChilds track by $index">
                                                            <div class="col-xs-6 child-age-index">Tuổi trẻ em {{$index + 1}}</div>
                                                            <div class="col-xs-6 no-padding select-child">
                                                                <select name="name" class="form-control" ng-model="FilterRooms.RoomsRequest[0].AgeChilds[$index]" ng-options="option.label for option in AgeChildConfig track by option.value"></select>-->

                            <!--</div>
                                                        </li>
                                                    </ul>
                                                </div>-->
                          </div>
                          <div class="col-xs-12 room-popover__item request-group-popover none-padding">
                            <div class="col-xs-6 room-popover__quantity no-padding div-contact">
                              <div class="div-group">Đặt đoàn/ nhóm</div>

                              <a class="div-link" href="/yeu-cau-khach-doan" target="_blank">Liên hệ</a>

                            </div>
                            <div class="col-xs-12 btn-search-mb">
                              <button ng-click="SearchHotel()"
                                class="btn btn-action btn-block  search-form-button btn-big">
                                <b> Tìm <span class="visible-xs-inline-block">Kiếm</span></b>
                              </button>
                            </div>
                            <p class="close-popup-filter close-popup"><span class="ivvcon-colapse"><span
                                  class="path1"></span><span class="path2"></span><span class="path3"></span></span></p>

                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-2 ">
                        <button ng-click="SearchHotel()" class="btn btn-action btn-block  search-form-button btn-big">
                          <b> Tìm <span class="visible-xs-inline-block">kiếm</span></b>
                        </button>
                      </div>
                      <!-- ngIf: isShowBizAcc -->
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 hidden-xs" style="height:100px">
                  &nbsp;
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END HOME SEARCH -->
    <div class="container mainContainer">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mainContent">

        <!-- BEGIN MOST INTERESTING HOTELS -->
        <!-- ngIf: topSaleCount>0 -->
        <p class="top-sale visible-xs row ng-scope" ng-if="topSaleCount>0"><img width="20"
            style="vertical-align: text-bottom;" src="https://res.ivivu.com/hotel/img/fire-sale.svg"><span
            class="ng-binding">1.098 khách đã đặt phòng trong 24h qua</span></p><!-- end ngIf: topSaleCount>0 -->
        <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30 visible-xs">
          <div class="col-xs-12 no-padding heading">
            <h2 class="heading__title">
              Combo tốt nhất hôm nay
            </h2>
            <p class="heading__description">Nhanh tay đặt ngay. Để mai sẽ lỡ</p>
          </div>
          <div class="col-xs-12 no-padding promotion-cards">
            <div class=" item-placeholder-loading item-placeholder-loading__flash"
              style="border-radius: 6px; height: 0px; display: none;">
            </div>
            <div class="col-xs-12 no-padding owl-carousel owl-carousel-promotion owl-theme owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all;">
                  <div class="owl-item">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-phan-thiet/khu-nghi-duong-movenpick-phan-thiet"
                        target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/07/12/11/Movenpick_PT-mb_9ci7k4_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-tinh-phu-yen/zannier-hotels-bai-san-ho" target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/08/01/13/Zannier-mb_h61ecn_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-vung-tau/khu-nghi-duong-holiday-inn-ho-tram"
                        target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/07/12/11/HOLIDAYINN_HT-mb_tskoce_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-nha-trang/swandor-cam-ranh-hotels-resorts"
                        target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/07/12/11/Swandor_CR-mb_vomun5_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-quy-nhon/khu-nghi-duong-crown-retreat-quy-nhon"
                        target="_blank">
                        <figure>
                          <picture>



                            <img
                              src="https://cdn1.ivivu.com/images/2024/06/19/11/KhunghiduongCrownRetreatQuyNhon_nt-mb_3xknp4_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
              </div>
              <div class="owl-dots">
                <div class="owl-dot active"><span></span></div>
                <div class="owl-dot"><span></span></div>
                <div class="owl-dot"><span></span></div>
                <div class="owl-dot"><span></span></div>
                <div class="owl-dot"><span></span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 no-padding v-margin-top-30 hidden-xs">
          <div class="col-xs-12 no-padding heading">
            <h2 class="heading__title">Combo tốt nhất hôm nay <!-- ngIf: topSaleCount>0 --><span
                class="top-sale ng-binding ng-scope" ng-if="topSaleCount>0"><img width="20"
                  style="vertical-align: text-bottom;" src="https://res.ivivu.com/hotel/img/fire-sale.svg">1.098 khách
                đã đặt phòng trong 24h qua</span><!-- end ngIf: topSaleCount>0 --></h2>
            <p class="heading__description">Nhanh tay đặt ngay. Để mai sẽ lỡ</p>
          </div>
          <div class="col-xs-12 no-padding promotion-cards">
            <div class=" item-placeholder-loading item-placeholder-loading__flash"
              style="border-radius: 6px; height: 0px; display: none;">
            </div>
            <div class="col-xs-12 no-padding owl-carousel owl-carousel-promotion owl-theme owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 5775px;">
                  <div class="owl-item active" style="width: 1140px; margin-right: 15px;">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-quy-nhon/khach-san-flc-luxury-quy-nhon" target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/07/12/11/FLC-QN_sd_3swl7c_.webp"
                              class="loading" data-was-processed="true">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 1140px; margin-right: 15px;">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-can-tho/azerai-can-tho" target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/08/07/15/Azerai_CT-sd_g1uh94_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 1140px; margin-right: 15px;">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-phu-quoc/khu-nghi-duong-intercontinental-phu-quoc-long-beach"
                        target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/04/22/19/intercon_pq-sd_xxdxtd_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 1140px; margin-right: 15px;">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-vung-tau/khu-nghi-duong-holiday-inn-ho-tram"
                        target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/07/12/11/HOLIDAYINN_HT-sd_3i1zpz_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 1140px; margin-right: 15px;">
                    <div class="col-xs-12 promotion-card item" style="display: block;">
                      <a href="https://www.ivivu.com/khach-san-hoi-an/khu-nghi-duong-the-nam-hai-hoi-an"
                        target="_blank">
                        <figure>
                          <picture>



                            <img src="https://cdn1.ivivu.com/images/2024/07/12/11/FourSeasons-sd_3bseb7_.webp">
                          </picture>
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
              </div>
              <div class="owl-dots">
                <div class="owl-dot active"><span></span></div>
                <div class="owl-dot"><span></span></div>
                <div class="owl-dot"><span></span></div>
                <div class="owl-dot"><span></span></div>
                <div class="owl-dot"><span></span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30">
          <div class="col-xs-12 no-padding heading">

            <h2 class="heading__title">Hè đến rồi, đi chơi thôi!</h2>
            <p class="heading__description">Thư giãn - Nạp năng lượng - Khám phá mới</p>

          </div>
          <div class="col-xs-12 no-padding v-margin-bottom-15">
            <div class="item-placeholder-loading item-placeholder-loading__flash" style="display: none; height: 0px;">
            </div>
            <div
              class="grid__container grid__container--topics super-cards topics owl-carousel  owl-carousel-mood owl-theme owl-loaded owl-drag">








              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1155px;">
                  <div class="owl-item active" style="width: 273.75px; margin-right: 15px;">
                    <div class="grid__item grid__item--1 item" style="display: block;">
                      <div class="col-xs-12 super-card" data-src="//cdn1.ivivu.com/iVivu/2024/04/28/21/untitled-cr.png"
                        data-was-processed="true"
                        style="background-image: url('//cdn1.ivivu.com/iVivu/2024/04/28/21/untitled-cr.png');">
                        <!--style="background-image: url('img');"-->
                        <a href="/chu-de/khach-san-vui-he " target="_blank">
                          <div class="col-xs-12 card-bg">
                            <div class="info">
                              <p class="title">Vui hè</p>
                              <p class="description">Chạm vào mùa hè kỳ diệu – Khám phá cùng iVIVU! - <span
                                  style="text-decoration:underline;">45 khách sạn</span></p>


                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 273.75px; margin-right: 15px;">
                    <div class="grid__item grid__item--2 item" style="display: block;">
                      <div class="col-xs-12 super-card" data-src="//cdn1.ivivu.com/iVivu/2022/01/14/16/chon-4.jpg"
                        data-was-processed="true"
                        style="background-image: url('//cdn1.ivivu.com/iVivu/2022/01/14/16/chon-4.jpg');">
                        <!--style="background-image: url('img');"-->
                        <a href="/chu-de/khach-san-villa " target="_blank">
                          <div class="col-xs-12 card-bg">
                            <div class="info">
                              <p class="title">Villa</p>
                              <p class="description">Chill tại Villa, vui hè thả ga - <span
                                  style="text-decoration:underline;">30 khách sạn</span></p>


                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 273.75px; margin-right: 15px;">
                    <div class="grid__item grid__item--3 item" style="display: block;">
                      <div class="col-xs-12 super-card" data-src="//cdn1.ivivu.com/iVivu/2023/06/01/18/tb1.png"
                        data-was-processed="true"
                        style="background-image: url('//cdn1.ivivu.com/iVivu/2023/06/01/18/tb1.png');">
                        <!--style="background-image: url('img');"-->
                        <a href="/teamx " target="_blank">
                          <div class="col-xs-12 card-bg">
                            <div class="info">
                              <p class="title">Team X</p>
                              <p class="description">Nâng tầm chuyến du lịch của công ty và đội nhóm của bạn!</p>


                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 273.75px; margin-right: 15px;">
                    <div class="grid__item grid__item--99 item" style="display: block;">
                      <div class="col-xs-12 super-card" data-src="https://cdn1.ivivu.com/images/general/dangcap1.webp"
                        data-was-processed="true"
                        style="background-image: url('https://cdn1.ivivu.com/images/general/dangcap1.webp');">
                        <!--style="background-image: url('img');"-->
                        <a href="/voucher-du-lich" target="_blank">
                          <div class="col-xs-12 card-bg">
                            <div class="info">
                              <p class="title">Gift Voucher</p>


                              <p class="description">Lưu giữ khoảnh khắc, trải nghiệm hành trình</p>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
                <div class="owl-next"><i class="fa fa-chevron-right"></i></div>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>



        <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30">
          <div class="col-xs-12 no-padding heading">
            <h2 class="heading__title">Điểm đến yêu thích trong nước</h2>
            <p class="heading__description">Lên rừng xuống biển. Trọn vẹn Việt Nam</p>
          </div>
          <!--<div class="headLineDivider"></div>-->
          <div class="col-xs-12 no-padding">
            <div class="grid__container grid__container--popular super-cards">

              <div class="grid__item grid__item--1">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phuquoc-show.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-phu-quoc" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Phú Quốc</p>

                        <p class="description hidden-xs"> 626 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--2">
                <div class="col-xs-12 super-card card-auto-height"
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/vungtau-show.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-vung-tau" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Vũng Tàu</p>

                        <p class="description hidden-xs"> 612 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--3">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2024/05/09/16/da-lat.png');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-da-lat" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Đà Lạt</p>

                        <p class="description hidden-xs"> 741 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--4">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/quynhon-show.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-quy-nhon" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Quy Nhơn</p>

                        <p class="description hidden-xs"> 77 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--5">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phanthiet-show.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-phan-thiet" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Phan Thiết</p>

                        <p class="description hidden-xs"> 293 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--6">
                <div class="col-xs-12 super-card card-auto-height"
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2024/05/09/16/nha-trang.jpg');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-nha-trang" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Nha Trang</p>

                        <p class="description hidden-xs"> 728 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--7">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2024/05/09/16/da-nang.png');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-da-nang" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Đà Nẵng</p>

                        <p class="description hidden-xs"> 958 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--8">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phuyen-show.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-tinh-phu-yen" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Phú Yên</p>

                        <p class="description hidden-xs"> 15 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30">
          <div class="col-xs-12 no-padding heading">
            <h2 class="heading__title"> Điểm đến yêu thích nước ngoài</h2>
            <p class="heading__description">Bao la thế giới. Bốn bể là nhà</p>
          </div>
          <!--<div class="headLineDivider"></div>-->
          <div class="col-xs-12 no-padding">
            <div class="grid__container grid__container--popular-2 super-cards">

              <div class="grid__item grid__item--1">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/04/17/11/kl-cr.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-kuala-lumpur" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Kuala Lumpur</p>

                        <p class="description hidden-xs">1034 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--2">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/07/11/18/cruise-terminal-banner-cr.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-singapore-singapore" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Singapore</p>

                        <p class="description hidden-xs">690 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--3">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/11/03/18/us-bangkok-th-header-cr.jpg');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-bangkok" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Bangkok</p>

                        <p class="description hidden-xs">3294 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--4">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/07/11/18/photo-1624138784614-87fd1b6528f8-cr.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-sydney-australia" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Sydney</p>

                        <p class="description hidden-xs">540 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="grid__item grid__item--5">
                <div class="col-xs-12 super-card "
                  style="background-image: url('//cdn1.ivivu.com/iVivu/2023/02/13/17/maldives-cr.webp');">
                  <!--style="background-image: url('img');"-->
                  <a href="/khach-san-maldives-maldives" target="_blank">
                    <div class="col-xs-12 card-bg">
                      <div class="info">
                        <p class="title">Maldives</p>

                        <p class="description hidden-xs">384 khách sạn</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- END MOST INTERESTING HOTELS -->
        <!-- BEGIN PLACE POPULAR -->
        <!-- END PLACE POPULAR -->
        <!--BEGIN PREDICT GUEST-->

        <style>
          .title-predict {
            font-size: 14px;
            font-weight: bold;
            padding: 4px 8px;
            background-color: #DDDDDD;
          }

          .item-place-predict {
            font-size: 14px;
            font-weight: bold;
            padding: 4px 8px;
          }
        </style>
        <!--BEGIN PREDICT GUEST-->



        <!-- Modal from button Lấy giá tốt -->




        <div class="modal fade findDealForCustomerModal" id="findDealForCustomerModal" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="padding-left:15px; text-transform: uppercase; ">
                  ĐẶT PHÒNG ĐOÀN
                  <i class="glyphicon glyphicon-info-sign fixGlyphicon vcolor-primary hidden-sm hidden-md hidden-lg"
                    style="font-size:14px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="iVIVU.com sẽ tìm kiếm những deal tốt nhất (khách sạn giá tốt nhất và tour giá tốt nhất) và
                            gửi đến địa chỉ mail của khách hàng dựa vào thông tin mà khách hàng cung cấp."></i>
                </h4>
              </div>
              <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 findDealForCustomerHeading vspacingbottom15">
                  <p class="hidden-xs">
                    Khi đặt phòng theo đoàn với iVIVU.com, bạn sẽ có được <b>khách sạn phù hợp nhất</b> với <b>giá tốt
                      nhất</b> mà <b>không phải tốn thời gian tìm kiếm</b>.
                  </p>


                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                    <div class="form-group vspacingbottom25">
                      <label class="control-label">
                        <i class="glyphicon glyphicon-home hidden"></i> Yêu cầu
                      </label>
                      <div class="findDealForCustomerStyleCheckbox">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <textarea id="typehotel" name="typehotel" class="form-control" rows="3"
                              style="resize: vertical;"
                              placeholder="Địa điểm, thời gian đặt phòng, số lượng thành viên của đoàn..."></textarea>
                          </div>
                        </div>
                      </div>


                    </div>

                    <div class="form-group vspacingbottom15">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 vspacingbottom15">
                          <div style="position:relative;">
                            <label for="findDealForCustomerPhone" class="control-label"><i
                                class="glyphicon glyphicon glyphicon-earphone hidden"></i> Điện thoại </label>

                            <div class="div-phone">
                              <input type="tel" class="form-control" id="findDealForCustomerPhone" name="phone"
                                placeholder="Số điện thoại"
                                onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
                            </div>
                          </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <div class="div-email" style="position:relative;">
                            <label for="findDealForCustomerEmail" class="control-label">
                              <i class="glyphicon glyphicon-send hidden"></i> Email
                            </label>
                            <i class="vcolor-danger" style="font-size:28px;position: absolute;" data-toggle="tooltip"
                              data-placement="top" title="" data-original-title="Bắt buộc nhập">*</i>
                            <div>
                              <input type="text" class="form-control" id="findDealForCustomerEmail" name="email"
                                placeholder="Địa chỉ email" maxlength="100">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--if have any error, set class has-error, if not, dont -->
                    <div class="alert alert-danger" role="alert" style="display:none">
                      <div class="pre-place" style="display:none">
                        <strong>
                          <i class="glyphicon glyphicon-warning-sign"></i>
                        </strong> Vui lòng nhập địa điểm.
                      </div>
                      <div class="pre-email">
                        <strong>
                          <i class="glyphicon glyphicon-warning-sign"></i>
                        </strong> Chưa nhập địa chỉ email hoặc địa chỉ email chưa đúng
                      </div>
                      <div class="pre-phone" style="display:none">
                        <strong>
                          <i class="glyphicon glyphicon-warning-sign"></i>
                        </strong> Vui lòng nhập số điện thoại.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom10">
                  <div class="findDealForCustomerGuarantee hidden">
                    • iVIVU.com cam kết đảm bảo an toàn thông tin của quý khách hàng. <br>
                    • Quý khách hàng có thể yêu cầu ngưng dịch vụ tìm kiếm deal tốt nhất bất cứ lúc nào.
                  </div>

                  <button type="button" class="btn btn-warning btn-block btn-lg vbackground-warning"
                    id="findDealForCustomerButton"
                    onclick="ga('send', { 'hitType': 'event', 'eventCategory': 'Đăng ký tìm kiếm deal', 'eventAction': 'Click', 'eventLabel': 'Đăng ký tìm kiếm deal' });">
                    Đặt phòng đoàn
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--end modal from button lấy giá tốt-->
        <!--END PREDICT GUEST-->

      </div>
    </div>


  </div>
  <!-- END BODY -->
  <?php include 'inc/js.php'; ?>
  <?php include 'inc/footer.php'; ?>
  