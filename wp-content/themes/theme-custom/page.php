<?php

$post_id = get_the_ID();

if ($post_id) {

$title = get_the_title();

$post_slug = get_post_field( 'post_name', $post_id );

if ($post_slug == 'home-page') {

wp_redirect(home_url());

}

$post = get_post($post_id);

$slug = $post->post_name;

$content = get_the_content();

$content = preg_replace('/<p>Last updated:.*?<\/p>/', '', $content);

$description = preg_replace('/\s+/', ' ', strip_tags($content));

$description = str_replace('"', "'", $description);

$description = substr($description, 0, 150);

if (strlen(strip_tags($content)) > 150) {

$description .= '...';

}

} else {

header("Location: /404");

exit();

}

if($description == ''){

$description = $description_home;

}

$blogname =  get_option('blogname');
$meta_keywords = get_option('meta_keywords');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?= ucfirst($title).' - '."Gác Mái"?></title>
<meta name="description" content="<?= $description; ?>">
<meta name="keywords" content="<?php get_meta_kws($meta_keywords); ?>">
<?php include 'inc/head.php'; ?>
<style type="text/css">

.content {

margin: 0 auto;

max-width: 680px;

width: 100%;

}



.sidebar {

float: right;

margin: 0 auto;

}



h1.entry-title {

margin: 0;

}

.entry-content{



line-height: 35px;

}

.entry-content a {

color: #f4796c;

text-decoration: none;



}



figure.wp-block-image {

margin: 0 0 1em;

}



.wp-block-image img,

article p>img {

display: block;

margin: 0 auto;

}



.wp-block-image img {

box-sizing: border-box;

height: auto;

width: 100%;

vertical-align: bottom;

}



.content .entry-content ol>li:before {

background: #183354;

border-radius: 100%;

color: #fff;

content: counter(list-item);

float: left;

font-family: Raleway, sans-serif;

font-size: 15px;

font-weight: 800;

height: 20px;

line-height: 18px;

margin-left: -28px;

margin-top: 6px;

text-align: center;

width: 20px;

}



.content .entry-content ol {

margin-left: 32px;

}



.content .entry-content ol {

list-style-type: none;

}



img.wp-smiley,

img.emoji {

display: inline !important;

border: none !important;

box-shadow: none !important;

height: 1em !important;

width: 1em !important;

margin: 0 0.07em !important;

vertical-align: -0.1em !important;

background: none !important;

padding: 0 !important;

}



.mk-introduce {

background: #f6f5f3;

margin-top: 45px;

padding: 20px;

}



.mk-container {

font-size: 15px;

text-align: center;

}



.mk-introduce .image {

margin: -60px auto 8px;

max-width: 125px;

}



.mk-container .image img {

border-radius: 100%;

display: block;

margin: 0 auto;

}



.mk-meet {

background: #0000;

border-bottom: 4px solid #183354;

border-top: 4px solid #183354;

min-height: 149px;

padding: 8px 12px;

}



.mk-meet .image {

float: right;

margin-left: 8px;

max-width: 125px;

}



.mk-meet .widget-title {

margin-top: 8px;

}



.mk-meet .widget-title {

line-height: 1;

}



.widget-title {

font-size: 32px;

}



.mk-container .text {

line-height: 1.6;

margin-top: 4px;

}



a.more-link {

background: #fff;

color: #f4796c;

border-radius: 60px;

display: inline-block;

font-size: 12px;

font-weight: 800;

letter-spacing: .075em;

padding: 8px 16px;

text-transform: uppercase;

}



.more-link:hover {

background: #f4796c;

color: #fff;

}



a.more-link .fa-chevron-right {

margin: 0px 6px;

}



.more-link-container {

display: block;

margin-top: 8px;

text-align: center;

}



.mk-meet .more-link {

color: #183354;

padding-top: 0;

}



.mk-meet .more-link:hover {

background: #0000;

color: #0a1d2d;

opacity: 1

}



