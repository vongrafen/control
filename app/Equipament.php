<?php

namespace App;
use App\Departament;
use App\Maintence;

use Illuminate\Database\Eloquent\Model;

class Equipament extends Model
{
    protected $fillable = [
        'patrimony','name','so','arquiteture','pc_brand','pc_model','service_tag','partnumber', 'departament_id', 'maintence_id',
        'proc_brand','proc','proc_hz','memory','memory_ddr','memory_frequency','qtd_slots','memory_slots','disk','disk_type','user','active',    
    ];

    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];

    public function departaments(){
        return $this->hasOne(Departament::class);
    }

    public function maintences(){
        return $this->hasMany(Maintence::class);
    }

}
