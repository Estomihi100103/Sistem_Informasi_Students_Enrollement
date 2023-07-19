<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;
use App\Models\StudentCourse;


class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'course_name', 'course_credit', 'course_semester'];


    public function isTaken()
    {
        $dataStudent = Students::where('username', auth()->user()->username)->firstOrFail();
        $nim = $dataStudent->nim;

        return StudentCourse::where('nim', $nim)->where('course_id', $this->course_id)->exists();
    }

}