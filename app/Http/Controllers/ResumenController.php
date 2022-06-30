<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\suma;

class ResumenController extends Controller
{




   public function index(Request $request)
   {


      if ($request->has('empleado')) {

         $datoBD = suma::select('empleado_id', 'suma', 'fecha')->where('empleado_id', $request['empleado'])
         ->whereBetween('fecha', [$request['dia1'], $request['dia2']])->get();

         $sumBD = suma::where('empleado_id', $request['empleado'])->whereBetween('fecha', [$request['dia1'], $request['dia2']])->sum('suma');

         $porciento = ($sumBD * 0.5);
      } 
         if ($request->has('dia1') && $request->has('dia2')) {


         $ganancia = suma::whereBetween('fecha', [$request['dia1'], $request['dia2']])->sum('suma');

         
      }




      $datos = Empleado::all();
      return view('empleado.resumen', ['empleados' => $datos, 'empleadosBD' => $datoBD ?? null, 'esum' => $sumBD ?? null,'porciento' => $porciento ?? null,'ganancia' => $ganancia ?? null]);
   }

   


}
