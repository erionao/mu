<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nexlaw</title>

    <link rel="stylesheet" href="{{ asset("css/all.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/home.css") }}"/>

</head>

<body>
<script src="{{ asset("js/app.js") }}" type="text/javascript"></script>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <img src="{{asset('assets/img/toggle-logo-01.png')}}" class="toggle-logo-navigation">
            </button>
            <ul class="desktop-d-n navigationbar-social-mobile">
                <li>
                    <a class="nav-social" href="#"><img src= "{{asset('assets/img/social-t-01.png')}}"></a>
                </li>
                <li>
                    <a class="nav-social" href="#"><img src="{{asset('assets/img/social-t-01.png')}}"></a>
                </li>
                <li>
                    <a class="nav-social" href="#"><img src= "{{asset('assets/img/social-t-01.png')}}"></a>
                </li>
                <li>
                    <a class="nav-social" href="#"><img src="{{asset('assets/img/social-t-01.png')}}"></a>
                </li>
            </ul>
            <img src="{{asset('assets/img/nexlaw-logo-01.png')}}" class="mobile-d-n">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li >
                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">HOME</a>
                </li>
                <li>
                    <a href="{{ url('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">ABOUT</a>
                </li>
                <li>
                    <a href="{{ url('expertise') }}" class="{{ Request::is('expertise') ? 'active' : '' }}">EXPERTISE</a>
                </li>
                <li>
                    <a href="{{ url('casualites') }}" class="{{ Request::is('casualites') ? 'active' : '' }}">MAJOR CASUALITIES</a>
                </li>
                <li>
                    <a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">CONTACT US</a>
                </li>
                <li>
                    <a class="nav-social" href="#"><img src="{{asset('assets/img/social-t-01.png')}}" class="mobile-d-n"></a>
                </li>
                <li>
                    <a class="nav-social" href="#" ><img src= "{{asset('assets/img/social-t-01.png')}}" class="mobile-d-n"></a>
                </li>
                <li>
                    <a class="nav-social" href="#"><img src="{{asset('assets/img/social-t-01.png')}}" class="mobile-d-n"></a>
                </li>
                <li>
                    <a class="nav-social" href="#"><img src="{{asset('assets/img/social-t-01.png')}}" class="mobile-d-n"></a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
@yield('body')
<footer class="footer-section">
    @include('website.includes.footer')
</footer>

</body>


</html>
