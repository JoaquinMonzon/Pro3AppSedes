<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
  function index(){
  	return view ('ingresar');

  }
  public function store(Request $request){

  	Persona::create (array
  	('name'		  =>$request->name,
  	'lastname'	=>$request->lastname,
  	'dni'	      =>$request->dni
	));
  	return ('llego');
  }
  public function listado(request $request){
    $listado = Persona::all();
      $aux='llego';
      return view ('personas.listado',compact('listado','aux'));
  }
  public function busqueda(request $request){
    $aux = Persona::where('dni','=',$dni)->first();
    return view ('persona.busqueda',compact('aux'));
  }*/
}
