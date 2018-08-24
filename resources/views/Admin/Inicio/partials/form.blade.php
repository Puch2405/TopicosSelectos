<div class="form-group">
    {{Form::label('desc','Descripcion')}}
    {{Form::textarea('desc',null, ['class'=>'form-control','id'=>'desc','rows'=>'5'])}}
</div>
<div class="form-group">
    <a class="btn btn-danger" href="{{ URL::to('Admin/Inicio') }}">Cancelar</a>
    {{Form::button('Aceptar', ['class'=>'btn btn-success','type'=>'submit'])}}
</div>