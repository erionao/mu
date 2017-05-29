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
    <link rel="stylesheet" href="{{URL::to('js/dist/css/email-config.css')}}"/>



</head>

<body>

<div id="wrapper">

    <!-- Navigation Bar  -->

    <!-- Navigation -->
    @include('admin.layouts.navigation')


            <!-- End Of navigationbar  -->


    <!-- Page Content -->
    <div id="page-wrapper" class="email-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 email_page_content">
                    <p>Email Configuration</p>
                    <input type="email" name="" placeholder="Add Email">
                    <select>
                        <option value="volvo">Gmail</option>
                        <option value="saab">Yahoo</option>
                        <option value="opel">Hotmail</option>
                    </select>
                    <input type="password" name="" placeholder="Password">
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
