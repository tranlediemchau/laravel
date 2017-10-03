@extends('layout.masterAmin')
@section('content')
<script type="text/javascript" language="javascript">
    function show_alert()
    {
        if(confirm("Bạn có thật sự muốn xóa tài khoản này không?"))
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
                        <h3 class="box-title">Danh Sách Tài Khoản</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th >id</th>
                                <th>Tên Tài Khoản</th>
                                <th>Email</th>
                               <!-- <th>Password</th>-->
                                <th>Ngày Tạo</th>
                                <!-- <th>discription</th> -->
                                <th>Ngày Cập Nhật</th>
                                <th>Vai Trò</th>
                                <th>Sữa/Xóa</th>
                                <th>Thông tin tài khoản</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($accounts as $account)
                            <tr>
                                <a href="#">
                                    <td>{{ $account->id }}</td>
                                    <td>{{ $account->name }}</td>
                                    <td>{{ $account->email }}</td>
                                    <!--<td>{{ $account->password }}</td> -->
                                    <td>{{ $account->created_at }}</td>
                                    <td>{{ $account->updated_at }}</td>
                                    <td>{{ $account->role }}</td>
                                    <td>
                                        <a href='{{ $account->id }}/edit'>Edit</a>
                                        <a href='<?php echo $account['id'];?>/delete' onclick=" return show_alert();">Delete</a>
                                    </td>
                                    <td>
                                        <a href='<?php echo $account['id'];?>/info'>info</a>
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
     