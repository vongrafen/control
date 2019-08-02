<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $fillable = [
        'sigla', 'name', 'cnpj'
    ];

    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];
     
}