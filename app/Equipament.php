<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipament extends Model
{
    protected $fillable = [
        'patrimony','name','so','arquiteture','pc_brand','pc_model','service_tag','partnumber',
        'proc_brand','proc','proc_hz','memory','memory_ddr','memory_frequency','qtd_slots','memory_slots','disk','disk_type','user','active',    
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'equipaments';

    public function index ()
    {                
        $data = Equipament::all();
        return $data;
    }

    public function create ($request)
    {               
        try {
            $data = new Equipament;
            $data->patrimony = $request->patrimony;
            $data->name = $request->name;
            $data->so = $request->so;
            $data->arquiteture = $request->arquiteture;
            $data->pc_brand = $request->pc_brand;
            $data->pc_model = $request->pc_model;
            $data->service_tag = $request->service_tag;
            $data->partnumber = $request->partnumber;
            $data->so = $request->so;
            $data->arquiteture = $request->arquiteture;
            $data->pc_brand = $request->pc_brand;
            $data->pc_model = $request->pc_model;
            $data->proc_brand = $request->proc_brand;
            $data->proc = $request->proc;
            $data->proc_hz = $request->proc_hz;
            $data->memory = $request->memory;
            $data->memory_ddr = $request->memory_ddr;
            $data->memory_frequency = $request->memory_frequency;
            $data->qtd_slots = $request->qtd_slots;
            $data->memory_slots = $request->memory_slots;
            $data->disk = $request->disk;
            $data->disk_type = $request->disk_type;
            $data->proc = $request->proc;
            $data->proc_hz = $request->proc_hz;
            $data->user = $request->user;
            $data->departament = $request->departament;
            $data->active = $request->active;
            $validate = $data->save();
            
            if ($validate) {
                return back()->with('Sucesso','Equipamento cadastrado com Sucesso');
            }    
        } catch(\Illuminate\Database\QueryException $e) {
            return back()->with('error','ERRO: Ops! Algo deu errado!');
        } 
    }

}
