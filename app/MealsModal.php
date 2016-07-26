<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealsModal extends Model
{
   protected $table = 'meals';
    protected $fillable = ['PatientName','date','value'];
}
