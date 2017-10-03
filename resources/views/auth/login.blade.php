@extends('layout.login')
@section('content')
      <div class="login-box-body">
          @if(count($errors)> 0)
          <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
          @endif
		 <p class="login-box-msg" >Đăng nhập</p>

          <form method="POST" action="/auth/login">
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email"placeholder="Email" value="tranlediemchau@gmail.com">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" value="123456">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="ckeck"> Nhớ đăng nhập
                </label>
              </div>
            </div><!-- /.col -->
			
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" >Đăng nhập</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng nhập sử dụng Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng nhập using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">Tui quên mật khẩu của tui</a><br>
        <a href="/auth/register" class="text-center">Đăng ký là một thành vi</a>
      </div><!-- /.login-box-body -->

@endsection