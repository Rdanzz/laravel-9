<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_extracurriculars',  'extracurricular_id','student_id',);
    }
}
