@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mata Kuliah </h1>

    </div>


    @if (session('success'))
        <div class="alert alert-success col-lg-8 alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive col-lg-8 ">
        <a href="/courses/create" class="btn btn-primary mb-3">Add new course</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->course_id }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_credit }}</td>
                        <td>{{ $course->course_semester }}</td>
                        <td>
                            <a href="" class="badge bg-info"> <span data-feather="eye"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
