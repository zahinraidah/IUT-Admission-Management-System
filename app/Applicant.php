<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{

	protected $table='applicant_info';
    protected $primaryKey= 'pin';

    protected $fillable = [
         'pin', 'password'
    ];

    public $timestamps=false;

}
