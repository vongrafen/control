<?php

namespace App\Http\Controllers;

use App\Departament;
use App\Equipament;
use App\EquipamentHistory;
use Illuminate\Http\Request;

class EquipamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipament = Equipament::SELECT('equipaments.*','departaments.name as name_eq')
            ->LEFTJOIN('departaments', 'equipaments.departament_id', '=', 'departaments.id' )   
            ->get();
       
        return view('equip.index', [
            'equipament' => $equipament,
            //'departament' => $departament
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Equipament $equipament)
    {

        //$equipament->create($request->all());

        $equipament->patrimony = $request->patrimony;
        $equipament->name = $request->name;
        $equipament->so = $request->so;
        $equipament->arquiteture = $request->arquiteture;
        $equipament->pc_brand = $request->pc_brand;
        $equipament->pc_model = $request->pc_model;
        $equipament->service_tag = $request->service_tag;
        $equipament->partnumber = $request->partnumber;
        $equipament->proc_brand = $request->proc_brand;
        $equipament->proc = $request->proc;
        $equipament->proc_hz = $request->proc_hz;
        $equipament->memory = $request->memory;
        $equipament->memory_ddr = $request->memory_ddr;
        $equipament->memory_frequency = $request->memory_frequency;
        $equipament->qtd_slots = $request->qtd_slots;
        $equipament->memory_slots = $request->memory_slots;
        $equipament->disk = $request->disk;
        $equipament->disk_type = $request->disk_type;
        $equipament->user = $request->user;
        $equipament->departament_id = $request->departament_id;
        $equipament->save();

        $history = new EquipamentHistory;
        $history->old_name = $equipament->name;
        $history->old_departament = $equipament->departament_id;
        $history->equipament_id = $equipament->id;
        $history->date = date('Y-m-d');
        $history->save();

        return redirect()->route('index');

        
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
     * @param  \App\Equipament  $equipament
     * @return \Illuminate\Http\Response
     */
    public function show(Equipament $equipament)
    {
        $departament = Departament::all();       
        
        return view('equip.register', [
            'departament' => $departament,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipament  $equipament
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipament = Equipament::select('equipaments.*','departaments.name as name_equipament')
            ->leftjoin('departaments', 'equipaments.departament_id', '=', 'departaments.id' )
            ->where('equipaments.id', $id)
            ->first();

        return view('equip.edit', [
            'equipament' => $equipament,
    
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipament  $equipament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Equipament::find($id)->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipament  $equipament
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipament::find($id)->delete();
        return redirect()->route('index');
    }

}
