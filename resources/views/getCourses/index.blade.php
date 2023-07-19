@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pilih Mata Kuliah </h1>

    </div>
    <div class="table-responsive col-lg-8 ">
        <form method="post" action="/getCourses" class="mb-5 ">
            @csrf
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
                                {{-- <input class="form-check-input" type="checkbox" name="courses[]"
                                        value="{{ $course->course_id }}"> --}}




                                <input class="form-check-input" type="checkbox" name="courses[]"
                                    value="{{ $course->course_id }}" {{ $course->isTaken() ? 'checked' : '' }}>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary mt-3">Submit KRS</button>
        </form>
    </div>
@endsection
