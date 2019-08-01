<?php

namespace App\Http\Controllers;

use App\EquipamentHistory;
use App\Equipament;
use App\Departament;
use Illuminate\Http\Request;

class EquipamentHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\equipamentHistory  $equipamentHistory
     * @return \Illuminate\Http\Response
     */
    public function show(EquipamentHistory $equipamentHistory)
    {
        //$equipamentHistory = EquipamentHistory::all();   

        $equipamentHistory = EquipamentHistory::select('equipament_histories.*',
                                                        'departaments.name as nameDepartament', 
                                                        'equipaments.name as nameEquipament', 
                                                        'equipaments.patrimony as patrimony')
            ->leftjoin('equipaments', 'equipament_histories.equipament_id', '=', 'equipaments.id' )
            ->leftjoin('departaments', 'equipament_histories.departament_id', '=', 'departaments.id' )
            ->get();

        //dd($equipamentHistory);
        
        return view('maintence.history', [
            'equipamentHistory' => $equipamentHistory,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\equipamentHistory  $equipamentHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(equipamentHistory $equipamentHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\equipamentHistory  $equipamentHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, equipamentHistory $equipamentHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\equipamentHistory  $equipamentHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(equipamentHistory $equipamentHistory)
    {
        //
    }

}
