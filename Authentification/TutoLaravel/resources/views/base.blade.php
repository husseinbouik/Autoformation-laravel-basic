<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <style>
        @layer demo {
            button {
                all: unset;
            }
        }
    </style>
</head>
<body>
    @php
$routeName = request()->route()->getName();

    @endphp
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a @class(['nav-link', 'active' =>str_starts_with($routeName, 'blog.')]) aria-current="page" href="{{ route('blog.index')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>

                <div class="navbar-nav ns-auto nb-2 nb-lg-0">
                    @auth
                        {{ Auth::user()->name}}
                        <form action="{{route('auth.logout')}}" method="POST" class="nav-item">
                        @method('delete')
                        @csrf
                        <button class="nav-link">Logout</button>
                        </form>
                    @endauth
                    @guest
                    <div class="nav-item">
                        <a href="{{ route('auth.login')}}" class="nav-link">connect</a>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
            
        @endif
    </div>
</body>
</html>
