<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Good Shop | Trang Chủ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>

	<link href="/css/test.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- cho them css-->
<!--    <link href="/css/comment.css" rel="stylesheet" type="text/css" media="all" />-->
<!--    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="/bootstrap/css/paging.css">
<!-- end cho them-->

	<script src="/js/jquery.min.js" type="text/javascript"></script>

<!-- start details -->
<link rel="stylesheet" type="text/css" href="/css/productviewgallery.css" media="all" />
<script type="text/javascript" src="/js/cloud-zoom.1.0.3.min.js"></script>
<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/js/productviewgallery.js"></script>
<!--- start-mmmenu-script---->
<script src="/js/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="/css/jquery.mmenu.all.css" />

<script type="text/javascript" src="/js/jquery.mmenu.js"></script>

		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start slider -->
	<link href="/css/slider.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="/js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="/js/easing.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });
        </script>
<!-- start top_js_button -->
<script type="text/javascript" src="/js/move-top.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

</head>

<script type="text/javascript" language="javascript">
    function show_alert()
    {
        if(confirm("Bạn có thật sự muốn sữa sản phẩm này không?"))
            return true;

        else
            return false;
    }
</script>
<!--<body onload="show_alert()" -->
<body >
<!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="/"><img src="/images/logo.png" alt=""/></a>
		</div>
		 <div class="log_reg">
             @if(Auth::check())
                 <ul>
                     <span > <p style="color:white">Chào  {!!  Auth:: user()->name   !!}</p> </span>
					 @if(Auth:: user()->role==1)
                         <li><a href="/admin">Vào trang admin</a> </li>
                     <li><a href="/auth/logout">Đăng xuất</a> </li>
                     <li><a href="/personal/{!!  Auth:: user()->id   !!}/edit">Trang cá nhân</a> </li>
                     <li><a href="/personal/{!!  Auth:: user()->id   !!}/reset">Thay đổi mật khẩu</a> </li>
                     @else
                         <li><a href="/auth/logout">Đăng xuất</a> </li>
                         <li><a href="/personal/{!!  Auth:: user()->id   !!}/edit">Trang cá nhân</a> </li>
                         <li><a href="/personal/{!!  Auth:: user()->id   !!}/reset">Thay đổi mật khẩu</a> </li>
                     @endif
                 </ul>
             @else
                 <ul>
                     <li><a href="/auth/login">Đăng nhập</a> </li>
                     <span class="log"> hoặc </span>
                     <li><a href="/auth/register">Đăng ký</a> </li>
                     <div class="clear"></div>
                 </ul>
             @endif
		</div>
		<div class="web_search">
		 	<form>

				<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
				<input type="submit" value=" " />

			</form>

	    </div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start header_btm -->
<div class="wrap">
<div class="header_btm">
		<div class="menu" id="cssmenu">
			<ul>
				<li {{ (Request::is('/') ? 'class=active' : '') }}><a href="/">Trang Chủ</a></li>
				<li {{ (Request::is('products.index') ? 'class='.'has-sub active' : 'class=has-sub') }}><a href='/products'><span>Sản phẩm</span></a>
					@include('composers.CategoryMenu')
				</li>
				<!--<li><a href="/products">Sản phẩm</a></li>-->
				<li {{ (Request::is('about') ? 'class=active' : '') }}><a href="/about">Thông Tin</a></li>
				<li {{ (Request::is('blog') ? 'class=active' : '') }} ><a href="/blog">blog</a></li>
				<li {{ (Request::is('contact') ? 'class=active' : '') }}><a href="/contact">Liên hệ</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div id="smart_nav">
			<a class="navicon" href="#menu-left"> </a>
		</div>
		<nav id="menu-left">
			<ul>
				<li class="active"><a href="/">Trang Chủ</a></li>
				<li><a href="/products">Sản phẩm</a></li>
				<li><a href="/about">Thông tin</a></li>
				<li><a href="/blog">blog</a></li>
				<li><a href="/contact">Liên hệ</a></li>
				<div class="clear"></div>
			</ul>
		</nav>
	<div class="header_right">
		<ul>
			<li><a href="#"><i  class="art"></i><span class="color1">30</span></a></li>
			<li><a href="#"><i  class="cart"></i><span>0</span></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</div>
@section('content')
@show
<!-- start footer -->
<div class="footer_top">
<div class="wrap">
<div class="footer">
	<!-- start grids_of_3 -->
	<div class="span_of_3">
		<div class="span1_of_3">
			<h3>Địa chỉ cửa hàng</h3>
			<p>227 Nguyễn Văn Cừ, Phường 4, Quận 5, TP. Hồ Chí Minh</p>
			<img src="/images/cuahang.jpg" alt="cuahang"/>
		</div>
		<div class="span1_of_3">
			<h3>Mua hàng online</h3>
			<p>Dịch vụ uy tín, chuyển hàng nhanh chóng trong vòng tối đa 7 ngày, cho phép đổi trả khi hàng hóa có vấn đề.
                           .</p>
			<p class="top"></a> Mọi thắc mắc cũng như thông tin chi tiết vui lòng liên hệ email
                            <a href="#">hanguyen7394@gmail.com</a> </p>

		</div>
		<div class="span1_of_3">
			<h3>Blog</h3>
			<ul class="f_nav">
				<li><a href="#"><img src="/images/f_pic1.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="/images/f_pic2.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="/images/f_pic3.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="/images/f_pic4.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="/images/f_pic5.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="/images/f_pic6.jpg" alt="" /> </a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
<!-- start footer -->
<div class="footer_mid">
<div class="wrap">
<div class="footer">
	<div class="f_search">
		<form>
			<input type="text" value="" placeholder="Nhập email để nhận thông tin" />
			<input type="submit" value=""/>
		</form>
	</div>
	<div class="soc_icons">
			<ul>
				<li><a class="icon1" href="#"></a></li>
				<li><a class="icon2" href="#"></a></li>
				<li><a class="icon3" href="#"></a></li>
				<li><a class="icon4" href="#"></a></li>
				<li><a class="icon5" href="#"></a></li>
			</ul>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {

				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
		 		};


				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
	<div class="f_nav1">
		<ul>
			<li class="active"><a href="/">Trang Chủ</a></li>
			<li><a href="/products">Sản phẩm</a></li>
			<li><a href="/about">Thông tin</a></li>
			<li><a href="/blog">blog</a></li>
			<li><a href="/contact">Liên hệ</a></li>
			<div class="clear"></div>
		</ul>
		</div>
	<div class="copy">
		<p class="link"><span>� All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
<script src="/js/test.js"></script>
</body>
</html>