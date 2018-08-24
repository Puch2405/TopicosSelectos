<div class="form-group">
    {{Form::label('descripcion','Descripcion')}}
    {{Form::textarea('descripcion',null, ['class'=>'form-control','id'=>'descripcion','rows'=>'5'])}}
</div>
<div class="form-group">
    {{Form::label('ar','Archivo')}}
    {{Form::file('ar',['id'=>'ar'])}}
</div>
<div class="form-group">
    <a class="btn btn-danger" href="{{ URL::to('Admin/QuienesSomos') }}">Cancelar</a>
    {{Form::button('Aceptar', ['class'=>'btn btn-success','type'=>'submit'])}}
</div>