<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Teacher;

class Teacher extends Model
{
    //
    public $fillable = ['idTeacher','name','email','password','photo'];

    public function insert($name, $email, $photo){
        Teacher::create([
            'name' => $name,
            'email' => $email,
            'password' => "auto",
            'photo' => $photo
        ]);
    }
}
