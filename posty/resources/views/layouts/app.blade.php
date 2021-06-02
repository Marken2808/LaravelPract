<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                  </li>
                </ul>
                
                <div class="d-flex">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    @auth
                      <li class="nav-item mx-2">
                        <a class="nav-link" href="#" >{{ auth()->user()->name }}</a>
                      </li>
                      <li class="nav-item mx-2">
                        <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button class="btn btn-outline-info" type="submit">Logout</button>
                        </form>
                      </li>
                    @endauth

                    @guest
                      <li class="nav-item mx-2">
                        <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
                      </li>
                      <li class="nav-item mx-2">
                        <a class="btn btn-outline-success" href="{{ route('register') }}">Register</a>
                      </li>  
                    @endguest

                    
                    
                  </ul>
                  
                </div>
              </div>
            </div>
          </nav>
        @yield('content')
    </body>
</html>