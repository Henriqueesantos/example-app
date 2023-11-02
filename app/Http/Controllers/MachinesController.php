<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Machine;
use Illuminate\Support\Facades\DB;

class MachinesController

{
    public function index(){

        //$machines = DB::select('SELECT id, name FROM machines');
           // dd($machines);

        $machines = Machine::all();
       // dd($machines);
return view ('machines.index') ->with ('machines', $machines);
    }
    public function show(){

        echo"<h1>Visualizar a maquina</h1>";

    }
    public function create(){
        return view('machines.create');
    }

    public function store(Request $request){

       // $machines = new Machine();
       //$machines->name =$request -> name;
       // $machines->save();
       // return redirect('/listar-maquinas');
          //  dd($request->all());
            //Machine::create($request->all());
            Machine::create($request ->only(['name','endorigem','enddestino','valor']));
            return redirect('/machines')->with('sucesso', 'maquina cadastrada com sucesso!');

    }

}