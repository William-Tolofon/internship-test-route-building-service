<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
  protected $fillable = [
        'numero_line','details','nombre_arret','create_by','company_id'
    ];
}
