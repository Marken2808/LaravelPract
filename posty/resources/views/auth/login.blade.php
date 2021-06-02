@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center my-5">
        <div class="w-25 p-3 bg-white rounded">

            @if (session('status'))

                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <div>
                        {{session('status')}}
                    </div>
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">

                @csrf
                
                <div class="form-floating my-2">
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                    name="password" id="password" placeholder="Password" value="">
                    <label for="password">Password</label>

                    @error('password')
                        <div class="text-danger form-text">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection