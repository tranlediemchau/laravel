@extends('layout.about')
@section('content')


<script type="text/javascript" language="javascript">
    function timkiem()
    {
        $('#full-search').show();

    }
</script>
<!-- start top_bg -->
<div class="web_search">

 <form action ="{{ action('ProductController@index')}}" method="get">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input type="text" name="search">
       <input type="submit" value=" ">
       <a href="#"onclick="timkiem()">Nâng cao</a>
 </form>
</div>
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">Sản Phẩm của Shop</h2>


</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
   <!-- <div id="example1_filter" class="dataTables_filter">
        <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
    </div> -->
<div class="wrap">
    <form action ="{{ action('ProductController@index')}}" method="get">

     <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div id="full-search"  style="display:none;" class="web_search" >
        <h1><i class='glyphicon glyphicon-user'></i>Tìm kiếm</h1>
        <input type="text" name="name_sp"placeholder="Tên">
        <input type="text" name="id"placeholder="id">
        <input type="text" name="price1"placeholder="Giá">
        <input type="text" name="type"placeholder="Loại hàng hóa">
        <input type="submit" value=" ">
    </div>
    </form>
<div class="main">
	<div class="top_main">

		<h2>Hàng mới nhập</h2>


		<div class="clear"></div>
	</div>
	<?php $dem  =0 ?>
	<!-- start grids_of_3 -->

	<div class="grids_of_3">

		@foreach ($products as $product)
		<div class="grid1_of_3">
			<a href="{{ action('ProductController@show', ['id' => $product->id]) }}">
				<img src="/images/{{ $product->images_url}}" alt="{{ $product->name }}"/>
				<h3>{{ $product->name }}</h3>
				<span class="price">{{ $product->price1 }}</span>
			</a>
		</div>
		@endforeach
		<div class="clear"></div>
	</div>
  {!! $products->render() !!}

<!-- start grids_of_3 -->
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