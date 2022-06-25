


@extends('layouts.app')

@section('content')
<div class="container">


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
               
             <form action="{{url('/operacion')}}" method="POST" class="d-inline">
             @csrf
              <input type="number" name="suma" id="suma" >
              <input type="hidden" name="fecha" vale="{{date('date(y-m-d)')}}">
              <input type="submit" value="Asignar" onclick="return confirm('¿Selecciono bien?')" class="btn btn-success">
              
             </form>
  

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection

