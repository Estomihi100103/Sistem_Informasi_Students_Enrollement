<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\StudentCourse;

class user_sController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Students::where('username', auth()->user()->username)->firstOrFail(); //ambil data student yang username nya sama dengan username student yang sedang login
        $studentCourses = StudentCourse::where('nim', $student->nim)->get(); //ambil semua data studentCourse yang nim nya sama dengan nim student yang sedang login
        $course = Course::whereIn('course_id', $studentCourses->pluck('course_id'))->get(); //  //ambil semua data course yang id nya ada di $studentCourses


        return view('user_s.index', [
            "title" => "User",
            "student" => $student,
            "getKrs" => $course,

        ]);
    }






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}