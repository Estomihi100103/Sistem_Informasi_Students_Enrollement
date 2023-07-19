<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
</head>


<br><br><br>
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration form</h1>
            <form action="/register" method="post">
                @csrf
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <div class="form-floating">

                    <input type="text" name="name"
                        class="form-control rounded-top @error('name')is-invalid  @enderror()" id="name"
                        placeholder="Name" required value="{{ old('name') }}"> {{-- required berguna agar error pada browsernya dulu di tampilkan baru error dari laravel pada saat pengisina name  --}}
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback is-invalid">
                            {{ $message }}
                        </div>
                    @enderror



                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')is-invalid  @enderror()"
                        id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group form-floating">
                    <select class="form-select" name="status">
                        <option selected>Mahasiswa</option>
                        <option value="1">Dosen</option>
                        
                    </select>
                    <button class="btn btn-outline-secondary" type="button">status</button>
                </div>
                <div class="form-floating">
                    <input type="password" name="password"
                        class="form-control rounded-bottom @error('password')is-invalid  @enderror()" id="password"
                        placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login"
                    class="text-decoration-none">Login now</a> </small>
        </main>

    </div>
</div>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</html>
