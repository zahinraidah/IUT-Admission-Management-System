<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table='shortlist';
    protected $primaryKey= 'roll';

    protected $fillable = [
         'roll', 'id', 'pin', 'reg_no', 'name', 'gpa_score', 'pcme_score', 'seat'
    ];
}
