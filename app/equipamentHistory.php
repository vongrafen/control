<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Equipament;
use App\Depatament;
use Illuminate\Http\Request;

class EquipamentHistory extends Model
{
    protected $fillable = [
        'equipament_id', 'departament_id', 'old_name', 'old_departament', 'date', 'new_name', 'new_departament'
    ];

    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];

    public function equipament(){
        return $this->hasMany(Equipament::class);
    }

    public static function historic(Equipament $equipament, Request $request)
    {
        $historic = new EquipamentHistory;
        $historic->old_name = $equipament->name;
        $departamentName = Departament::find($equipament->departament_id);
        $historic->old_departament = $departamentName->name;
        $historic->equipament_id = $request->equipament_id;
        $historic->departament_id = $request->departament_id;
        $historic->new_name = $request->name;
        $departamentName = Departament::find($request->departament_id);
        $historic->new_departament = $departamentName->name;
        $historic->date = date('Y/m/d');
        $historic->save();
    }
}
