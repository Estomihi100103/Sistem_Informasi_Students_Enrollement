@extends('layouts.main')

@section('container')
    <h3>Data dan Informasi {{ $student->name }}</h3>

    <div class="card mb-3 mt-4" style="max-width: 900px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $student->image) }}" class="img-fluid rounded-start" alt="{{ $student->image }}">
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
@endsection
