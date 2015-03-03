<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Web Platform Scaffold</title>
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/base.css')}}">
    </head>

    <body>
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
                </div>
            </nav>





                @yield('header')

            </div>
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
            <div class="container">
                @yield('content')
            </div>

            <div class="panel-footer">
                <p class="text-center text-muted">Design and code copyright Chris Luffingham 2015</p>
            </div>
        @yield('footer')
    </body>
</html>