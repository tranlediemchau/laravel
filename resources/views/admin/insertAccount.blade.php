@extends('layout.masterAmin')
@section('content')

<section class="content-header">
    <h1>
        Thông tin tài khoản
        <small>new</small>
    </h1>
    @if( Session::has('flash_message'))
        <div class="alert alert-success {{Session::has('flash_message_importance')?'alert-important':''}}">
            @If( Session::has('flash_message_important'))
            <button type="button" class="close" data-dismiss="left" aria-hidden ="true">&times;</button>
            @endif
            {{Session::get('flash_message')}}
        </div>
    @endif
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
                    {!! Form::open(['action'=>'AdminProductController@accountStore','files'=>true]) !!}
                    @include('admin.accountform')
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
     