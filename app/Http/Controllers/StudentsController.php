<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');  //admin adalah nama gate yang telah dibuat di AuthServiceProvider.php
        return view('students.index', [
            "title" => "Students",
            "students" => Students::all()
        ]);

        



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create', [
            "title" => "Create Students",
            "students" => Students::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|size:8|unique:students',
            'name' => 'required',
            'username' => ['required', 'unique:students', 'not_regex:/\./'],
            'email' => 'required|email|unique:students',
            'prodi' => 'required',
            'angkatan' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        }

        Students::create($validatedData);

        return redirect('/students')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }



    /**
     * Display the specified resource.
     */
    public function show($username)
    {
        $student = Students::where('username', $username)->first();

        if (!$student) {
            abort(404, 'Mahasiswa tidak ditemukan');
        }

        return view('students.show', [
            "title" => "Detail Students",
            "student" => $student
        ]);
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
    public function update(UpdateStudentsRequest $request, Students $students)
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