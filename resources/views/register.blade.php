@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        <h1>Register</h1>
    <div class="container-fluid">
        <form action="/register" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Full Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Full Name" name="name" required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        Please fill out this field.
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="pnumber" class="form-label">Phone Number:</label>
                <input type="number" class="form-control @error('pnumber') is-invalid @enderror" id="pnumber" placeholder="Enter Phone Number" name="pnumber" required value="{{ old('pnumber') }}">
                @error('pnumber')
                    <div class="invalid-feedback">
                        Please fill out this field.
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Email" name="email" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        Please fill out this field.
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter Username" name="username" required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        Please fill out this field.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Password" name="password" required>
                @error('password')
                    <div class="invalid-feedback">
                        Please fill out this field.
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Register Now</button>
        </form>
    </div>
    </div>
    
    <div class="mb-5" style="height: 50px;"></div>
@endsection
