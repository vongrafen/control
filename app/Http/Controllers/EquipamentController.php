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
        $equipament-> Equipament::all();
        $departament = Departament::SELECT('equipaments.*','departaments.name as departaments')
        ->LEFTJOIN('departaments', 'equipaments.departament_id', '=', 'departaments.id' )   
        ->first();

        return view('cadastrar')
            ->with('departament',  $departament);
        
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
    public function edit(Equipament $equipament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipament  $equipament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipament $equipament)
    {
        //
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
