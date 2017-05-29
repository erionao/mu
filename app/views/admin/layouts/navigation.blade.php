<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('dashboard') }}">Dashboard</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-top-buttons navbar-left">


        <li>
            <button type="button" onclick="window.open('{{URL::to('/')}}')" class="btn btn-danger">
                View Website
            </button>
        </li>
    </ul>


    <ul class="nav navbar-top-links navbar-right navigation-logo-brand">
        <img src="../img/emirates-logo-01.png">
    </ul>

    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ url('blog/lists') }}"><i class="fa fa-clipboard"></i> Blog Posts</a>
                </li>
                <li>
                    <a href="{{ url('cover') }}"><i class="fa fa-picture-o"></i> Cover Image</a>
                </li>
                {{--<li>--}}
                    {{--<a href="{{ url('gallery/images') }}"><i class="fa fa-picture-o"></i> Edit Gallery</a>--}}

                {{--</li>--}}
                <li>
                    <a href="{{ url('pages') }}"><i class="fa fa-columns"></i> Pages Text</a>
                </li>
                {{--<li>--}}
                    {{--<a href="{{ url('background') }}"><i class="fa fa-columns"></i> Pages Image</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="{{ url('job/lists') }}"><i class="fa fa-clipboard"></i> Job Offer</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="{{ url('email/configuration') }}"><i class="fa fa-columns"></i> Email Configuration</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{ url('users/lists') }}"><i class="fa fa-columns"></i> Users</a>
                </li>
                <li>
                    <a href="{{URL::to('logout')}}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
