<?php

namespace App\Http\Controllers;

use App\Equipament;
use App\Maintence;
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
     * @param  \App\maintence  $maintence
     * @return \Illuminate\Http\Response
     */
    public function show(maintence $maintence)
    {
        //
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
