
<div class="box-body">
<div clas="form-group">
    {!! Form::Label('name','Tên tài khoản:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}

    {!! Form::Label('email','Email:') !!}
    {!! Form::text('email',null,['class'=>'form-control']) !!}

    {!! Form::Label('password','Password') !!}
    <br>
    {!! Form::password('password',null,['class'=>'form-control']) !!}
   <br>
    {!! Form::Label('password','ConfirmPassword') !!}
    <br>
    {!! Form::password('password_confirm',null,['class'=>'form-control']) !!}
   <br>
    {!! Form::Label('role','Vai trò') !!}

    <br><select name="role" >
        @foreach ($roles as $role)
        <option  value="{{ $role->id}}">{{ $role->name}}</option>
        @endforeach
    </select>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <br><br>

    {!! Form::submit('AddItem',['class'=>'btn btn-primary']) !!}
</div>
</div>