.widget_media_image {

margin-bottom: 8px;

}



.widget {

margin-bottom: 24px;

}



@media screen and (min-width: 1025px) {

.sidebar {

display: block;

max-width: 340px;

margin-top: 60px;

}



.content {

float: left;

max-width: 650px;

}

}



@media screen and (min-width: 768px) {

.content {

margin-top: 20px;



margin: 0 auto;

width: 100%;

}

}

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
<span>
<a href="/">Trang chủ</a>
</span>
<svg class="fa-chevron-right" aria-hidden="true" data-prefix="fa" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
<path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
</svg>
<span class="breadcrumb_last" aria-current="page"><?= ucfirst($title) ?></span>
</span>
</div>
</div>
</div>
<div class="container">
<main class="">
<?php
if ($slug == 'lien-he') { ?>
<div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
<div class="text-center mb-5">
<h1 class="fw-bolder">Xin chào! Chúng tôi có thể giúp gì cho bạn? </h1>
<p>Vui lòng điền vào mẫu dưới đây để liên hệ với chúng tôi</p>
</div>
<div class="d-flex justify-content-center">
<form id="contactForm" action="" enctype="multipart/form-data">
<div>
<div class="form-group form-group-textarea mb-md-0">
<label for="message" class="form-label">Nội dung</label>
<textarea class="form-control" name="message" id="message" style="    height: 120px;"></textarea>
</div>
<div class="form-group mt-3">
<div class="row">
<div class="col-md col-12 pr-md-1 mb-3">
<label for="name" class="form-label">Tên<span class="field_required">(Required)</span></label>
<input class="form-control" name="name" id="name" type="text">
<div class="invalid-feedback" data-feedback="name:required">Họ và tên không được trống.</div>
</div>
<div class="col-md col-12 pl-lg-1 mb-3">
<label for="email" class="form-label">Email<span class="field_required">(Required)</span></label>
<input class="form-control is-invalid" name="email" id="email" type="email">
<div class="invalid-feedback" data-feedback="email:required">Email không được trống.</div>
<div class="invalid-feedback" data-feedback="email:email">Email không đúng định dạng.</div>
</div>
<div class="col-md col-12 pl-lg-1 mb-3">
<label for="phone" class="form-label">Số điện thoại<span class="field_required">(Required)</span></label>
<input class="form-control" name="phone" id="phone" type="number">
<div class="invalid-feedback" data-feedback="phone:required">Số điện thoại không đúng định dạng.</div>
</div>
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
<div>
<button class="btn btn-blue text-uppercase" id="submitButton" type="submit">Gửi yêu cầu</button>
</div>
</form>
</div>
</div>
<?php } else { ?>
<article>
<h1 class="entry-title text-center"><?= $title ?></h1>
<div class="entry-content">
<?= $content ?>
</div>
</article>
<?php }

?>
</main>
</div>
</div>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/js.php'; ?>
<script type="text/javascript">
$(document).ready(function() {
// editorBlock('#content')
var $form = document.querySelector('#contactForm')
$form.addEventListener('submit', function(e) {
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

afterSend: function() {

$('#loadingMessage').removeClass('d-none')

},

success: function(res) {

try {

res = JSON.parse(res)

if (res.status == 'success') {

$('#submitSuccessMessage').removeClass('d-none')

} else {

$('#submitErrorMessage').removeClass('d-none')

}

} catch (e) {

$('#submitErrorMessage').removeClass('d-none')

}

},

error: function(xhr, status, error) {

$('#submitErrorMessage').removeClass('d-none')

},

complete: function() {

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

var isValid = true;

$('[data-feedback="name:required"]').hide()

$('[data-feedback="email:required"]').hide()

$('[data-feedback="email:email"]').hide()

$('[data-feedback="phone:required"]').hide()

$('[data-feedback="phone:phone"]').hide()

if (!nameInput.val()) {

$('[data-feedback="name:required"]').show()

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

</script>
</body>
</html>