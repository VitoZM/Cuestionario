<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    public $fillable = ['idAnswer','idQuestion','answer','state'];
}
