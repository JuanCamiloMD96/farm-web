<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{

    public function index(){
        $proyectos = Proyectos::paginate();
        return view("proyectos.index",compact('proyectos'));

   }

    public function create(){
        return view("proyectos.create");
   }

   public function store(Request $request){

        $request->validate([
        'name'=>'required',
        'distancia_de_siembra'=>'required',
        'requerimientos_climaticos'=>'required',
        'edaficos_del_proyecto'=>'required',
        'precipitacion_necesaria'=>'required'
        ]);


        $proyectos = new Proyectos();

        $proyectos->name = $request->name;
        $proyectos->distancia_de_siembra = $request->distancia_de_siembra;
        $proyectos->requerimientos_climaticos = $request->requerimientos_climaticos;
        $proyectos->edaficos_del_proyecto = $request->edaficos_del_proyecto;
        $proyectos->precipitacion_necesaria = $request->precipitacion_necesaria;

        $proyectos->save();
        return redirect()->route('proyecto.show', $proyectos);
   }

   public function show(Proyectos $proyectos){

    return view("proyectos.show",compact('proyectos'));
    }

    public function Edit(Proyectos $proyectos){
        return view('proyectos.edit',compact('proyectos'));
        }

    public function update(Request $request, Proyectos $proyectos){

            $request->validate([
            'name'=>'required',
            'distancia_de_siembra'=>'required',
            'requerimientos_climaticos'=>'required',
            'edaficos_del_proyecto'=>'required',
            'precipitacion_necesaria'=>'required'
            ]);




            $proyectos->name = $request->name;
            $proyectos->distancia_de_siembra = $request->distancia_de_siembra;
            $proyectos->requerimientos_climaticos = $request->requerimientos_climaticos;
            $proyectos->edaficos_del_proyecto = $request->edaficos_del_proyecto;
            $proyectos->precipitacion_necesaria = $request->precipitacion_necesaria;

            $proyectos->save();
            return redirect()->route('proyecto.show', $proyectos);
    }

    public function delete(Proyectos $proyectos){
            $proyectos->delete();
            return redirect()->route('proyecto.index');
            }
}
