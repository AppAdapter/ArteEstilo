@extends('layouts.app')


@section('content')


<div class="container">


    <div class="row">



        <div class="col">

            <form action="{{route('resumen')}}" method="">

                <label for="semana1">Semana</label> <br>
                <input type="date" name="dia1" id="dia1" >
                <input type="date" name="dia2" id="dia2"><br>
                <div class="form-floating  mt-2">
                    <select class="form-select" name="empleado" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>...</option>
                        @foreach( $empleados as $empleado)
                        <option value="{{$empleado->id}}">{{$empleado->Nombre}}:{{$empleado->id}}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Seleccione empleado</label>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <input class="btn btn-outline-primary" type="submit" value="Consultar">
                </div>

            </form>




        </div>



        <div class="col-8">

            <table class="table table-light">
                <thead class="thead-light">
                    <tr>

                        <th>Empleado</th>



                    </tr>
                </thead>
                <tbody>
                    @if(isset($empleadosBD))
                    @foreach($empleadosBD as $eBD)

                    <tr>
                        <td>
                            {{optional($eBD)->empleado_id}}
                        </td>
                        <td>
                            {{number_format(optional($eBD)->suma)}}
                        </td>
                        <td>
                            {{optional($eBD)->fecha}}
                        </td>


                    </tr>
                    @endforeach
                    @endif
                    <tr>
                        <td>
                            <strong>Total:</strong>
                        </td>

                        <td>
                            
                            @if(isset($esum))

                            <strong>${{number_format($esum)}}</strong>
                            @endif
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>



        <div class="row">

            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Salario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @if(isset($porciento))
                            <strong>${{number_format($porciento)}}</strong>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <a href="{{url('empleado/')}}" class="btn btn-primary"> Volver </a>


        <div class="row mt-5">
            <div class="col align-self-start">
                
            </div>
            <div class="col align-self-center">
              
                    <p><strong>Valor acumulado:</strong></p>
              
            </div>
            <div class="col-5 align-self-end"> 
                @if(isset($ganancia))
               <h1>$ {{number_format($ganancia)}}</h1>
                @endif
            </div>

        </div>

        <div class="row ">
            <div class="col align-self-start">
                
            </div>
            <div class="col align-self-center">
              
                    <p><strong>Ganacia Arte&Estilo:</strong></p>
              
            </div>
            <div class="col-5 align-self-end"> 
                @if(isset($ganancia))
               <h1><strong>$ {{number_format($ganancia * 0.5)}}</strong></h1>
                @endif
            </div>

        </div>



        @endsection