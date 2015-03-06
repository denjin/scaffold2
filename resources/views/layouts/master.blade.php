<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Platform Scaffold</title>
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap-social.css')}}">
        <link rel="stylesheet" href="{{asset('/css/base.css')}}">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>

    <body>
        {{--navigation / header--}}
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Scaffold</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="/articles">Articles</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a data-toggle="modal" data-target="#contact-modal" href="#">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="/auth/login">Login</a></li>
                            <li><a href="/auth/register">Register</a></li>
                        @else
                            <li><a href="/auth/logout">Logout</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
            @yield('header')
        </div>

        {{--session messages--}}
        <div class="container" id="message-container">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-ok-circle"></span>{{Session::get('message')}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-exclamation-sign"></span>{{Session::get('error')}}
                </div>
            @endif
        </div>

        {{--page content--}}
        <div class="container">
            @yield('content')
        </div>

        @yield('footer')

        {{--page footer--}}
        <div class="panel-footer">
            <p class="text-center text-muted">Design and code copyright Chris Luffingham 2015</p>
        </div>

    </body>
</html>