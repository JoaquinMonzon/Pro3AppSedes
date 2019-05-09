<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
  function index(){
  return view ('ingresar');

  }
  public function store(Request $request){
	Usuario::create (array
  	('name'		=>$request->name,
  	'lastname'	=>$request->lastname,
  	'dni'	    =>$request->dni,
  	'fechanac'	=>$request->fechanac,
  	'tel'		=>$request->tel
	));
	return ('llego');
	}
}
