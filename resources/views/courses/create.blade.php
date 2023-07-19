@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Daftar Matakuliah </h1>

    </div>

    <div class="col-lg-8"> {{-- agar tidak penuh --}}

        {{-- enctype="multipart/form-data" berguna , agar form bisa menangani file --}}

        <form method="post" action="/courses" class="mb-5 ">
            @csrf {{-- agar tidak ada error 419 page expired --}}

            <div class="mb-3">
                <label for="course_id" class="form-label">Course Id</label>
                <input type="text" class="form-control @error('course_id') is-invalid @enderror " id="course_id"
                    name="course_id" course_id="course_id" required autofocus value="{{ old('course_id') }}">
                @error('course_id')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="course_name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('course_name') is-invalid @enderror " id="course_name"
                    name="course_name"value="{{ old('course_name') }}">
                @error('course_name')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="course_credit" class="form-label">Credit</label>
                <input type="text" class="form-control @error('course_credit') is-invalid @enderror " id="course_credit"
                    name="course_credit"value="{{ old('course_credit') }}">
                @error('course_credit')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="course_semester" class="form-label">Semester</label>
                <input type="text" class="form-control @error('course_semester') is-invalid @enderror " id="course_semester"
                    name="course_semester"value="{{ old('course_semester') }}">
                @error('course_semester')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Add Course</button>
        </form>

    </div>
    <script></script>
@endsection
