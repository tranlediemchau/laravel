@extends('layout.about')
@section('content')



<!-- start slider -->
<div class="slider">
    <!---start-image-slider---->
    <div class="image-slider">
        <div class="wrapper">
            <div id="ei-slider" class="ei-slider">
                <ul class="ei-slider-large">
                    <li>
                        <img src="images/slider-shop.jpg" alt="image06"/>
                        <div class="ei-title">
                            <h3 class="btn">GOOD SHOP</h3>
                            <h2>Mua Sắm thoải mái<br>Mặt hàng phong phú</h2>
                            <h3 class="active">Kiểu dáng thời trang, phù hợp với mọi phong cách<br/>Thường xuyên có những ưu đãi hấp dẫn</h3>
                            <h3>
                                <a class="ei_icons" href="/details"><img src="images/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider-somi.jpg" alt="image01" />
                        <div class="ei-title">
                            <h3 class="btn">ÁO SƠ MI</h3>
                            <h2>Kiểu dáng thanh lịch<br>màu sắc trang nhã</h2>
                            <h3 class="active">Hãy là một cô nàng công sở thời trang<br>
                                Thanh lịch, dịu dàng trong mắt đồng nghiệp
                            </h3>
                            <h3>
                                <a class="ei_icons" href="/details"><img src="images/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider-aothun.jpg" alt="image02" />
                        <div class="ei-title">
                            <h3 class="btn">ÁO THUN</h3>
                            <h2>Chất liệu cotton<br>Thoải mái năng động</h2>
                            <h3 class="active">Thoải mái dạo phố, vui chơi<br>
                                màu sắc độc đáo, tươi mới
                            </h3>
                            <h3>
                                <a class="ei_icons" href="/details"><img src="images/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider-vaylien.jpg" alt="image03"/>
                        <div class="ei-title">
                            <h3 class="btn">VÁY LIỀN THÂN</h3>
                            <h2>Quyến rũ dự tiệc <br>Nữ tính dạo phố</h2>
                            <h3 class="active">Đem đến cho bạn mọi kiểu dáng<br>
                                Cho dù sang trọng hay dịu dàng
                            </h3>
                            <h3>
                                <a class="ei_icons" href="/details"><img src="images/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider-chanvay.jpg" alt="image04"/>
                        <div class="ei-title">
                            <h3 class="btn">CHÂN VÁY</h3>
                            <h2>Luôn Trẻ trung<br>luôn dịu dàng</h2>
                            <h3 class="active">Váy ôm thanh lịch kết hợp với sơmi<br>
                                Váy xòe đáng yêu với áo voan xinh xắn
                            </h3>
                            <h3>
                                <a class="ei_icons" href="/details"><img src="images/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider-giay.jpg" alt="image05"/>
                        <div class="ei-title">
                            <h3 class="btn">GIÀY DÉP</h3>
                            <h2>Thoái mái đôi chân<br>tự tin sải bước</h2>
                            <h3 class="active">Cô gái hiện đại với đôi giày xinh xắn<br>
                                Sải bước tự tin, lung linh xinh đẹp
                            </h3>
                            <h3>
                                <a class="ei_icons" href="/details"><img src="images/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider-phukien.jpg" alt="image07"/>
                        <div class="ei-title">
                            <h3 class="btn">PHỤ KIỆN</h3>
                            <h2>Tạo nên phong cách<br>Tạo nên điểm nhấn</h2>
                            <h3 class="active">Một bộ đồ thời trang không thể thiếu<br>
                                Những phụ kiện tạo nên điểm nhấn riêng cho bạn
                            </h3>
                            <h3>
                                <a class="ei_icons" href="/details"><img src="images/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="/details"><img src="images/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                </ul><!-- ei-slider-large -->
                <ul class="ei-slider-thumbs">
                    <li class="ei-slider-element">Current</li>
                    <li>
                        <a href="/products">
                            <span class="active">Good Shop</span>
                            <p>Shop nữ tốt nhất</p>
                        </a>
                        <img src="images/thumbs/1.jpg" alt="thumb01" />
                    </li>
                    <li class="hide"><a href="/products"><span>áo sơ mi</span><p>Cho cô nàng công sở</p> </a><img src="images/thumbs/2.jpg" alt="thumb01" /></li>
                    <li  class="hide1"><a href="/products"><span>Áo thun</span><p>Thoải mái năng động</p></a><img src="images/thumbs/3.jpg" alt="thumb02" /></li>
                    <li class="hide1"><a href="/products"><span>Váy liền thân</span><p>quyến rũ dự tiệc</p> </a><img src="images/thumbs/4.jpg" alt="thumb03" /></li>
                    <li><a href="/products"><span>Chân váy</span><p>Dịu dàng nữ tính</p> </a><img src="images/thumbs/1.jpg" alt="thumb04" /></li>
                    <li><a href="/products"><span>Giày dép</span><p>Tự tin sải bước</p> </a><img src="images/thumbs/5.jpg" alt="thumb05" /></li>
                    <li><a href="/products"><span>Phụ kiện</span><p>Cho bạn thêm lộng lẫy</p> </a><img src="images/thumbs/3.jpg" alt="thumb07" /></li>
                </ul><!-- ei-slider-thumbs -->
            </div><!-- ei-slider -->
        </div><!-- wrapper -->
    </div>
    <!---End-image-slider---->
