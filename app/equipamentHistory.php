<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipamentHistory extends Model
{
    protected $fillable = [
        'equipament_id', 'departament_id', 'old_name', 'old_departament', 'date'
    ];

    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];

    public function equipament(){
        return $this->hasMany(Equipament::class);
    }
}
