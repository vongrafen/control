<?php

namespace App\Http\Controllers;

use App\Equipament;
use App\Maintence;
use App\Departament;
use Illuminate\Http\Request;

class MaintenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $equipament = Maintence::SELECT('maintences.*', 'equipaments.patrimony as patrimony')
            ->LEFTJOIN('equipaments', 'maintences.equipament_id', '=', 'equipaments.id' )   
            ->get();

        /*
         select * from  equipaments
         left join maintences on 
         maintences.equipament_id = equipaments.id 
         and maintences.id = (select max(id) 
         from maintences as main where main.equipament_id = equipaments.id ) 
         */
       
        return view('maintence.index', [
            'equipament' => $equipament,
            //'departament' => $departament
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Maintence $maintence, Request $request)
    {
        $equipament = Equipament::find($request->equipament_id);
        $equipament->name = $request->name;
        $equipament->departament_id = $request->departament_id;
        $equipament->save();

        $maintence->equipament_id = $request->equipament_id;
        $maintence->departament_id = $request->departament_id;
        $maintence->obs = $request->obs;
        $maintence->data = $request->data;
        $maintence->save();

        //$maintence = Maintence::create($request->all());
        return redirect()->route('maintenceIndex');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\maintence  $maintence
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maintence = Equipament::SELECT('equipaments.*', 'departaments.name as departamentName', 'maintences.*', 'equipaments.id as equipamentID')
                ->LEFTJOIN('maintences', 'equipaments.id', '=', 'maintences.equipament_id')
                ->LEFTJOIN('departaments', 'equipaments.departament_id', '=', 'departaments.id')
                ->where('equipaments.id', $id)
                ->first();
        
        $departament = Departament::all();

        return view('maintence.add', [
            'maintence' => $maintence,
            'departament' => $departament,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\maintence  $maintence
     * @return \Illuminate\Http\Response
     */
    public function edit(maintence $maintence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\maintence  $maintence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maintence $maintence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\maintence  $maintence
     * @return \Illuminate\Http\Response
     */
    public function destroy(maintence $maintence)
    {
        //
    }
}
