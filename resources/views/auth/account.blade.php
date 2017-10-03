@extends('layout.masterAmin')
@section('content')

<section class="content-header">
    <h1>
        Thông tin tài khoản
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

                    @include('errors.list')
                    {!! Form::open(['action'=>'AdminProductController@store','files'=>true]) !!}
                    @include('auth.account')
                    {!! Form::close() !!}

                </div><!-- /.box -->
            </div><!-- /.box-body -->
        </div><!-- /.ssbox -->
        </div><!--/.col (right) -->
    </section>
</table>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<!-- page script -->
@endsection<!-- /.content -->
     