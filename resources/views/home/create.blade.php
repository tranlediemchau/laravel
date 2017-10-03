@extends('layout.masterAmin')
@section('content')


<script type="text/javascript" language="javascript">
		function ktraCheckbox()
		{
			
			
			var check= document.getElementsByName("actionXoa");
			for(var i=0;i<check.length;i++)
			{
				if(check[i].checked )
				{	
					<?php echo"chau"; ?>
				}
					
			}
		}
</script>
     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Danh Sách Sản Phẩm</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>price1</th>
                        <th>price2</th>
                        <th>images_url</th>
						<th>discription</th>
                        <th>thumb1</th>
                        <th>thumb2</th>
                        <th>thumb3</th>
						<th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach ($products as $product)
						<tr>
						<a href="{{ action('AdminProductController@show', ['id' => $product->id]) }}">
							<td>{{ $product->id }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->price1 }}</td>
							<td>{{ $product->price2 }}</td>
							<td>{{ $product->images_url }}</td>
							<td>{{ $product->discription }}</td>
							<td>{{ $product->thumb1 }}</td>
							<td>{{ $product->thumb2 }}</td>
							<td>{{ $product->thumb3 }}</td>
							<td><form id="form1" ><input type="checkbox" name="actionXoa" value="{{ $product->delete }}"></form></td>
							
						</a>
						</tr>
					@endforeach
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
				 <div  class="input-group input-group-lg">
						  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="fa fa-caret-down"></span></button>
						  <ul class="dropdown-menu">
							<li><a href="{{ action('AdminProductController@create') }}"/>Thêm</li>
							<li><form id="form2" action="delete"onClick="ktraCheckbox()">Xóa</form></li>
							<li><a href="#">Sữa</a></li>
						  </ul>
				</div><!-- /input-group -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@endsection<!-- /.content -->
     