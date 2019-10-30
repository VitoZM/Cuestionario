<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public $fillable = ['idQuestion','idSubject','question','type'];
}
