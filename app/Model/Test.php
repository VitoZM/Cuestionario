<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    public $fillable = ['idTest','idTeacher','idSubject','name','duration','repetitions','rightAnswers','wrongAnswers','type','questions','initialDate','finalDate','description'];
}
