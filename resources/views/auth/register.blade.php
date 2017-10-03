@extends('layout.login')
@section('content')

<div class="register-box-body">
    <p class="login-box-msg">Đăng ký là thành viên</p>
    @if( Session::has('flash_message'))
        <div class="alert alert-success {{Session::has('flash_message_importance')?'alert-important':''}}">
            @If( Session::has('flash_message_important'))
            <button type="button" class="close" data-dismiss="left" aria-hidden ="true">&times;</button>
            @endif
            {{Session::get('flash_message')}}
        </div>
    @endif
    @if(count($errors)> 0)
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="/auth/register">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="name" class="form-control" name="name"placeholder="Full name" value="">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="email" class="form-control"  name="email" placeholder="Email" value="">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="hidden" class="form-control" name="role"placeholder="Full name" value="3">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control"name="password" placeholder="Password" value="">
           <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password_confirm" placeholder="Retype password" value="">
            <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="ckeck" checked> Tui đồng ý với các  <a href="#">điều khoản </a>trên
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
            </div><!-- /.col -->
        </div>
    </form>


    <a href="#" class="text-center">Tui đã là một thành viên</a>
</div><!-- /.form-box -->
</div><!-- /.register-box -->



<!-- jQuery 2.1.4 -->
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
@endsection