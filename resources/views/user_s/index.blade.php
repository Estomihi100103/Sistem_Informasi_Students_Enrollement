@extends('layouts.main')

@section('container')
    <br>
    <h3>Data dan Informasi {{ $student->name }}</h3>

    <div class="card mb-3 mt-4" style="max-width: 900px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $student->image) }}" class="img-fluid rounded-start"
                    alt="{{ $student->image }}">
            </div>

            <div class="col-md-8 d-flex ">
                <dl class="row m-4">
                    <dt class="col-sm-5 ">Nama</dt>
                    <dd class="col-sm-9">{{ $student->name }}</dd>

                    <dt class="col-5">Nomor Induk Mahasiswa</dt>
                    <dd class="col-sm-9">{{ $student->nim }}</dd>

                    <dt class="col-sm-5">Email Akademik</dt>
                    <dd class="col-sm-9"> {{ $student->email }}
                    </dd>

                    <dt class="col-sm-5">Program Studi</dt>
                    <dd class="col-sm-9">{{ $student->prodi }}</dd>

                    <dt class="col-sm-5">Angkatan</dt>
                    <dd class="col-sm-9">{{ $student->angkatan }}</dd>
                </dl>
            </div>
        </div>
    </div>


    <div class="card mb-3 mt-4" style="max-width: 900px;">
        <h3>Mata Kuliah</h3>
        <div class="table-responsive col-lg-8 mt-4">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Semester</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($getKrs as $krs)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $krs->course_id }}</td>
                            <td>{{ $krs->course_name }}</td>
                            <td>{{ $krs->course_credit }}</td>
                            <td>{{ $krs->course_semester }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
