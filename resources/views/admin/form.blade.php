<div class="box-body">
<div clas="form-group">
{!! Form::Label('name','Tên sản phẩm:') !!}
{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div clas="form-group">
    {!! Form::Label('price1','Giá bán:') !!}
    {!! Form::text('price1',null,['class'=>'form-control']) !!}
</div>

<div clas="form-group">
    {!! Form::Label('price2','Giá khuyến mãi:') !!}
    {!! Form::text('price2',null,['class'=>'form-control']) !!}
</div>
    {!! Form::Label('type','Loại hàng hóa:') !!}<br>
<select name="type" >
    @foreach ($types as $type)
    <option  value="{{ $type->id}}">{{ $type->name}}</option>
    @endforeach
</select><br>

    {!! Form::Label('type','Nhà sản xuất:') !!}<br>
    <select name="producer" >

        @foreach ($producers as $producer)
        <option  value="{{ $producer->id}}">{{ $producer->name}}</option>
        @endforeach
    </select>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div clas="form-group">
    {!! Form::Label('fileHinhAnh','Hình ảnh:') !!}
    {!! Form::file('fileHinhAnh',null,['class'=>'form-control']) !!}
</div>
<div clas="form-group">
    {!! Form::Label('fileThumb1','Thumb1:') !!}
    {!! Form::file('fileThumb1',null,['class'=>'form-control']) !!}
</div>
<div clas="form-group">
    {!! Form::Label('fileThumb2','Thumb2:') !!}
    {!! Form::file('fileThumb2',null,['class'=>'form-control']) !!}
</div>
<div clas="form-group">
    {!! Form::Label('fileThumb3','Thumb3:') !!}
    {!! Form::file('fileThumb3',null,['class'=>'form-control']) !!}
</div>
<div clas="form-group">
    {!! Form::Label('discription','Mô tả:') !!}
    {!! Form::textarea('discription',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Add Item',['class'=>'btn btn-primary form-control']) !!}
</div></div>