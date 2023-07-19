<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;
use App\Models\Course;


class StudentCourse extends Model
{
    use HasFactory;
    protected $table = 'student_course';
    protected $primaryKey = ['nim', 'course_id'];
    public $incrementing = false;

    protected $fillable = ['nim', 'course_id'];

    public function student()
    {
        return $this->belongsToMany(Student::class, 'student_course', 'course_id', 'nim');
    }

    public function course()
    {
        return $this->belongsToMany(Course::class, 'student_course', 'nim', 'course_id');
    }
}