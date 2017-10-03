@extends('layout.masterAmin')
@section('content')


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Thông tin sản phẩm
            <small>new</small>
          </h1>
        </section>

        <!-- Main content -->
		<table>
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
               
                <!-- form start -->
				
               <!-- form start  <form role="form">-->
                  <form action ="{{ action('AdminProductController@store')}}" method="post">
				  <div class="box-body">
                    <div class="form-group">
                      <label >Tên sản phẩm</label>
                      <input type="textbox"  name="txtTen"class="form-control" id="exampleInputEmail1"  placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="">Giá bán</label>
                      <input type="textbox" name="txtGiaban" class="form-control" id="exampleInputPassword1" placeholder="Giá bán">
                    </div>
					<div class="form-group">
                      <label for="">Giá khuyến mãi</label>
                      <input type="textbox" name="txtGiaKhuyenMai" class="form-control" id="exampleInputPassword1" placeholder="Giá khuyến mãi ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Hình ảnh</label>
                      <input type="file" name="fileHinhAnh"id="exampleInputFile">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputFile">Thumb1</label>
                      <input type="file" name="fileThumb1" id="exampleInputFile" > 
                    </div>
					 <div class="form-group">
                      <label for="exampleInputFile">Thumb2</label>
                      <input type="file" name="fileThumb2"id="exampleInputFile">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputFile">Thumb3</label>
                      <input type="file" name="fileThumb3"id="exampleInputFile">
                    </div>
					
					 <div class="form-group">
                      <label>Mô tả</label>
                      <input type="textbox" name="txtMoTa" class="form-control" id="exampleInputEmail1" placeholder="Mô tả">
                    </div>
                  </div><!-- /.box-body -->
				   <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
					<div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
				</div><!-- /.box -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
        </section>
		</table>
@endsection<!-- /.content -->
     