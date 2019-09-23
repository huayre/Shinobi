<!-- Roles -->
<div class="form-group">
{{Form::label('name','Nombre del Usuario')}}
{{Form::text('name',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('slug','URL amigable')}}
{{Form::text('slug',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('description','Descripción')}}
{{Form::textarea('description',null,['class'=>'form-control'])}}
</div>

<hr>
<h3>Permiso especial</h3>
<div class="form-group">
   <label >{{Form::radio('special','all-access')}} Acceso Total</label>
   <label >{{Form::radio('special','no-access')}} Ningun Acceso</label>
</div>

<hr>
<!-- Permisos -->
<h3>Lista de Permisos</h3>

<div class="form-group">
  <ul class="list-unstyled">
     @foreach($permissions as $permission)
     <li>
        <label>
            {{Form::checkbox('permissions[]',$permission->id,null)}}
            {{$permission->name}}
            <em>({{$permission->description ?:'sin descripcion'}})</em>
        </label>
    
    </li>
     @endforeach
    
  </ul>
</div>

<div class="form-group">
{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}

</div>

