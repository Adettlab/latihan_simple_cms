@extends('componentLogin.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-5">
                        @if (session()->has('succsess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                        </div>
                        <form method="post" action="/login">
                            @csrf
                            <div class="form-floating">
                                <input type="text"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Email" autofocus required
                                    value="{{ old('email') }}">
                                <label for="Email">Email</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control form-control-user" name="password" id="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <br>
                            <button type="submit" class="w-100 btn btn-primary btn-user btn-block">
                                Login
                            </button>
                        </form>
                        <small class="text-center">not registered? <a href="/register">Registered
                                now!</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
