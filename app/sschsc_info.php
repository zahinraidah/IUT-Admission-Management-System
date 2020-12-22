<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sschsc_info extends Model
{
    protected $table='ssc_hsc_info';
    protected $primaryKey= 'ID';

    protected $fillable = [
         'SSCroll','SSCPassingYear','SSCBoard','HSCroll','HSCPassingYear','HSCBoard','Reg_no'
    ];

    public $timestamps=false;
}


