<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\suma;

class ResumenController extends Controller
{
    
  


   public function index (Request $request){
     
     
if($request->has('empleado')){




      //$info =  request()->except('_token');
       
      $datoBD = suma::select('empleado_id','suma','fecha')->where('empleado_id', $request['empleado'])
      ->whereBetween('fecha', [ $request['dia1'], $request['dia2']])->get();
   
      $sumBD = suma::where('empleado_id', $request['empleado'])->whereBetween('fecha', [ $request['dia1'], $request['dia2']])->sum('suma');
     

      }

       $datos= Empleado::all();
      return view('empleado.resumen',['empleados'=> $datos,'empleadosBD'=>$datoBD ?? null,'esum'=> $sumBD ?? null] );
           
   }

   


}
