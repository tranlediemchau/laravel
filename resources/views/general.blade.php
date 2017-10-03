@extends('layout.index')
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
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
               
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tên sản phẩm</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Giá bán</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Giá bán">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Giá khuyến mãi</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Giá khuyến mãi ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Hình ảnh</label>
                      <input type="file" id="exampleInputFile">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputFile">Thum1</label>
                      <input type="file" id="exampleInputFile">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputFile">Thum2</label>
                      <input type="file" id="exampleInputFile">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputFile">Thum3</label>
                      <input type="file" id="exampleInputFile">
                    </div>
                   
					 <div class="form-group">
                      <label for="exampleInputEmail1">Mô tả</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Mô tả">
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
                </form>
				</div><!-- /.box -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
        </section>
@endsection<!-- /.content -->
     