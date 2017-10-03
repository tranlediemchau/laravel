<h3><i class='glyphicon glyphicon-user'></i>Đổi Mật Khẩu</h3>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<div class='form-group'>
    {!! Form::hidden('id', Auth:: user()->id , ['placeholder' => 'Họ tên', 'class' => 'form-control']) !!}

</div>
<div class='form-group'>
    {!! Form::label('oldpassword', 'Old Password') !!}
    {!! Form:: password('passwordold', ['placeholder' => 'Old Password', 'class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('password', 'New Password') !!}
    {!! Form::password('passwordnew', ['placeholder' => 'New Password', 'class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('password_confirmation', 'Confirm Password') !!}
    {!! Form::password('passconfirm', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary ']) !!}
    {!! Form::button('Hủy',['class' => 'btn btn-primary ','onclick'=>'goBack()']) !!}

</div>

