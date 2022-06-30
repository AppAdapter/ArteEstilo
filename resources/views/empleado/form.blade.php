


@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
  <ul>
    @foreach( $errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>


@endif
<div class="container ">

<div class="row justify-content-center">

  <div class="card mb-3" style="max-width: 540px;">
 
    <div class="row g-0">
      <div class="col-md-4">
     
        @if(isset($empleado->Foto))
        <img src="{{asset('storage').'/'.$empleado->Foto}}" class="img-fluid rounded-start" alt="...">
        @endif
        
      </div>
      <div class="col-md-8">
        <div class="card-body">

        <h1>{{$modo}} Empleado</h1>
          
        <input type="file" name="Foto" class="form-control" id="Foto"><br>

          <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" class="form-control" id="formGroupExampleInput">
          </div>
          <div class="mb-3">
            <label for="ApellidoPaterno" class="form-label">Primer apellido</label>
            <input type="text" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" class="form-control" id="formGroupExampleInput2">
          </div>
          <div class="mb-3">
            <label for="ApellidoMaterno" class="form-label">Segundo apellido</label>
            <input type="text" class="form-control" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
          </div>
          <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="text" class="form-control" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
          </div>


          <input type="submit" value="{{$modo}} datos" class="btn btn-success">

          <a href="{{url('empleado/')}}" class="btn btn-primary"> Volver </a>

        </div>
      </div>
    </div>
    
  </div>







 
  

  </div>
</div>