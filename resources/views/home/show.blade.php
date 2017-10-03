@extends('layout.about')
@section('content')
<!-- start top_bg -->

<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">Giày Dép</h2>
</div>
</div>
</div>

<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<!-- start content -->
	<div class="single">
		<!-- start span1_of_1 -->
		<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
						<div class="more-views">
							<div class="more-views-container">
							<ul>
								<li>
									<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
									<img src="" src_main=""  title="" alt="" /></a>            
								</li>
								<li>
									<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" href=""  title="" alt="">
									<img src="" src_main=""  title="" alt="" /></a>
								</li>
								<li>
									<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
									<img src="" src_main=""  title="" alt="" /></a> 
								</li>
								<li>
									<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" href=""  title="" alt="">
									<img src="" src_main="" title="" alt="" /></a>  
								</li>
								<li>
									<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
									<img src="" src_main="" title="" alt="" /></a>
								</li>
							  </ul>
							</div>
						</div>
					
				    <div class="product-image"> 
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="/images/{{$product->thumb1}}" title="Women Shorts" alt="Women Shorts">
				           	<img src="/images/{{$product->thumb1}}" alt="Women Shorts" title="Women Shorts" />
				        </a>
				   </div>
					<script type="text/javascript">
						var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"/images/details/{{$product->thumb1}}","main":"/images/large/{{$product->thumb1}}","thumb":"/images/small/{{$product->thumb1}}","label":""},"gallery":{"item_0":{"orig":"/images/details/{{$product->thumb1}}","main":"/images/large/{{$product->thumb1}}","thumb":"/images/small/{{$product->thumb1}}","label":""},"item_2":{"orig":"/images/details/{{$product->thumb2}}","main":"/images/large/{{$product->thumb2}}","thumb":"/images/small/{{$product->thumb2}}","label":""},"item_3":{"orig":"/images/details/{{$product->thumb3}}","main":"/images/large/{{$product->thumb3}}","thumb":"/images/small/{{$product->thumb3}}","label":""}},"type":"simple","video":false}}'),
						    gallery_elmnt = jQblvg('.product-img-box'),
						    galleryObj = new Object(),
						    gallery_conf = new Object();
						    gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt=""><img src="" src_main="" title="" alt="" /></a>';
						    gallery_conf.animspeed = 200;
						jQblvg(document).ready(function() {
						    galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
						        jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
						    jQblvg('.cs-fancybox-thumbs').fancybox({ prevEffect : 'none', 
						                             nextEffect : 'none',
						                             closeBtn : true,
						                             arrows : true,
						                             nextClick : true, 
						                             helpers: {
						                               thumbs : {
						                                   position: 'bottom'
						                               }
						                             }
						                             });
						    jQblvg('#wrap').css('z-index', '100');
						            jQblvg('.more-views-container').elScroll({type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });
						        
						});
						
						function initGallery(a,b,element) {
						    galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
						};
					</script>
				</div>
				</div>
				</div>
			</div>
			
			<!-- end product_slider -->
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					
					<h3>{{$product->name}}</h3>
					<h5>{{$product->price1}} <span>{{$product->price2}}</span>  <a href="#">Bấm để thêm</a></h5>
					<div class="available">
						<div class="btn_form">
							<form>
								<input type="submit" value="Thêm vào giỏ" title="" />
							</form>
						</div>
						<span><a href="#">Đăng nhập để thêm vào giỏ hàng </a></span>
						<p class="para"> {{$product->discription}}</p>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Chia sẻ qua:</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- start left_sidebar -->
			<div class="left_sidebar">
				<h4>Sản phẩm tương tự</h4>
                                
                               
				<div class="left_products">
				@foreach ($similarProduct as $similarProduct)
				
					<div class="left_img">
						<img src="/images/{{ $similarProduct->images_url}}"alt="/images/{{ $similarProduct->images_url}}"/>
					</div>
					<div class="left_text">
						<p><a href="details.html">Dép xỏ ngón hồng xì teen</a></p>
						<span class="line">{{$similarProduct->price2}}</span>
						<span>{{$similarProduct->price1}}</span>
					</div>
					<div class="clear"></div>
				@endforeach
				</div>

			</div>
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
	</div>
</div>
</div>
@endsection