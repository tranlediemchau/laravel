@extends('layout.masterAmin')
@section('content')

<!-- Content Wrapper. Contains page content -->
<script type="text/javascript" language="javascript">
    function show_alert()
    {
        if(confirm("Bạn có thật sự muốn sữa thông tin cá nhân này không?"))
            return true;

        else
            return false;
    }
</script>

<!-- Content Header (Page header) -->

<!-- Main content -->
<table>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->

                    <!--/>  <form role="form">-->
                    @include('errors.list')
                    {!! Form::model($personal,['method'=>'POST','action'=>['AdminProductController@infoUpdate',$personal->id],'files'=>true]) !!}
                    @include('admin.infoform')
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </table>

@endsection<!-- /.content -->
