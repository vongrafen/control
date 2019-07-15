<?php

namespace App\Http\Controllers;

use App\Departament;
use App\Equipament;
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
        $equipament->create($request->all());
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
        //
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

    public function autocomplete(Request $request)
    {
        $departament = Departament::select("name")
                ->where("name","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($departament);
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
    public function destroy(Equipament $equipament)
    {
        //
    }
}
