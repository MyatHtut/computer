<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ygnevent</title>

    {{--<link href="{{ elixir('css/all.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="/css/all.css"/>
</head>
<body>




<nav class="navbar navbar-default bg">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Computer Buyer Guide</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             <span class="font-col">Shop</span>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/ex/create') }}">Create</a></li>
                            <li><a href="{{ url('/shops/api') }}">API</a></li>
                            <li><a href="{{ url('/ex') }}">View</a></li>

                        </ul>
                    </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="font-col">Blog</span>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/blog/create') }}">Create</a></li>
                        <li><a href="{{ url('/blogs/api') }}">API</a></li>
                        <li><a href="{{ url('/blog') }}">View</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="font-col">Specs</span>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/spec/create') }}">Create</a></li>
                        <li><a href="{{ url('/specs/api') }}">API</a></li>
                        <li><a href="{{ url('/spec') }}">View</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="font-col">Acc</span>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/acc/create') }}">Create</a></li>
                        <li><a href="{{ url('/accs/api') }}">API</a></li>
                        <li><a href="{{ url('/acc') }}">View</a></li>

                    </ul>
                </li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    {{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>


                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>


@yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>