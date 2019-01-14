<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class PerfilController extends Controller
{
    /* Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       return view('profile');
   }

   public function update(Request $request){

    $usuario = User::find(Auth::user()->id);

    $usuario->email = $request->email;
    $usuario->telefono = $request->telefono;
    $usuario->bio = $request->bio;

    $usuario->save();
     return view('profile');


    
    }
}
