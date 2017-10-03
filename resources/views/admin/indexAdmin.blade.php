@extends('layout.masterAmin')
@section('content')

<script type="text/javascript" language="javascript">
    function show_alert()
    {
        if(confirm("Bạn có thật sự muốn xóa sản phẩm này không?"))
            return true;

        else
            return false;

    }
</script>
@if( Session::has('flash_message'))
    <div class="alert alert-success {{Session::has('flash_message_importance')?'alert-important':''}}">
        @If( Session::has('flash_message_important'))
        <button type="button" class="close" data-dismiss="left" aria-hidden ="true">&times;</button>
        @endif
        {{Session::get('flash_message')}}
    </div>
@endif

<form action ="" method="post">


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
                                <th >id</th>
                                <th>name</th>
                                <th>price1</th>
                                <th>price2</th>
                                <th>images_url</th>
                                <!-- <th>discription</th> -->
                                <th>thumb1</th>
                                <th>thumb2</th>
                                <th>thumb3</th>
                                <th>Sữa/Xóa</th>



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
                                    <!-- <td>{{ $product->discription }}</td> -->
                                    <td>{{ $product->thumb1 }}</td>
                                    <td>{{ $product->thumb2 }}</td>
                                    <td>{{ $product->thumb3 }}</td>

                                    <td>
                                        <a href='admin/{{ $product->id }}/edit'>Edit</a>
                                        <a href='admin/<?php echo $product['id'];?>/delete' onclick=" return show_alert();">Delete</a>
                                    </td>
                                </a>
                            </tr>

                            @endforeach
                            </tbody>

                        </table>

                    </div><!-- /.box-body -->
                   <!-- <div  class="input-group input-group-lg">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Chức năng <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu" >
                            <li><a href="{{ action('AdminProductController@create') }}">Thêm</li>
                            <li><a href="{{ action('AdminProductController@create') }}">Xóa tất cả</li>

                        </ul>
                    </div><!-- /input-group -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </section><!-- /.content -->

</form>
<br><br><br>


<!-- /.content -->
<!-- jQuery 2.1.4  cua ben trang data co them phan search-->
<script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- page script -->

@endsection
     