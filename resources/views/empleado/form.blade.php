
<h1>{{$modo}} Empleado</h1>


@if(count($errors)>0)
  
<div class="alert alert-danger" role="alert">
<ul>
  @foreach( $errors->all() as $error)
         <li>{{$error}}</li> 
  @endforeach
  </ul>
</div>
 

@endif

<label for="Nombre"> Nombre </label>
  <input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre"> <br>

  <label for="ApellidoPaterno"> Primer apellido</label>
  <input type="text" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno"> <br>

  <label for="ApellidoMaterno"> Segundo apellido</label>
  <input type="text" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno"><br>

  <label for="Correo"> Correo </label>
  <input type="text" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}"  id="Correo"><br>

 
@if(isset($empleado->Foto))
  <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="100">
@endif
  <input type="file" name="Foto"  id="Foto"><br>

  <input type="submit" value="{{$modo}} datos" class="btn btn-success">

  <a href="{{url('empleado/')}}" class="btn btn-primary"> Volver </a>