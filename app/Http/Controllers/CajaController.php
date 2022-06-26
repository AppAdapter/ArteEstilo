<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\suma;

class CajaController extends Controller
{
   
    
   




    public function index (){

        $datos['empleados']= Empleado::paginate(5);
        return view("caja.viewcaja",$datos);
    }






    public function operacion (Request $request){

        

        $datoEmpleado = request()->except('_token');


        $sumaB = suma::select('suma')->where('empleado_id', $datoEmpleado['empleado_id'])->where('fecha', $datoEmpleado['fecha'])->first();

        if (empty($sumaB)) {

            suma::insert($datoEmpleado);
            return redirect('caja')->with('mensaje','Los cambios fueron guardados');
        } else {

            $datoEmpleado['suma']=$datoEmpleado['suma'] + $sumaB['suma'];
            suma::where('empleado_id', $datoEmpleado['empleado_id'])->where('fecha', $datoEmpleado['fecha'])->update($datoEmpleado);
            return redirect('caja')->with('mensaje','Los cambios fueron guardados');
        }

          /* $id = $datoEmpleado['empleado_id'];

           $empleado=suma::where('id','$id')->get();

           return  $id;*/
           
         /* foreach($empleado as $empleo){

            return  $empleo;
        
        
        }*/
        
               

            
        
            
       
          // suma::insert($datoEmpleado);
         
         
    }

    public function sumar (){
        
    }

    
}
