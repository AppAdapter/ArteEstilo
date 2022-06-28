<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumenController extends Controller
{
    

   public function index (){

      return view('empleado.resumen');

   }


}
