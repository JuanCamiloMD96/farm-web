<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

     public function index(){
        $usuarios = User::paginate();
        return view("usuarios.index",compact('usuarios'));

   }



   public function show(User $usuarios){

    return view("usuarios.show",compact('usuarios'));
    }

    public function Edit(User $usuarios){
        return view('usuarios.edit',compact('usuarios'));
        }

    public function update(Request $request, user $usuarios){

            $request->validate([
            'name'=>'required',
            'tcargo'=>'required'
            ]);




            $usuarios->name = $request->name;
            $usuarios->tcargo = $request->tcargo;


            $usuarios->save();
            return redirect()->route('usuario.show', $usuarios);
    }

    public function delete(user $usuarios){
            $usuarios->delete();
            return redirect()->route('usuario.index');
            }
}
