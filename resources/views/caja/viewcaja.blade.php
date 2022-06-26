


@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje')){

    <div class="alert alert-success alert-dismissible" role="alert">
        
        {{Session::get('mensaje')}}
    

     <button type="button" class="close" data-dismiss="alert" aria-label="Close">

       <span aria-hidden="true" >&times;</span>
     </button>
    </div>
    
}@endif


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            
            <th>Foto</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>$</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
        
            <td>
             <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>

            <td> 
               
             <form action="{{route('operacion')}}" method="POST" class="d-inline">
             @csrf
             <input type="hidden" name="empleado_id" value="{{$empleado->id}}">
              <input type="number" name="suma" id="suma" >
              <input type="hidden" name="fecha" value="{{date('y-m-d')}}">
              <input type="submit" value="Asignar" onclick="return confirm('Porfavor verifique que el valor es el indicado, y asegurese de que el empleado es el indicado, si es correcto dar click en Aceptar')" class="btn btn-success">
              
             </form>
  

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection

