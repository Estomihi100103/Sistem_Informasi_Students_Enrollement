@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Mahasiswa </h1>

    </div>

    <div class="col-lg-8"> {{-- agar tidak penuh --}}

        {{-- enctype="multipart/form-data" berguna , agar form bisa menangani file --}}

        <form method="post" action="/students" class="mb-5 " enctype="multipart/form-data">
            @csrf {{-- agar tidak ada error 419 page expired --}}

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " id="name"
                    name="name" required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror " id="nim"
                    name="nim"value="{{ old('title') }}">
                @error('nim')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Akademik</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror " id="email"
                    name="email"value="{{ old('title') }}">
                @error('email')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror " id="username"
                    name="username"value="{{ old('title') }}">
                @error('username')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            {{-- <div class="mb-3">
                <label for="category" class="form-label">Prodi</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach

                </select>
            </div> --}}

            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <input type="text" class="form-control @error('prodi') is-invalid @enderror " id="prodi"
                    name="prodi"value="{{ old('title') }}">
                @error('prodi')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control @error('angkatan') is-invalid @enderror " id="angkatan"
                    name="angkatan"value="{{ old('title') }}">
                @error('angkatan')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Chose image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5" style="display: none;">
                <input class="form-control @error('image') is-invalid @enderror " type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback is-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>

    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
