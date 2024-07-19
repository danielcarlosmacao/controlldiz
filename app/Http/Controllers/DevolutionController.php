<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\devolution;

use App\Models\tithe;

class DevolutionController extends Controller
{
    public function index(){
        return view('admin.devolucao.index');
    }


    public function launch(){

        $dizimista = tithe::where('status','ativo')->where('year',date('y'))->with('registers','devolutions','devolutions2','devolutions3','devolutions4','devolutions5','devolutions6','devolutions7','devolutions8','devolutions9','devolutions10','devolutions11','devolutions12')->get();
        #dd($dizimista);
 
         return view('admin.devolucao.launch',['dizimista'=>$dizimista]);
     }

     public function create($id){

        
        #devolution::findOrFail($id)->delete();
        $devolution = devolution::where('tithe_id',$id)->get();

       
       

       #dd($devolution);

    for($i = 1; $i <= 12; $i++){
        $devolucao = new devolution;
        $devolucao->tithe_id = $id;
        $devolucao->month = $i;
        $devolucao->value = "0";
        $devolucao->save();
    }
    return Redirect('/admin/lancamento');
     }

     public function update(Request $request){

        $devolution = devolution::where('tithe_id',$request->id)->orderBy('month','asc')->get();

     
        foreach($devolution as $dev){
            
            if($dev->month == 1){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'1'}]);
            }if($dev->month == 2){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'2'}]);
            }
            if($dev->month == 3){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'3'}]);
            }if($dev->month == 4){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'4'}]);
            }
            if($dev->month == 5){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'5'}]);
            }if($dev->month == 6){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'6'}]);
            }
            if($dev->month == 7){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'7'}]);
            }if($dev->month == 8){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'8'}]);
            }
            if($dev->month == 9){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'9'}]);
            }if($dev->month == 10){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'10'}]);
            }
            if($dev->month == 11){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'11'}]);
            }if($dev->month == 12){
            devolution::where('tithe_id',$request->id)->where('month', $dev->month)->update(['value'=> $request->{'12'}]);
            }

        }return Redirect('/admin/lancamento');
        
        
    }
    
     


     public function destroy($id){
        devolution::findOrFail($id)->delete();

     }

}
