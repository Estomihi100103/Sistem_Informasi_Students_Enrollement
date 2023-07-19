<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;



class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('courses.index', [
            "title" => "Course",
            "courses" => Course::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create', [
            "title" => "Create Course",
            "course" => Course::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        //validasi data

        $validatedData = $request->validate([
            'course_id' => 'required',
            'course_name' => 'required',
            'course_credit' => 'required',
            'course_semester' => 'required',
        ]);

        Course::create($validatedData);


        return redirect('/courses')->with('success', 'Mata kuliah Berhasil Ditambahkan');


    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //show detail student
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}