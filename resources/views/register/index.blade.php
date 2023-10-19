@extends('componentLogin.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registration Now</h1>
                        </div>
                        <form method="post" action="/register">
                            @csrf
                            <div class="form-floating">
                                <input type="text"
                                    class="form-control form-control-user @error('name') is-invalid @enderror"
                                    name="name" id="name" placeholder="name" required value="{{ old('name') }}">
                                <label for="name">Name</label>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                                <label for="email">Email</label>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="Password"
                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <button type="submit" class="w-100 btn btn-primary btn-user btn-block">
                                Submit
                            </button>
                        </form>
                        <small class="text-center">already account? <a href="/login">Login now!</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
