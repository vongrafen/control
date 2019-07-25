<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Equipament;
use App\EquipamentHistory;
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

        /*$equipament = Maintence::SELECT('maintences.*', 'equipaments.patrimony as patrimony')
            ->LEFTJOIN('equipaments', 'maintences.equipament_id', '=', 'equipaments.id' )   
            ->get();

        /*
         select * from  equipaments
         left join maintences on 
         maintences.equipament_id = equipaments.id 
         and maintences.id = (select max(id) 
         from maintences as main where main.equipament_id = equipaments.id ) 
         */

        //dd($equipament);

        $equipament = DB::select('select * from  equipaments
        left join maintences on 
        maintences.equipament_id = equipaments.id 
        and maintences.id = (select max(id) 
        from maintences as main where main.equipament_id = equipaments.id )');

        return view('maintence.index', [
            'equipament' => $equipament,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Maintence $maintence, Request $request)
    {
        $equipament = Equipament::find($request->equipament_id);
        $history = new EquipamentHistory;
        
        $history->old_name = Equipament::find($request->equipament_id)->name;          
        $equipament->name = $request->name;
        $history->new_name = $request->name;
        $history->old_departament = Equipament::find($request->equipament_id)->departament_id;
        $equipament->departament_id = $request->departament_id;
        $history->new_departament = $request->departament_id;
        $history->equipament_id = Equipament::find($request->equipament_id)->id;
        $history->date = date('Y-m-d');
        $equipament->save();

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
