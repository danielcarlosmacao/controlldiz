<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tithe;
use App\Models\register;

class TitheController extends Controller
{
    public function create($id){

        $dizimistasAtivo = tithe::all()->where('registers_id',$id)->where('status','ativo')->where('year',date('Y'));
        $qntdizimistasAtivo = count($dizimistasAtivo);

        if($qntdizimistasAtivo == 0){
        $dizimista = new tithe;

        $dizimista->registers_id = $id ;
        $dizimista->year = date('Y') ;
        $dizimista->status = "ativo" ;

        $dizimista->save();

        for($i = 1; $i <= 12; $i++){
        $ff = [
            'tithe_id'=> $id,
            'month' => $i,
            'value' => '0'
        ];
          $dizimista->devolution()->create($ff);
    };
        return Redirect('/admin/cadastro/list');
                }
            else{
                return Redirect('/admin/cadastro/list');
            }
    }

    public function list(){

        #$dizimistas = dizimista::orderBydesc('id')->get();

        #$dizimistas = cadastro::limit(5)->with('dizimista')->where('status','ativo')->get();
        #$cadastros = cadastro::all()->where('status','ativo');
        #dd($dizimistas);
        $dizimistas = tithe::where('year',date('y'))->with('registers')->get();
        #$dizimistas ="";

        return view('admin.dizimista.list', ['dizimistas' => $dizimistas]);
    }

    public function createall(){

        $cadastroAtivo = register::where('status','ativo')->get();
       
        foreach($cadastroAtivo as $item){
        
            $this->create($item->id);
    
    }
    return Redirect('/admin/cadastro/list');

    }


}
