@extends('layout.about')
@section('content')
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">Sản Phẩm của Shop</h2>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="top_main">
		<h2>Hàng mới nhập</h2>
		<a href="/products">Xem tất cả</a>
		<div class="clear"></div>
	</div>
	<!-- start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<a href="/details">
				<img src="images/pic1.jpg" alt="pic1"/>
				<h3>Áo sơ mi tay ngắn phối bèo</h3>
				<span class="price">155.000</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="/details">
				<img src="images/pic2.jpg" alt="pic2"/>
				<h3>Chân váy ren xòe thời trang</h3>
				<span class="price">148.000</span>
				<span class="price1 bg">10%</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="/details">
				<img src="images/pic3.jpg" alt="pic3"/>
				<h3>Đầm ren body thời trang</h3>
				<span class="price">215.000</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="/details">
				<img src="images/pic4.jpg" alt="pic4"/>
				<h3>Túi xách hộp sang trọng</h3>
				<span class="price">260.000</span>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="top_main">
		<h2>Hàng Bán Chạy trong tháng</h2>
		<a href="/products">Xem tất cả</a>
		<div class="clear"></div>
	</div>
	<!-- start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<a href="/details">
				<img src="images/pic5.jpg" alt="pic5"/>
				<h3>Giày nhung cao gót sang trọng</h3>
				<span class="price">277.000</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="/details">
				<img src="images/pic6.jpg" alt="pic6"/>
				<h3>Áo thun nữ tay dài kẻ sọc thời trang</h3>
				<span class="price">$185,99</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="/details">
				<img src="images/pic7.jpg" alt="pic7"/>
				<h3>Áo thun tay phối caro dễ thương</h3>
				<span class="price">149.000</span>
				<span class="price1 bg1">HOT</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="/details">
				<img src="images/pic8.jpg" alt="pic8"/>
				<h3>Mắt kính nữ Vincy Korean</h3>
				<span class="price">65.000</span>
				<span class="price1 bg1">HOT</span>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<!-- start grids_of_2 -->
	<div class="grids_of_2">
		<div class="grid1_of_2">
			<div class="span1_of_2">
				<h2>Giao hàng miễn phí</h2>
				<p>Bạn sẽ được giao hàng miễn phí cho đơn hàng trên 300.000 khi ở khu vực TPHCM</p>
			</div>
			<div class="span1_of_2">
				<h2>Giảm giá cho đơn hàng lớn</h2>
				<p>Nếu bạn thanh toán đơn hàng trên 500.000 bạn sẽ được ưu đãi -5% cho tổng giá trị đơn hàng của bạn! Hãy chân đến mua sắm tại cửa hàng của chúng tôi để nhận thật nhiều ưu đãi lớn nào</p>
			</div>
		</div>
		<div class="grid1_of_2 bg">
			<h2>Tin tức mới</h2>
			<div class="grid_date">
				<div class="date1"> 
					<h4>Oct 01</h4>
				</div>
				<div class="date_text">
					<h4><a href="blog.html"> Xu hướng thời trang thu đông mới với áo tay siêu dài</a></h4>
					<p>Áo tay siêu dài - là một trong số những xu hướng mới rất đáng thử nhất trong mùa thu đông năm nay.</p> 
				</div>
				<div class="clear"></div>
			</div>
			<div class="grid_date">
				<div class="date1"> 
					<h4>Oct 05</h4>
				</div>
				<div class="date_text">
					<h4><a href="blog.html"> Cách mix đồ thu đông đẹp và sang</a></h4>
					<p>Nếu bạn là tín đồ của phong cách tối giản, chắc hẳn bạn sẽ cần lưu ý tới một vài bí kíp dưới đây.</p> 
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
@endsection