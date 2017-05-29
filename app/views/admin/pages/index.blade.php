<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emirates Graphic CMS</title>
    <!-- Tab Logo -->
    <link rel="icon" href="img/es_logo.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::to('js/vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/vendor/metisMenu/metisMenu.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/dist/css/sb-admin-2.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/vendor/font-awesome/css/font-awesome.min.css')}}"/>

    <!-- Navigationbar Style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/navigavbar-style.css')}}"/>


    <!-- Main style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/dashboard_style.css')}}"/>



</head>

<body>

    <div id="wrapper">

<!-- Navigation Bar  -->

        <!-- Navigation -->
        @include('admin.layouts.navigation')


<!-- End Of navigationbar  -->


        <!-- Page Content -->
        <div id="page-wrapper" class="dashboard_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12" xmlns="http://www.w3.org/1999/html">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-book fa-3x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{$blogs['count']}}</div>
                                                <div>Blogs</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-image fa-3x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{$galleries['count']}}</div>
                                                <div>Gallery Images</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-users fa-3x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{$users['count']}}</div>
                                                <div>Users</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="col col-md-12">
                        <div class="row">
                            <div class="col col-md-4">
                                <h4>Added Blog (10)</h4>
                                @foreach($blogs['blogs'] as $blog)
                                <div class="card card-outline-danger text-center">
                                    <div class="card-block">
                                        <blockquote class="card-blockquote">
                                            <p>{{$blog->title}}</p>
                                            <footer>Added:  <cite title="Source Title">{{$blog->updated_at}}</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col col-md-4">
                                <h4>Added Gallery (10)</h4>
                                @foreach($galleries['gallery'] as $gallery)
                                <div class="card card-outline-secondary mb-3 text-center card_galery">
                                        <blockquote class="card-blockquote">
                                            <div class="row small_gallery_panel">
                                                <div class="col-md-9">
                                                    <p>Image uploaded</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{URL::to('uploads/gallery/'. $gallery->image)}}">
                                                </div>
                                            </div>
                                            <footer>Added: <cite title="Source Title">{{$gallery->created_at}}</cite></footer>
                                        </blockquote>
                                </div>
                                    @endforeach
                            </div>
                            <div class="col col-md-4">
                                <h4>Added Users (10)</h4>
                                @foreach($users['users'] as $user)
                                    <div class="card card-outline-secondary mb-3 text-center">
                                        <div class="card-block card card-outline-info">
                                            <blockquote class="card-blockquote">
                                                <p>User Email: {{$user->email}}</p>
                                                <footer>Added: <cite title="Source Title">{{$user->created_at}}</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="{{URL::to('/js/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/vendor/metisMenu/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/dist/js/sb-admin-2.js')}}" type="text/javascript"></script>

</body>

</html>
