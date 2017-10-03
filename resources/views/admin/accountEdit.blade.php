@extends('layout.masterAmin')
@section('content')

<!-- Content Wrapper. Contains page content -->
<script type="text/javascript" language="javascript">
    function show_alert()
    {
        if(confirm("Bạn có thật sự muốn sữa tài khoản này không?"))
            return true;

        else
            return false;
    }
</script>

<!-- Content Header (Page header) -->
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

                    <!-- form start -->

                    <!--/>  <form role="form">-->
                    @include('errors.list')
                    {!! Form::model($user,['method'=>'POST','action'=>['AdminProductController@accountUpdate', $user->id],'files'=>true]) !!}
                    @include('admin.accountform')
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </table>

@endsection<!-- /.content -->