</div>
<!-- start image1_of_3 -->
<div class="top_bg">
    <div class="wrap">
        <div class="main1">
            <div class="image1_of_3">
                <img src="images/img1.jpg" alt=""/>
                <a href="/products"><span class="tag">giảm giá</span></a>
            </div>
            <div class="image1_of_3">
                <img src="images/img2.jpg" alt=""/>
                <a href="/products"><span class="tag">Hàng mới</span></a>
            </div>
            <div class="image1_of_3">
                <img src="images/img3.jpg" alt=""/>
                <a href="/products"><span class="tag">được mua nhiều</span></a>
            </div>
            <div class="clear"></div>
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
           <!-- <div class="grids_of_3">
                <div class="grid1_of_3">
                    <a href="products/1">
                        <img src="images/pic1.jpg" alt="pic1"/>
                        <h3>Áo sơ mi tay ngắn phối bèo</h3>
                        <span class="price">155.000</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="products/2">
                        <img src="images/pic2.jpg" alt="pic2"/>
                        <h3>Chân váy ren xòe thời trang</h3>
                        <span class="price">148.000</span>
                        <span class="price1 bg">10%</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="products/3">
                        <img src="images/pic3.jpg" alt="pic3"/>
                        <h3>Đầm ren body thời trang</h3>
                        <span class="price">215.000</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="products/4">
                        <img src="images/pic4.jpg" alt="pic4"/>
                        <h3>Túi xách hộp sang trọng</h3>
                        <span class="price">260.000</span>
                    </a>
                </div>
                <div class="clear"></div>
            </div> -->
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

            <div class="top_main">
                <h2>Hàng Bán Chạy trong tháng</h2>
                <a href="/products">Xem tất cả</a>
                <div class="clear"></div>
            </div>
            <!-- start grids_of_3 -->
          <!--  <div class="grids_of_3">
                <div class="grid1_of_3">
                    <a href="products/5">
                        <img src="images/pic5.jpg" alt="pic5"/>
                        <h3>Dép xỏ ngón đỏ xì teen</h3>
                        <span class="price">125.000</span>
                        <span class="price1 bg">10%</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="products/6">
                        <img src="images/pic6.jpg" alt="pic6"/>
                        <h3>Áo thun nữ tay dài kẻ sọc thời trang</h3>
                        <span class="price">185.000</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="products/7">
                        <img src="images/pic7.jpg" alt="pic7"/>
                        <h3>Áo thun tay phối caro dễ thương</h3>
                        <span class="price">149.000</span>
                        <span class="price1 bg1">HOT</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="products/8">
                        <img src="images/pic8.jpg" alt="pic8"/>
                        <h3>Mắt kính nữ Vincy Korean</h3>
                        <span class="price">65.000</span>
                        <span class="price1 bg1">HOT</span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>-->
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
                            <h4><a href="/blog"> Xu hướng thời trang thu đông mới với áo tay siêu dài</a></h4>
                            <p>Áo tay siêu dài - là một trong số những xu hướng mới rất đáng thử nhất trong mùa thu đông năm nay.</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="grid_date">
                        <div class="date1">
                            <h4>Oct 05</h4>
                        </div>
                        <div class="date_text">
                            <h4><a href="/blog"> Cách mix đồ thu đông đẹp và sang</a></h4>
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