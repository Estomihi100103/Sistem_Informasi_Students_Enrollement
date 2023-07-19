<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
</head>


<br><br><br>
<div class="row justify-content-center mt-5">
    <div class="col-md-4">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif



        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form action="/login" method="post">
                @csrf

                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

                <div class="form-floating " >
                    <input type="username" name="username" class="form-control  @error('username') is-invalid   @enderror "
                        id="username" placeholder="name@example.com" autofocus required value="{{ old('username') }}">
                    <label for="username">username</label>


                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                    <label for="password">Password</label>
                </div>

                {{-- <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div> --}}
                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register"
                    class="text-decoration-none">Registrasi
                    now</a> </small>
        </main>
    </div>
</div>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</html>
