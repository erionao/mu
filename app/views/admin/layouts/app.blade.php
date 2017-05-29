<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emirates Graphic CMS</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::to('js/vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/vendor/metisMenu/metisMenu.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/dist/css/sb-admin-2.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/vendor/font-awesome/css/font-awesome.min.css')}}"/>

    <!-- Custom Fonts -->

    <!-- Login Style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/login-style.css')}}"/>


</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <img src="{{URL::to('/img/login-logo-01.png ')}}">
                    <h3 class="panel-title">Please fill out the details ot log in</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/login') }}" style="text-align: center;">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block button-login">
                                Login
                            </button>
                            <a href="http://emiratesgraphic.com/" class="emirates-link-bottom"  target="_blank">www.emiratesgraphic.com</a>
                        </fieldset>
                    </form>
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



<!-- Metis Menu Plugin JavaScript -->

<!-- Custom Theme JavaScript -->


</body>

</html>