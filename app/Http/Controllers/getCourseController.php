<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\StudentCourse;
use App\Models\Students;

class getCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'getCourses.index',
            [
                "title" => "Course",
                "courses" => Course::all()
            ]
        );
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

        $dataStudent = Students::where('username', auth()->user()->username)->firstOrFail();
        $nim = $dataStudent->nim;
        $courseIds = $request->input('courses', []);

        foreach ($courseIds as $courseId) {
            //Periksa apakah suatu course sudah di ambil sebelumnya, jika sudah di ambil maka tidak perlu di ambil lagi
            $isExist = StudentCourse::where('nim', $nim)->where('course_id', $courseId)->exists();
            if ($isExist) {
                continue;
            }


            StudentCourse::create([
                'nim' => $nim,
                'course_id' => $courseId,
            ]);
        }

        // Redirect ke halaman atau tampilan yang sesuai
        return redirect('/user_s')->with('success', 'KRS berhasil disimpan.');
    }




    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
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
    public function update(Request $request, Course $course)
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