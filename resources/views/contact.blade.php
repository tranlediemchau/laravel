@extends('layout.about')
@section('content')
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">Liên hệ với chúng tôi</h2>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
			    	 	<h3>Bản đồ</h3>
			    	 		<div class="map">
					   			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6336176524137!2d106.68015121421456!3d10.76269426239147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c06f4e1dd%3A0x43900f1d4539a3d!2zxJDhuqFpIGjhu41jIEtob2EgaOG7jWMgVOG7sSBuaGnDqm4!5e0!3m2!1svi!2s!4v1445764127959" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="https://www.google.com/maps/place/%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Khoa+h%E1%BB%8Dc+T%E1%BB%B1+nhi%C3%AAn/@10.7626943,106.6801512,17z/data=!3m1!4b1!4m2!3m1!1s0x31752f1c06f4e1dd:0x43900f1d4539a3d" style="color:#242424;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">Xem kích thước lớn hơn</a></small>
							</div>
				     	<h3>Thông tin shop:</h3>
						    	<p>227 Nguyễn Văn Cừ, Phường 4, Quận 5, TP. Hồ Chí Minh</p>
				   		<p>Điện thoại: 01666449897</p>
				 	 	<p>Email: <a href="#">hanguyen7394@gmail.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/hanguyen7733">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3>Liên hệ với chúng tôi</h3>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>TÊN BẠN</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>ĐIỆN THOẠI</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>ĐỊA CHỈ</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Xác Nhận"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
</div>
</div>
</div>
@endsection