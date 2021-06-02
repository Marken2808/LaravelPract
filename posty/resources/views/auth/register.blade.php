@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center my-5">
        <div class="w-25 p-3 bg-white rounded">
            <form action="{{ route('register') }}" method="post">

                @csrf

                <div class="form-floating my-2">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                    name="name" id="name" placeholder="name@example.com" value="{{ old('name') }}">
                    <label for="name">Name</label>

                    @error('name')
                        <div class="text-danger form-text">
                            {{$message}}
                        </div>
                    @enderror

                </div>

                <div class="form-floating my-2">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" 
                    name="username" id="username" placeholder="Username" value="{{ old('username') }}">
                    <label for="username">Username</label>

                    @error('username')
                        <div class="text-danger form-text">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-floating my-2">
                    {{-- <label for="email" class="form-label">Email</label> --}}
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                    name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                    <label for="email">Email</label>

                    @error('email')
                        <div class="text-danger form-text">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-floating my-2">
                    {{-- <label for="password" class="form-label">Password</label> --}}
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                    name="password" id="password" placeholder="Password" value="">
                    <label for="password">Password</label>

                    @error('password')
                        <div class="text-danger form-text">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-floating my-2">
                    {{-- <label for="repeatPassword" class="form-label">Confirm Password</label> --}}
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
                    name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" value="">
                    <label for="password_confirmation">Confirm Password</label>

                    @error('password_confirmation')
                        <div class="text-danger form-text">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection