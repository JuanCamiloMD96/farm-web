<?php

namespace App\Http\Controllers;

use App\Models\Parcelas;
use Illuminate\Http\Request;

class ParcelasController extends Controller
{

         public function index(){

            $parcelas = Parcelas::paginate();
            return view("Parcelas.index",compact('parcelas'));
         }

        public function create(){
            return view("Parcelas.create");
       }

       public function store(Request $request){

            $request->validate([
                'name'=>'required',
                'tamaño_de_parcela'=>'required',
                'tipo_de_terreno'=>'required',
                'precipitacion_de_la_parcela'=>'required',
                'hp_de_la_parcela'=>'required'
                ]);


            $parcelas = new Parcelas();

            $parcelas->name = $request->name;
            $parcelas->tamaño_de_parcela = $request->tamaño_de_parcela;
            $parcelas->tipo_de_terreno = $request->tipo_de_terreno;
            $parcelas->precipitacion_de_la_parcela = $request->precipitacion_de_la_parcela;
            $parcelas->hp_de_la_parcela = $request->hp_de_la_parcela;

            $parcelas->save();
            return redirect()->route('parcela.show', $parcelas);
       }

       public function show(Parcelas $parcelas){


            return view("Parcelas.show",compact('parcelas'));
       }


        public function edit(Parcelas $parcelas){

            return view('Parcelas.edit',compact('parcelas'));
            }

        public function update(Request $request, Parcelas $parcelas){

            $request->validate([
                'name'=>'required',
                'tamaño_de_parcela'=>'required',
                'tipo_de_terreno'=>'required',
                'precipitacion_de_la_parcela'=>'required',
                'hp_de_la_parcela'=>'required'
                ]);

            $parcelas->name = $request->name;
            $parcelas->tamaño_de_parcela = $request->tamaño_de_parcela;
            $parcelas->tipo_de_terreno = $request->tipo_de_terreno;
            $parcelas->precipitacion_de_la_parcela = $request->precipitacion_de_la_parcela;
            $parcelas->hp_de_la_parcela = $request->hp_de_la_parcela;

            $parcelas->save();
            return redirect()->route('parcela.show', $parcelas);

        }

        public function delete(Parcelas $parcelas){
                $parcelas->delete();
                 return redirect()->route('parcela.index');

                }



}
