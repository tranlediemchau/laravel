<h4><i class='glyphicon glyphicon-user'></i>Cập Nhật Thông Tin Cá Nhân</h4>


<div class='form-group'>
    {!! Form::hidden('id', Auth:: user()->id , ['placeholder' => 'Họ tên', 'class' => 'form-control']) !!}

</div>

<div class='form-group'>
    {!! Form::label('Họ tên', 'Họ tên') !!}
    {!! Form::text('fullname', null, ['placeholder' => 'Họ tên', 'class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('address', 'Địa chỉ') !!}
    {!! Form::text('address', null, ['placeholder' => 'Địa chỉ', 'class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('phone', 'Số điện thoại') !!}
    {!! Form::text('phonenumber', null, ['placeholder' => 'Số điện thoại', 'class' => 'form-control']) !!}
</div><div class='form-group'>
    {!! Form::label('jop', 'Nghề nghiệp') !!}
    {!! Form::text('jop', null, ['placeholder' => 'Nghề nghiệp', 'class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::submit('Cập nhật', ['class' => 'btn btn-primary ']) !!}
</div>
