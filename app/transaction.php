<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
	protected $table='transaction';
    protected $primaryKey= 'TransactionID';

    protected $fillable = [
          'TransactionID', 'TransactionType'
    ];

    public $timestamps=false;
    
}
