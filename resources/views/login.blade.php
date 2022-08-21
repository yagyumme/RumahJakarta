@extends('layouts.main')

@section('container')

    @if (session()->has('success'))

        <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif

    @if (session()->has('loginError'))

        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif
    
    <div class="container mt-4">
    <h1 style="mt-3">Login</h1>
    <div class="container-fluid">
        <form action="/login" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter username" name="email" required autofocus value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control {{-- @error('password') is-invalid @enderror --}}" id="password" placeholder="Enter password" name="password" required>
               {{--  @error('password')
                    <div class="invalid-feedback">
                        email atau password salah
                    </div>
                @enderror --}}
            </div>
            
            <div class="row mb-3">
                <div class="col">
                    <a href="/register" style="text-decoration: none;">Register Now</a>
                </div>
                {{-- <div class="col-sm-2">
                    <a href="" style="text-decoration: none; text-color: ;">Lupa Password</a>
                </div> --}}
            </div>
            
            <!--<div class="form-check mb-3">
                <input class="form-check-input @error('myCheck') is-invalid @enderror" type="checkbox" id="myCheck" name="remember" required>
                <label class="form-check-label" for="myCheck">I agree on blabla.</label>
                @error('myCheck')
                    <div class="invalid-feedback">
                        Check this checkbox to continue.
                    </div>
                @enderror
            </div>-->
            <button type="submit" class="btn btn-dark">Login Sekarang</button>
        </form>
    </div>
    </div><br>

    <div class="mt-5 mb-5" style="height: 60px;"></div>
@endsection