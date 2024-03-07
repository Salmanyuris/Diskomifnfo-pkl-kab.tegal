@extends('layouts.main')

@section('container')


<div class="row justify-content-center login-container">
    <div class="col-md-4">
        <div class="login-form">
            <div class="card rounded-4 shadow-sm">
                <div class="card-body blur-background">
                    <h2 class="text-center mb-4">Login</h2>
                    <form action="{{ route('loginStore') }}" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            @if(session('gagal'))
                            <div class="bg-danger">
                                <p class="text-light m-3">{{ session('gagal') }}</p>
                            </div>
                            @endif
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required />
                            @error('username')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required />
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group form-check mt-3">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <!-- <a href="{{ route('register') }}">Buat akun</a> -->
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary btn-block mt-3 rounded-4">Login ></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-3 text-center">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
                @endif
            </div>
        </div>
    </div>
</div>




@endsection