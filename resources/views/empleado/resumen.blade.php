@extends('layouts.app')


@section('content')

  <div class="container">
    

  <div class="row">



  <div class="col-8">

   

     <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
            </tr>
        </tbody>
     </table>

  </div>



  <div class="col">
       <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>formulario</td>
            </tr>
        </tbody>
       </table>


  </div>
  </div>



  <div class="row">

  <table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
        </tr>
    </tbody>
  </table>
  </div>
     

  <a href="{{url('empleado/')}}" class="btn btn-primary"> Volver </a>
  </div>

  
@endsection