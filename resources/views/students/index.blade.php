@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mahasiswa </h1>

    </div>


    @if (session('success'))
        <div class="alert alert-success col-lg-8 alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive col-lg-8 ">
        <a href="/students/create" class="btn btn-primary mb-3">Add new student</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->prodi }}</td>
                        <td>
                            <a href="/students/{{ $student->username }}" class="badge bg-info"> <span data-feather="eye"></span></a>
                            
                            <a href="" class="badge bg-warning"> <span data-feather="edit"></span></a>

                            <form action="" method="post" class="d-inline">

                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
