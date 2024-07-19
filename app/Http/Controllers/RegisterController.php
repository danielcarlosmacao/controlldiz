<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\register;

class RegisterController extends Controller
{
public function index(){
    

        
        $cadastros = register::orderBy('name','asc')->with('tithe')->get();
         #$cadastros = cadastro::all()->where('status','ativo');
         
         #dd($cadastros);        
 
         return view('admin.cadastro.index', ['cadastros' => $cadastros]);
     }
 
     public function new(){
         return view('admin.cadastro.create');
     }
 
     public function create(Request $request){
         
         $cadastro = new register;
 
         $cadastro->name = $request->name;
         $cadastro->nasc = $request->datenasc;
         $cadastro->number = $request->number;
         $cadastro->telephone = $request->telephone;
         $cadastro->maritalstatus = $request->maritalstatus;
         $cadastro->sex = $request->sex;
         $cadastro->address = $request->address;
         $cadastro->city = $request->city;
         $cadastro->state = $request->state;
         $cadastro->status = "ativo";
 
         $cadastro->save();

      
         
         return view('admin.cadastro.create');

     }
     
     
     public function list(){
         return view('admin.cadastro.list');
     }
    
    
     public function edit($id){
        $cadastro = register::where('id',$id)->get();

        return view('admin.cadastro.edit',['cadastro' =>$cadastro]);

     }
}
