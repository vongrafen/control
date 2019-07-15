<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintence extends Model
{

    protected $fillable = [
        'data', 'end_date', 'obs'
    ];

    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];
    
    public function equipament(){
        return $this->belongsTo(Equipament::class);
    }

}
