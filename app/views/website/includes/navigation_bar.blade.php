<!-- Navigation -->
<nav class="navbar navbar-default navbar_transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#"><img src="{{URL::to('webassets/img/logo/uae_white_logo-01.svg')}}"></a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <nav id="nav_titles">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="active_nav" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/about') }}">ABOUT US</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/apply') }}">APPLY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/profiles') }}">PROFILES</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/contact') }}">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</nav>
